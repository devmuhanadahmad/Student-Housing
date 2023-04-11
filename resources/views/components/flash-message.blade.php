

@if (session()->has('error'))
<div class="alert alert-danger mmb-2" role="alert">
    {{ session('error') }}

</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success mmb-2" role="alert">
    {{ session('success') }}

</div>
@endif


