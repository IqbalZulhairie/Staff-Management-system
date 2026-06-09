@include('layout/admin_header')

@php
$arr_type = ['1'=>'Admin', '2'=>'Clerk'];
$arr_status = ['Not Active', 'Active'];
@endphp
<h3>List of Users</h3>
<div class="mb-3">
    @if(session('success_msg'))
     <div class="alert alert-success">
       {!! session('success_msg') !!}
     </div>
     @endif
</div>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Type</th>
            <th>Status</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->u_name }}</td>
            <td>{{ $d->u_username }}</td>
            <td>{{ $arr_type[$d->u_type] }}</td>
            <td>{{ $arr_status[$d->u_status] }}</td>
            <td>
                <a href="/user/{{ $d->u_id }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('layout/footer')