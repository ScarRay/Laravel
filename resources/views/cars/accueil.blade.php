@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Cars
                </div>

                <div class="links">
                    <a href="{{ url('/cars/1') }}">1ère Voiture</a>
                </div>
            </div>
        </div>
@endsection
