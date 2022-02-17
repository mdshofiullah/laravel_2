@extends('master')

@section('title')
    Product Details
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ $dataanything['image'] }}" alt="" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{ $dataanything['name'] }}</h1>
                        <h3>Tk. {{ $dataanything['price'] }}</h3>
                        <p>{{ $dataanything['description'] }}</p>
                        <hr/>
                        <button type="button" class="btn btn-outline-success">Add to Cart</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
