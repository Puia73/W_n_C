<?php

namespace App\Http\Controllers;

use App\Models\Addjob;
use App\Models\UserHome;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'UserHome/index',
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
            'UserHome/show',
            [
                'addjob' => $addjob
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserHome $userHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserHome $userHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserHome $userHome)
    {
        //
    }
}
