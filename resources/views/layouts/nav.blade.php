@php
$currentRouteName = Route::currentRouteName();
@endphp
    <nav class="navbar navbar-expand-lg bg-beige" style="background-color:beige;">
    <div class="container" >
<a href="{{route('home') }}"class="navbar-brand mb-0h1">
    <img src= "resources/img/coffe.png" alt="Logo" style="width: 0px">
     {{-- <i class="bi-hexagon-fill me-2"></i>  --}}
     XYH Coffe</a>

    <button type="button"class="navbar-toggler" data-bs
    toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <hr class="d-md-none text-white-50">
    <ul class="navbar-nav flex-row flex-wrap">
        <li class="nav-item col-2c ol-md-auto"><a href="{{route('home') }}"
            class="nav-link @if($currentRouteName =='home')active @endif">Home</a></li>
    <li class="nav-item col-2 col-md-auto">
        <a href="{{route('product.index') }}"class="nav-link
    @if($currentRouteName == 'product.index') active @endif">Product</a></li>
</ul>
{{-- <hr class="d-md-none text-white-50">
<a href="{{ route('profile') }}"class="btn btn-outline-light
my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> MyProfile</a> --}}
</div>
</div>
</nav>