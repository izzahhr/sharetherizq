@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Campaign Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campaign Picture:</strong>
                {{ $campaign->campaign_pic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{  $campaign->campaign_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Target Goal (RM):</strong>
                {{$campaign->campaign_goal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $campaign->date_start }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $campaign->date_end }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campaign Status:</strong>
                {{ $campaign->campaign_status }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('campaigns.index') }}"> Back</a>
        </div>
    </div>
@endsection