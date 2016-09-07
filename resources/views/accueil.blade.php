@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Accueil
                </div>

                <div class="links">
                    <a href="{{ url('/cars') }}">Cars</a>
                </div>
            </div>
        </div>
@endsection
