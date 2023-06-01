<?php

namespace App\Http\Controllers;

use App\Models\EditDistrict;
use Illuminate\Http\Request;

class EditDistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'AdminHome/EditDistrict/index',
            [
                'edit_districts' => EditDistrict::all()
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
        EditDistrict::create(
            $request->validate([
                'district' => 'required|unique:edit_districts'
            ])
        );

        return redirect()->route('admin.edit-district.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditDistrict $editDistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditDistrict $editDistrict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EditDistrict $editDistrict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditDistrict $editDistrict)
    {
        //
    }
}
