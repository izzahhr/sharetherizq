@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Organization</h2>
            </div>
        </div>
    </div>
   
    <form action="{{ route('organizations.update',$organization->organization_id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Organization Name:</strong>
                    <input type="text" class="form-control" name="organization_name" value="{{ $organization->organization_name }}" placeholder="Organization Name"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="organiztion_email" value="{{ $organization->organiztion_email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('organizations.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection