<?php

namespace App\Http\Controllers;

use App\Organization;
use App\User;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table=Organization::all();
        return view('organizations.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::pluck('name', 'id');
        return view('organizations.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //belum siap 
        $request->validate([
            'organization_name' => 'required',
        ]);
        
        //
        //Organization::create($request->all());
        Organization::create([
            'organization_name'=> $request->organization_name,
            'organiztion_email'=> $request->organiztion_email,
            'organization_password'=> $request->organization_password,
            'admin_id' => auth()->user()->id
    	]);

        return redirect()->route('organizations.index')
                        ->with('success','Organization created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
        return view('organizations.show',compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
        $users = User::pluck('name', 'id');
        return view('organizations.edit',compact('organization','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
        $request->validate([
            'organization_name' => 'required',
        ]);
  
        $organization->update($request->all());
  
        return redirect()->route('organizations.index')
                        ->with('success','Organization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
