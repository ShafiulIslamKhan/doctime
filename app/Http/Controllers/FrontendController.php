<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show home page
     */
    public function showHomePage()
    {
        return view('frontend.home');
    }

    /**
     * Show login page
     */
    public function showLoginPage()
    {
        return view('frontend.login');
    }

    /**
     * Show patient reg page
     */
    public function showPatientRegisterPage()
    {
        return view('frontend.patient.register');
    }

    /**
     * Show patient dash page
     */
    public function showPatientDashPage()
    {
        return view('frontend.patient.dashboard');
    }



    /**
     * Show doctor reg page
     */
    public function showDoctorRegisterPage()
    {
        return view('frontend.doctor.register');
    }

    /**
     * Show doctor dash page
     */
    public function showDoctorDashPage()
    {
        return view('frontend.doctor.dashboard');
    }














}
