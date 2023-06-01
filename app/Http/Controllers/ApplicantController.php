<?php

namespace App\Http\Controllers;

use App\Models\Addjob;
use App\Models\Applicant;
use App\Models\Editqualification;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Applicant/index',
            [
                'applicants' => Applicant::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return inertia(
            'Applicant/create',
            [
                'editqualifications' => Editqualification::all(),
                // 'job_id' => $request->job_id
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;



        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required|max:10',
                'qualification' => 'required',
                'hslc_mark_percent' => 'required',
                'hsslc_mark_percent' => '',
                'graduate_mark_percent' => '',
                'post_graduate_mark_percent' => '',
                'aadhaar' => 'required',
                'passport_photo' => 'required',
                'work_experience' => '',
                // 'resume' => 'required',
                'job_title' => 'required',
                // 'job_id' => 'required',
            ],
        );

        $passport_path = '';

        if ($request->hasFile('passport_photo')) {
            $passport_path = $request->file('passport_photo')->store('passport_photo', 'public');
        }




        Applicant::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'qualification' => $request->qualification,
                'hslc_mark_percent' => $request->hslc_mark_percent,
                'hsslc_mark_percent' => $request->hsslc_mark_percent,
                'graduate_mark_percent' => $request->graduate_mark_percent,
                'post_graduate_mark_percent' => $request->post_graduate_mark_percent,
                'aadhaar' => $request->aadhaar,
                'passport_photo' => $passport_path,
                'work_experience' => $request->work_experience,
                // 'resume' => 'required',
                'job_title' => $request->job_title,
                // 'job_id' => $request->job_id,
            ],

        );



        // $request->addjob()->applicants()->create(
        // Applicant::create(
        //     $request->validate(
        //         [
        //             'name' => 'required',
        //             'email' => 'required|email',
        //             'contact' => 'required|max:10',
        //             'qualification' => 'required',
        //             'hslc_mark_percent' => 'required',
        //             'hsslc_mark_percent' => '',
        //             'graduate_mark_percent' => '',
        //             'post_graduate_mark_percent' => '',
        //             'aadhaar' => 'required',
        //             'passport_photo' => 'required',
        //             'work_experience' => '',
        //             // 'resume' => 'required',
        //             'job_id' => 'required',
        //         ],
        //     ),

        // );

        return redirect()->route('user.applicant.index')->with('msg', 'You have registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
