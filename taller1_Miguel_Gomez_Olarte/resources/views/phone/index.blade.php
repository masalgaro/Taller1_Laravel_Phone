@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
    @foreach ($viewData['phone'] as $phone)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <img src="{{ $phone['picurl'] }}" class="card-img-top img-card">
                <div class="card">
                    <a href="{{ route('phone.show', ['id'=>$phone['id']]) }}" class="btn bg-primary text-white">{{ $phone['name'] }}</a>
                    <p class="card-body text-center">Quantity: {{ $phone['quantity'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
