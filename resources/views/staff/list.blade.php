@include('layout/admin_header')

<h3>Staff Info    <a href="staff/create" class="btn btn-sm btn-dark">New Staff</a></h3>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Staff No</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->s_name }}</td>
            <td>{{ $d->s_number }}</td>
            <td>{{ $d->s_phone }}</td>
            <td>{{ $d->s_email }}</td>
            <td>{{ $d->s_address }}</td>
            <td>
                <a href="/staff/{{ $d->s_id }}/edit">Edit</a>
                <a class="link-danger" href="javascript:void(0)" onclick="del('staff/{{ $d->s_id }}','{{ csrf_token() }}','staff')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('layout/footer')