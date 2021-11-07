@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div>
    <table class="table table-dark table-striped table-bordered border-light">
        <tr> {{-- Title --}}
            <td class="text-center align-middle" colspan="2">
                <h1>
                    Unique Unit Details
                </h1>
            </td>
        </tr>
        <tr> {{-- Sub --}}
            <td>
                <h2>Description</h2>
                <p> {{ $unitdata ['unitdes']}} ~In Game Description </p>
            </td>
            <td class="text-center text-middle" colspan="1">
                <h1>
                    {{ $unitdata ['unitname']}}
                    <br>
                    <img src="{{ $unitdata ['uniticon']}}" width="104px" height="104px">
                </h1>
                <table class="table table-dark table-striped table-bordered border-light text text-center align-middle">
                    <tr>
                        <td colspan="2">
                            <h3> {{ $unitdata ['unitname']}} </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Introduced in</td>
                        <td>{{ $unitdata ['introduced']}}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{ $unitdata ['type']}} Civilization</td>
                    </tr>
                    <tr>
                        <td>Unique Technolgy</td>
                        <td>{{ $unitdata ['uniquetechone']}} <br> {{ $unitdata ['uniquetechtwo']}}</td>
                    </tr>
                    <tr>
                        <td>Civilization Bonus</td>
                        <td>{{ $unitdata ['civsbonus']}}</td>
                    </tr>
                    <tr>
                        <td>Civilization Bonus</td>
                        <td>{{ $unitdata ['teambonus']}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Strategy </h2>
                {{ $unitdata ['strategies']}}
            </td>
        </tr>
    </table>
    {{-- @if (!$unitdata ['isOriginal']) --}}

    <form action="{{ route('listofuniqueunit.destroy', $unitdata ['unitcode']) }}" method="POST">
        <a href='{{ route('listofuniqueunit.edit', $unitdata ['unitcode']) }}' class='btn btn-dark'>Edit</a>
        @csrf
        @method('DELETE')
        <button type='submit' class='btn btn-dark'>Delete</button>
    </form>
    {{-- @endif --}}
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection