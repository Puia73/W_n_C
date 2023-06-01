<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\AppStatus;
use App\Models\Editqualification;
use Illuminate\Http\Request;

class AppStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(
            'name',
            'qualification',
            'job_title'
        );

        $query = Applicant::orderBy('created_at', 'asc')->when(
            $filters['name'] ?? false,
            fn ($query, $value) => $query->where('name', 'like', "%{$value}%")
        )->when(
            $filters['qualification'] ?? false,
            fn ($query, $value) => $query->where('qualification', 'like', "%{$value}%")
        )->when(
            $filters['job_title'] ?? false,
            fn ($query, $value) => $query->where('job_title', 'like', "%{$value}%")
        )
            ->Paginate(5)->withQueryString();

        return inertia(
            'AdminHome/AppStatus/index',
            [
                'editqualifications' => Editqualification::all(),
                'applicants' => $query,
                'filters' => $filters,
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
    public function show(Applicant $applicant)
    {
        return inertia(
            'AdminHome/AppStatus/show',
            [
                'applicant' => $applicant
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppStatus $appStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppStatus $appStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
    }
}
