<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignDetail;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table=Campaign::all();
        return view('campaigns.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        ]);
        
        //Campaign::create($request->all());
        $requestData=$request ->all();
        $fileName=time().$request->file('campaign_pic')->getClientOriginalName();
        $path = $request->file('campaign_pic')->storeAs('images',$fileName,'public');
        $requestData["campaign_pic"]='/storage/'.$path;
        Campaign::create($requestData);

        return redirect()->route('campaigns.index')
        ->with('success','Campaign created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
        return view('campaigns.show',compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
        return view('campaigns.edit',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
        //$request->validate([
           // 'organization_name' => 'required',
        //]);
  
        $campaign->update($request->all());
  
        return redirect()->route('campaigns.index')
                        ->with('success','Campaign updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
        $campaign->delete();
        return redirect()->route('campaigns.index')
                        ->with('success','Campaign deleted successfully');
    }
}
