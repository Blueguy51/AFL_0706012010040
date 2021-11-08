@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div style="justify-content: center, display:flex">
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofcivilization.create') }}">CREATE CUSTOM CIVILIZATION</a>
    <br>
    <h1 class="text text-center align-middle"> OR </h1>
    <br>
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofuniqueunit.create') }}">CREATE NEW UNITS</a>
</div>
    
@endsection