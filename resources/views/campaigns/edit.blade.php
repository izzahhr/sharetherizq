@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Organization</h2>
            </div>
        </div>
    </div>
   
    <form action="{{ route('campaigns.update',$campaign->campaign_id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Upload File:</strong>
                    <input type="file" class="form-control" name="campaign_pic" value="{{$campaign->campaign_pic }}"  placeholder="{{$campaign->campaign_pic }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Campaign Title:</strong>
                    <input type="text" name="campaign_title" value="{{$campaign->campaign_title }}" class="form-control" placeholder="Campaign Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="campaign_desc" value="{{$campaign->campaign_desc}}" class="form-control" placeholder="Description">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Target Goal (RM):</strong>
                    <input type="number" name="campaign_goal" value="{{$campaign->campaign_goal}}" class="form-control" placeholder="Target Goal">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start Date:</strong>
                    <input type="date" name="date_start" value="{{$campaign->date_start}}" class="form-control" placeholder="start Date">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>End Date:</strong>
                    <input type="date" name="date_end" value="{{$campaign->date_end}}" class="form-control" placeholder="End Date">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="campaign_status" value="{{$campaign->campaign_status}}" class="form-control" placeholder="Status">
                </div>
            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('campaigns.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection