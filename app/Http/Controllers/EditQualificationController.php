<?php

namespace App\Http\Controllers;

use App\Models\Editqualification;
use Illuminate\Http\Request;

class EditQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'EditQualification/index',
            [
                'editqualifications' => Editqualification::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('EditQualification/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Editqualification::create(
            $request->validate([
                'qualification' => 'required'
            ])
        );

        return redirect()->route('admin.qualification.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editqualification $editqualification)
    {
        return inertia(
            'EditQualification/show',
            [
                'editqualification' => $editqualification
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editqualification $editqualification)
    {
        return inertia(
            'EditQualification/edit',
            [
                'editqualification' => $editqualification
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editqualification $editqualification)
    {
        $editqualification->update(
            $request->validate([
                'qualification'=> 'required'
            ])
        );

        return redirect()->route('admin.qualification.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editqualification $editqualification)
    {
        $editqualification->delete();

        return redirect()->route('admin.qualification.index');
    }
}
