@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div>
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofcivilization.create') }}">CREATE CUSTOM CIVILIZATION</a>
    <br>
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofuniqueunit.create') }}">CREATE NEW UNITS</a>
</div>
    
@endsection