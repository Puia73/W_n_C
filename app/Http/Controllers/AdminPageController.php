<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Editqualification;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $query = Applicant::orderBy('created_at', 'asc')->paginate(10)->withQueryString();

        $filters = $request->only([
            'name',
            'qualification'
        ]);

        $query = Applicant::orderBy('created_at', 'asc')->when(
            $filters['name'] ?? false,
            fn ($query, $value) => $query->where('name', 'like', "%{$value}%")
        )->when(
            $filters['qualification'] ?? false,
            fn ($query, $value) => $query->where('qualification', "{$value}")
        )->paginate(10)->withQueryString();

        // if ($filters['name'] ?? false) {
        //     $query->where('name', 'like', "%{$filters['name']}%");
        // }

        return inertia(
            'AdminPage/index',
            [
                'editqualifications' => Editqualification::all(),
                'filters' => $filters,
                'applicants' => $query,
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
            'AdminPage/show',
            [
                'applicant' => $applicant
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        return inertia(
            'AdminPage/edit',
            [
                'applicant' => $applicant
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant)
    {
        $applicant->update(
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required|max:10',
                'qualification' => 'required',
                'work_experience' => ''
            ])
        );

        return redirect()->route('admin.page.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();

        return redirect()->route('admin.page.index');
    }
}
