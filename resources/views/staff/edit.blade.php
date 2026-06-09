@include('layout/admin_header')

<h3>Staff Info (Edit) <a href="/staff" class="btn btn-sm btn-dark">Back</a></h3>
<form action="/staff/{{ $d->s_id }}" method="post">
    <input type="hidden" name="_method" value="put">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="{{ $d->s_name }}">
    </div>

    <div class="mb-3">
    <label for="number">Staff No.</label>
        <input type="text" class="form-control" name="number" value="{{ $d->s_number }}">
    </div>

    <div class="mb-3">
    <label for="phone">Phone No</label>
        <input type="number" class="form-control" name="phone" value="{{ $d->s_phone }}">
    </div>

    <div class="mb-3">
    <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" value="{{ $d->s_email }}">
    </div>

    <div class="mb-3">
    <label for="address">Address</label>
        <textarea name="address" class="form-control">{{ $d->s_address }}</textarea>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>

@include('layout/footer')