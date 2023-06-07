<?php

namespace App\Http\Controllers;

use App\Models\Addjob;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'AdminHome/ApplicantList/index',
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
    public function show(string $job_id, Applicant $applicant, Request $request)
    {
        $filters = $request->only([
            'name'
        ]);

        $query = Applicant::where('job_id', $job_id)->when(
            $filters['name'] ?? false,
            fn ($query, $value) => $query->where('name', 'like', "%{$value}%")
        )->paginate(5);

        // $query = Applicant::orderBy('created_at', 'asc')->Paginate(0)->withQueryString();

        // if ($filters['name'] ?? false) {
        //     $query->where('name', $filters['name']);
        // }

        return inertia(
            'AdminHome/ApplicantList/show',
            [
                'applicants' => $query,
                'filters' => $filters,
                'job_id' => $job_id,
                // Applicant::where('job_title', $title)->get()
            ]
        );

        // return Applicant::where('job_title', $title)->get();
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
