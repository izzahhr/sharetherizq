@extends ('layouts.template')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Organizations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('organizations.create') }}"> Add New Organizations</a>
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
            <th>Organization ID</th>
            <th>Organization Name</th>
            <th>Email</th>
            <th>Admin ID</th>
            <th>Joined On</th>
            <th>Updated On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($table as $t)
        <tr>
            <td>{{ $t->organization_id }}</td>
            <td>{{ $t->organization_name }}</td>
            <td>{{ $t->organiztion_email }}</td>
            <td>{{ $t->admin_id }}</td>
            <td>{{ $t->created_at }}</td>
            <td>{{ $t->updated_at }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('organizations.show',$t->organization_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('organizations.edit',$t->organization_id) }}">Edit</a>
   
            </td>
        </tr>
        @endforeach
    </table>
@endsection