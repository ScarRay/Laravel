@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
        </div>
@endsection
