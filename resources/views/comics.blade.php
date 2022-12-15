@extends('layouts.app')

@section('content')
    <section class=" bg-dark py-5">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($data as $item)
                    <div class="col">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                        <p class="text-light">{{ $item['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
