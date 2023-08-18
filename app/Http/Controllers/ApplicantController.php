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
        $applicants = Applicant::getAllApplicants();
        return view('index', compact('applicants'));
    }

    /**
     * 登録画面
     */
    public function input()
    {
        return view('applicants.input');
    }

    /**
     * 登録処理
     * @params Request
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'nullable|integer|min:0|max:150',
            'application_route' => 'nullable|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'email' => 'required|email',
            'tel' => 'nullable|string|max:255',
            'gender' => 'required|string|in:male,female,other',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'other_file' => 'nullable|file|max:2048',
            'link' => 'nullable|url|max:255',
            'memo' => 'nullable|string|max:3000',
        ]);

        $applicant = new Applicant;
        $applicant->name = $validatedData['name'];
        $applicant->age = $validatedData['age'];
        $applicant->application_route = $validatedData['application_route'];
        $applicant->occupation = $validatedData['occupation'];
        $applicant->email = $validatedData['email'];
        $applicant->tel = $validatedData['tel'];
        // $applicant->gender = $validatedData['gender'];
        $applicant->link = $validatedData['link'];
        $applicant->memo = $validatedData['memo'];

        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $resumePath = $resume->store('resumes');
            $applicant->resume = $resumePath;
        }

        if ($request->hasFile('other_file')) {
            $otherFile = $request->file('other_file');
            $otherFilePath = $otherFile->store('other_files');
            $applicant->other_file = $otherFilePath;
        }

        $applicant->save();

        return redirect('/')->with('success', '応募者情報を登録しました');
    }

    /**
     * 詳細表示
     */
    public function detail($id)
    {
        if (empty($id) === true) {
            return redirect('/')->with('flash_message', '不正な遷移です。');
        }

        $details = Applicant::getApplicantById($id);

        dd($details);

        if ($details === null) {
            return redirect('/')->with('flash_message', '予期せぬエラーが発生しました。');
        }
        return view('input.detail', compact('details'));
    }
}
