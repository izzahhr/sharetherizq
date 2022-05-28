@extends ('layouts.template')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Campaigns</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('campaigns.create') }}"> Add New Campaigns</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Campaign ID</th>
            <th>Campaign Picture</th>
            <th>Campaign Title</th>
            <th>Description</th>
            <th>Target Goal (RM)</th>
            <th> Start Date</th>
            <th> End Date</th>
            <th>Status</th>
            <th>Joined On</th>
            <th>Updated On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($table as $t)
        <tr>
            <td>{{ $t->campaign_id }}</td>
            <td>{{ $t->campaign_pic }}</td>
            <td>{{ $t->campaign_title }}</td>
            <td>{{ $t->campaign_desc }}</td>
            <td>{{ $t->campaign_goal }}</td>
            <td>{{ $t->date_start }}</td>
            <td>{{ $t->date_end }}</td>
            <td>{{ $t->campaign_status }}</td>
            <td>{{ $t->created_at }}</td>
            <td>{{ $t->updated_at }}</td>
            <td>

            <form action="{{ route('campaigns.destroy',$t->campaign_id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('campaigns.show',$t->campaign_id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('campaigns.edit',$t->campaign_id) }}">Edit</a>

                @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
   
            </td>
        </tr>
        @endforeach
    </table>
@endsection