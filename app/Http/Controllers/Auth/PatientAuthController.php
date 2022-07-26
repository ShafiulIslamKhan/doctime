<?php

namespace App\Http\Controllers\Auth;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class PatientAuthController extends Controller
{
    
    /**
     * Patient register 
     */
    public function register(Request $request)
    {
        //Data validate
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'cell' => 'required',
            'pass' => 'required|confirmed'
        ]);

        //data store
        $patient = Patient::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'mobile' => $request -> cell,
            'password' => password_hash( $request -> pass, PASSWORD_DEFAULT )
        ]);

        //Return back
        return redirect() -> route('patient.reg.page') -> with( 'success', " Hi " . $patient -> name ." , your account is ready. Now login. " );


        

    }


    /**
     * Patient login 
     */
    public function login(Request $request)
    {
        //Data validate
        $this -> validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ( Auth::guard('patient') -> attempt([ 'email' => $request -> email, 'password' => $request -> password ]) ) {
            
            return redirect() -> route('patient.dash.page');

        } else {

            return redirect() -> route('login.page') -> with( 'danger', 'Authentication failed' );
            
        }
        


        

    }



}
