@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $viewData['phone']->getPicURL() }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['phone']->getName() }}
                </h5>
                <p class="card-text">Brand: <strong>{{ $viewData['phone']->getBrand() }}</strong></p>
                <p class="card-text">Quantity: <strong>{{ $viewData['phone']->getQuantity() }}</strong></p>
                <p class="card-text">Battery Specs: <strong>{{ $viewData['phone']->getBattery() }}</strong></p>
                <p class="card-text">RAM: <strong>{{ $viewData['phone']->getRAM() }}</strong></p>
                <p class="card-text">Internal Memory: <strong>{{ $viewData['phone']->getMemory() }}</strong></p>
            </div>
        </div>
    </div>
    <form action="{{ route('phone.delete', $viewData['phone']->getId()) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
            <i class="bi-trash"></i>
        </button>
    </form>
</div>
@endsection
