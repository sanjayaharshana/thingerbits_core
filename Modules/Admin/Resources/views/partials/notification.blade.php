@if (session()->has('success'))
    <div class="alert alert-success fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('error') }}
    </div>
@endif
