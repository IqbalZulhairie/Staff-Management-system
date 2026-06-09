@include('layout/admin_header')

<h3>User (Edit)</h3>

<form action="/user/{{ $d->u_id }}" method="post">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="{{ $d->u_name }}">
    </div>

    <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="{{ $d->u_username }}">
    </div>

    <div class="mb-3">
        <label for="type">Type</label>
        <select name="type" class="form-control">
            {!! $opt_type !!}
        </select>
    </div>

    <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            {!! $opt_status !!}
        </select>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>
@include('layout/footer')