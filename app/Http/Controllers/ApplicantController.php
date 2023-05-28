<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        return inertia(
            'Applicant/create',
            [
                'editqualifications' => Editqualification::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Applicant::create(
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required|max:10',
                'qualification' => 'required',
                'percentage' => 'required',
                'work_experience' => ''
            ])
        );

        return redirect()->route('user.applicant.create')->with('msg', 'You have registered successfully!');
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
