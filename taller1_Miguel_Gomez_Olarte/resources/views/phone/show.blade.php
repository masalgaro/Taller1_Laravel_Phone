@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $viewData['phone']['picurl'] }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['phone']['name'] }}
                </h5>
                <p class="card-text">Brand: <strong>{{ $viewData['phone']['brand'] }}</strong></p>
                <p class="card-text">Quantity: <strong>{{ $viewData['phone']['quantity'] }}</strong></p>
                <p class="card-text">Battery Specs: <strong>{{ $viewData['phone']['battery'] }}</strong></p>
                <p class="card-text">RAM: <strong>{{ $viewData['phone']['ram'] }}</strong></p>
                <p class="card-text">Internal Memory: <strong>{{ $viewData['phone']['memory'] }}</strong></p>
            </div>
        </div>
    </div>
    <form action="{{ route('phone.delete', $viewData['phone']['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
            <i class="bi-trash"></i>
        </button>
    </form>
</div>
@endsection
