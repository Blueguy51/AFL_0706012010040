@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div>

    <table class="table table-dark table-striped table-bordered border-light text-center">
        <tr>
            <th colspan="5">List of Original Unique Units</th>
        </tr>
        @foreach ($listofuniqueunit as $unitdata)
        @if ($loop->iteration % 5 == 1)
        <tr>
            @endif
            <td>
                <img src="{{$unitdata ['uniticon']}}" width="104px" height="104px"> <br> <a href='{{ route('listofuniqueunit.show', $unitdata ['unitcode']) }}'>{{ $unitdata ['unitname'] }}</a>
            </td>
            @if ($loop->iteration % 5 == 0)
        </tr>
        @endif
        @endforeach
    </table>
    <br>
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofuniqueunit.create') }}">CREATE NEW UNITS</a>
    <br>
    <table class="table table-dark table-striped table-bordered border-light text-center">
        <tr>
            <th colspan="5">List of Customized Unique Units</th>
        </tr>
        @foreach ($uniqueunitdata as $unitdata)
        @if ($loop->iteration % 5 == 1)
        <tr>
            @endif
            <td>
                <img src="{{$unitdata ['uniticon']}}" width="104px" height="104px"> <br> <a href='{{ route('listofuniqueunit.show', $unitdata ['unitcode']) }}'>{{ $unitdata ['unitname'] }}</a>
            </td>
            @if ($loop->iteration % 5 == 0)
        </tr>
        @endif
        @endforeach
    </table>
</div>
<br>
<br>
<br>
@endsection