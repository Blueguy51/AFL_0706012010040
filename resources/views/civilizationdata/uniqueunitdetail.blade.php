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
                <p> "{{ $unitdata ['unitdes']}}" ~In Game Description </p>
            </td>
            <td class="text-center text-middle" colspan="1" rowspan="2">
                <h1>
                    {{ $unitdata ['unitname']}}
                </h1>
                <br>
                <img src="{{ $unitdata ['uniticon']}}" width="165px" height="165px">
                <br>
                <br>
                <table class="table table-dark table-striped table-bordered border-light text text-center align-middle">
                    <tr>
                        <td colspan="2">
                            <h3>Unit Information</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Introduced in</td>
                        <td>{{ $unitdata ['introduced']}}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{ $unitdata ['type']}} Unit</td>
                    </tr>
                    <tr>
                        <td>Civilization</td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{ $unitdata ['age']}} Unit</td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="2"><h3>Training</h3></td>
                    </tr>
                    <tr>
                        <td>Trained at</td>
                        <td>{{ $unitdata ['trainedat']}}</td>
                    </tr>
                    <tr>
                        <td>Training cost</td>
                        <td>{{ $unitdata ['traincost']}}</td>
                    </tr>
                    <tr>
                        <td>Training time</td>
                        <td>{{ $unitdata ['traintime']}}</td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="2"><h3>Unit Statistic</h3></td>
                    </tr>
                    <tr>
                        <td>Hitpoints</td>
                        <td>{{ $unitdata ['hitpoint']}}</td>
                    </tr>
                    <tr>
                        <td>Attack</td>
                        <td>{{ $unitdata ['attack']}}</td>
                    </tr>
                    <tr>
                        <td>Attack bonus</td>
                        <td>{{ $unitdata ['attackbonus']}}</td>
                    </tr>
                    <tr>
                        <td>Rate of fire</td>
                        <td>{{ $unitdata ['rateoffire']}}</td>
                    </tr>
                    <tr>
                        <td>Melee armor</td>
                        <td>{{ $unitdata ['armormelee']}}</td>
                    </tr>
                    <tr>
                        <td>Piercing armor</td>
                        <td>{{ $unitdata ['armorpierce']}}</td>
                    </tr>
                    <tr>
                        <td>Armor class</td>
                        <td>{{ $unitdata ['armorclass']}}</td>
                    </tr>
                    <tr>
                        <td>Movement speed</td>
                        <td>{{ $unitdata ['movement']}}</td>
                    </tr>
                    <tr>
                        <td>Line of sight</td>
                        <td>{{ $unitdata ['lineofsight']}}</td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td colspan="0" rowspan="1">
                <h2>Strategy </h2>
                <p>{{ $unitdata ['unitstrategy']}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Unit Further Statistic </h2>
                <h4><b>Strong against : </b></h4><p>{{ $unitdata ['strong']}}</p>
                <h4><b>Weak against : </b></h4><p>{{ $unitdata ['weak']}}</p>
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