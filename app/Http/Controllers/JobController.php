<?php

namespace App\Http\Controllers;

use App\Models\AddJob;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'AdminHome/Jobs/index',
            [
                'addjobs' => Addjob::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Addjob $addjob)
    {
        return inertia(
            'AdminHome/Jobs/show',
            [
                'addjob' => $addjob
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Addjob $addjob)
    {
        return inertia(
            'AdminHome/Jobs/edit',
            [
                'addjob' => $addjob
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Addjob $addjob)
    {
        $addjob->update(
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

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addjob $addjob)
    {
        $addjob->delete();

        return redirect()->route('admin.jobs.index');
    }
}
