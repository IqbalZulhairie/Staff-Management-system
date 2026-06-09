@include('layout/admin_header')

<h3>Staff Info (Form) <a href="/staff" class="btn btn-sm btn-dark">Back</a></h3>
<div class="mb-3">
    @if(session('error_msg'))
    <div class="alert alert-danger">
        {!! session('error_msg') !!}
    </div>
    @endif
</div>
<form action="/staff" method="post">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="mb-3">
    <label for="number">Staff No.</label>
        <input type="text" class="form-control" name="number">
    </div>

    <div class="mb-3">
    <label for="phone">Phone No</label>
        <input type="number" class="form-control" name="phone">
    </div>

    <div class="mb-3">
    <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
    <label for="address">Address</label>
        <textarea name="address" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>

@include('layout/footer')