<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    /**
     * 初期画面表示
     * 
     * @return view
     */
    public function index()
    {
        return view('welcome', ['applicants' => $this->applicant->getAllApplicants()]);
    }
}
