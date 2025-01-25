@if ($message = Session::get('success'))
    <div style="padding: 5%; background-color:green; color:white" class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div style="padding: 5%; background-color:red; color:white" class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
