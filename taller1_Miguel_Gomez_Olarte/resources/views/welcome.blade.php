@extends('layouts.app')
@section('title', 'Home Page - Online Cellphone Store')
@section('content')
<div class="text-center">
    Online storefront for cellphones!
</div>

<!--activity buttons-->
<div class="card">
    <div class="card-body text-center">
        <a class="btn bg-primary text-white" href="{{ route('phone.create') }}">Create New Phone Listing</a>
    </div>
    <div class="card-body text-center">
        <a class="btn bg-primary text-white" href="{{ route('phone.index') }}">Show Phone Listings</a>
    </div>
</div>
<!--activity buttons end-->
@endsection

