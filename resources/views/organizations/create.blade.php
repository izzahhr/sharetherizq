@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Organizations</h2>
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
   
<form action="{{ route('organizations.store') }}" method="POST">
    @csrf
  
    
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Organization Name:</strong>
                <input type="text" name="organization_name" class="form-control" placeholder="Organization Name">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Organization Email:</strong>
                <input type="email" name="organiztion_email" class="form-control" placeholder=" Email">
            </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="organization_password" class="form-control" placeholder="Password">
            </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Admin:</strong>
            <select class="form-control" name="admin_id">
                <option value="">-- Choose Admin --</option>
                @foreach ($users as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($organizations['admin_id']) && $organizations['admin_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
    </div>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('organizations.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection