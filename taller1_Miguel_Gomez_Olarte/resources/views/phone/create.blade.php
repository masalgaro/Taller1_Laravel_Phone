@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create new phone listing.
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <ul id="errors" class="alert alert-danger list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li> - {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('phone.save') }}">
                        @csrf
                        <input type="text" class="form-control mb-2" placeholder="Phone name" name="name" value="{{ old('name') }}"/>
                        <input type="text" class="form-control mb-2" placeholder="Phone brand" name="brand" value="{{ old('brand') }}">
                        <input type="number" min="1" class="form-control mb-2" placeholder="Quantity" name="quantity" value="{{ old('quantity') }}">
                        <input type="text" class="form-control mb-2" placeholder="Battery specs." name="battery" value="{{ old('battery') }}">
                        <input type="text" class="form-control mb-2" placeholder="RAM" name="ram" value="{{ old('ram') }}">
                        <input type="text" class="form-control mb-2" placeholder="Memory" name="memory" value="{{ old('memory') }}">
                        <input type="text" class="form-control mb-2" placeholder="Put an URL to a photo here" name="picurl" value="{{ old('picurl') }}">
                        <input type="submit" class="btn btn-primary" value="Create listing">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

