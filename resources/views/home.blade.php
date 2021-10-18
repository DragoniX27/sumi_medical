@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <tabla-info url="{{ url('/get-caso-1') }}" ref='tabla_info'></tabla-info>
            <tabla-info url="{{ url('/get-caso-2') }}" ref='tabla_info'></tabla-info>
            <tabla-info url="{{ url('/get-caso-3') }}" ref='tabla_info'></tabla-info>
        </div>
    </div>
</div>
@endsection
