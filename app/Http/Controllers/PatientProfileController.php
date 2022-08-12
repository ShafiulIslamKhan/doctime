<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientProfileController extends Controller
{
    /**
     * Show patient settings page
     */
    public function showPatientSettingsPage()
    {
        return view( 'frontend.patient.settings' );
    }

      /**
     * Show patient password page
     */
    public function showPatientPasswordPage()
    {
        return view( 'frontend.patient.password' );
    }

    /**
     * Password change
     */
    public function patientPasswordChange(Request $request)
    {
        //Old password check
        if ( !password_verify( $request -> old_pass, Auth::guard( 'patient' ) ->user() -> password  ) ) {
            return back() -> with( 'danger', 'পুরানো পাসওয়ার্ড মেলেনি' );
        }

        if ( $request -> pass != $request -> pass_confirmation ) {
            return back() -> with( 'warning', 'নতুন পাসওয়ার্ড নিশ্চিতকরণ ব্যর্থ হয়েছে' );
        }

        $data = Patient::findOrFail( Auth::guard( 'patient' ) ->user() -> id );
        $data -> update([
            'password' => Hash::make($request -> pass)
        ]);

        Auth::guard( 'patient' ) -> logout();

        return redirect() -> route('login.page') -> with( 'success', 'পাসওয়ার্ড সফলভাবে পরিবর্তন করা হয়েছে' );



    }
}


