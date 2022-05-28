@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Campaigns</h2>
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('campaigns.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Upload File:</strong>
                <input type="file" name="campaign_pic" class="form-control" placeholder="picture">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Campaign Title:</strong>
                <input type="text" name="campaign_title" class="form-control" placeholder=" Title">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="campaign_desc" class="form-control" placeholder="Description">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Target Goal:</strong>
                <input type="number" name="campaign_goal" class="form-control" placeholder="Target Goal">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Start Date:</strong>
                <input type="date" name="date_start" class="form-control" placeholder="Start Date">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>End Date:</strong>
                <input type="date" name="date_end" class="form-control" placeholder="End Date">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="campaign_status" class="form-control" placeholder="Status">
            </div>
    </div>

    
        <br>        
        <br>
    </div>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('campaigns.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection