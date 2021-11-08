@extends('template.mainlayout')
@section('title', $title)
@section('main')

<div>
    <table class="table table-dark table-striped table-bordered border-light">
        <tr> {{-- Title --}}
            <td class="text-center align-middle" colspan="2" >
                <h1>
                    Civilization Details
                </h1>
            </td>
        </tr>
        <tr> {{-- Sub --}}
            <td>
                <h2>Description</h2>
               <p> {{ $civdata ['civdescription']}} ~In Game Description </p>
               <br>
               <h2>Overview</h2>
               <p> {{ $civdata ['civoverview']}} </p>  
            </td>
            <td class="text-center text-middle" colspan="1">
                <h1>
                    {{ $civdata ['civname']}}
                    <br>
                    <img src="{{ $civdata ['banner']}}" width="104px" height="104px">
                </h1>
                <table class="table table-dark table-striped table-bordered border-light text text-center align-middle">
                    <tr><td colspan="2"><h3>
                        Civilization Data
                    </h3></td></tr>
                    <tr><td>Introduced in</td><td>{{ $civdata ->uniqueunits[0] ->introduced}}</td></tr>
                    <tr><td>Type</td><td>{{ $civdata ['civtype']}} Civilization</td></tr>
                    <tr><td>Unique Units</td><td>
                        @foreach($civdata ->uniqueunits as $unitdata)
                            <a href='{{ Route ('listofuniqueunit.show', $unitdata ['unitcode'])}}'>{{ $unitdata ['unitname']}}</a>
                        <br>
                        @endforeach
                    </td></tr>
                    <tr><td>Unique Technolgy</td><td>{{ $civdata ['uniquetechone']}} <br> {{ $civdata ['uniquetechtwo']}}</td></tr>
                    <tr><td>Civilization Bonus</td><td>{{ $civdata ['civsbonus']}}</td></tr>
                    <tr><td>Team Bonus</td><td>{{ $civdata ['teambonus']}}</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2"><h2>Information</h2>
                <p>
                    {{ $civdata ['civinformation1']}}    
                </p>
                <p>
                    {{ $civdata ['civinformation2']}}
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2"><h2>Strategy</h2>
                {{ $civdata ['strategies']}}  
            </td>
        </tr>
    </table>
{{-- @if (!$civdata ['isOriginal']) --}}

<form action="{{ route('listofcivilization.destroy', $civdata ['civcode']) }}" method="POST">
<a href='{{ route('listofcivilization.edit', $civdata ['civcode']) }}' class='btn btn-dark'>Edit</a>
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