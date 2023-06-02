<?php

namespace App\Http\Controllers;

use App\Models\Addjob;
use App\Models\Applicant;
use App\Models\EditDistrict;
use App\Models\Editqualification;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobsOpening = Addjob::count();
        $applicantStatus = Applicant::count();

        return inertia(
            'AdminHome/index',
            compact('jobsOpening', 'applicantStatus')
            // [
            //     'addjobs' => Addjob::all()
            // ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Editqualification::all();
        return inertia(
            'AdminHome/create',
            [
                'editqualifications' => Editqualification::all(),
                'edit_districts' => EditDistrict::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Addjob::create(
            $request->validate([
                'job_title' => 'required',
                'No_of_post' => 'required',
                'department' => 'required',
                'district' => 'required',
                'description' => 'required',
                'edu_qualification' => 'required',
                // 'experience' => 'required',
                'salary' => 'required',
                'job_type' => 'required',
                'date_of_sub' => 'required',
            ])
        );

        return redirect()->route('admin.home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Addjob $addjob)
    {

        // $query = Addjob::all();

        return inertia(
            'AdminHome/show',
            [
                // 'addjob' => $addjob
                // 'addjobs' => $query
                // 'addjob' => $addjob
                'addjobs' => Addjob::all(),
                'applicants' => Applicant::all()
            ]
        );
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
