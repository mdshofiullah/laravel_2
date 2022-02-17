@extends('master')

@section('title')
    About
@endsection

@section('body')
{{--    <h1>this is from About page</h1>--}}
{{--    <h3>{{ $email }}->that is from globally defiend in providers-appserviceporvider.php</h3>--}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" alt="" class="card-img-top h-300" />
                    </div>

                    <div class="card-body">
                        <h3 class="card-title">{{ $product['name'] }}</h3>
                        <p>Tk. {{ $product['price'] }}</p>
                        <hr/>
                        <a href="{{ route('detail',['idanything' => $product['id']]) }}" class="btn btn-outline-success center">Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
