@if (session()->has('success'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('error') }}
    </div>
@endif
