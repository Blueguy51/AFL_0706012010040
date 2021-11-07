@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div>

    <table class="table table-dark table-striped table-bordered border-light text-center">
        <tr>
            <th colspan="5">List of Original Civilization</th>
        </tr>
        @foreach ($civilizationdata as $civsdat)
        @if ($loop->iteration % 5 == 1)
        <tr>
            @endif
            <td>
                <img src="{{$civsdat ['banner']}}" width="104px" height="104px"> <br> <a href='{{ route('listofcivilization.show', $civsdat ['civcode']) }}'>{{ $civsdat ['civname'] }}</a>
            </td>
            @if ($loop->iteration % 5 == 0)
        </tr>
        @endif
        @endforeach
    </table>
    <br>
    <a class="btn btn-dark btn-lg d-block" href="{{ route ('listofcivilization.create') }}">CREATE NEW CIVILIZATION</a>
    <br>
    <table class="table table-dark table-striped table-bordered border-light text-center">
        <tr>
            <th colspan="5">List of Customized Civilization</th>
        </tr>
        @foreach ($customdata as $civsdat)
        @if ($loop->iteration % 5 == 1)
        <tr>
            @endif
            <td>
                <img src="{{$civsdat ['banner']}}" width="104px" height="104px"> <br> <a href='{{ route('listofcivilization.show', $civsdat ['civcode']) }}'>{{ $civsdat ['civname'] }}</a>
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