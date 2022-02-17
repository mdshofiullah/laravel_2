@extends('master')

@section('title')
    BITM
@endsection

@section('body')
    <h1>{{ $a }}</h1>
    <h1>{{ $shofi }}</h1>
    <h3>{{ $anything[3] }}</h3>
    <h1>{{ $email }}->that is from globally defiend in providers-appserviceporvider.php</h1>

    @foreach($anything as $key => $value)

        @if($key >= 3 && $key <= 5)
        <h4>Index No : {{ $key }} and value : {{ $value }}</h4>
        @else
        <h4>Out of Range...</h4>
        @endif

    @endforeach

    @foreach($twoDArray as $key => $value)
{{--        <span>{{ $value['name'] }}</span> </br>--}}
        @foreach($value as $key => $item)
            <span>{{$key}} = {{ $item }}</span><br/>
        @endforeach
        <br/>
    @endforeach


@endsection
