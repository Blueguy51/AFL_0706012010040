@extends('template.mainlayout')
@section('title', $title)
@section('main')

<form action="{{ route ('listofuniqueunit.store') }}" METHOD="POST" enctype="multipart/form-data">
  @csrf
  <table class="table table-dark table-striped table-bordered border-light ">
    <tr>
      <td class="text text-center" colspan="3">
        <h1>CREATE CUTSOM UNIT</h1>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="unitname">Unique Unit's Name</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="unitname" placeholder="Jaguar Warrior etc.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="unitcode">Unique Unit's Code</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="unitcode">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="introduced">Introduced in</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="introduced">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="uniticon">Unit's Icon</label>
      </td>
      <td colspan="3">
        <input class="form-control" type="file" name="uniticon" accept="image/*">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="type">Unique Unit's Type</label>
      </td>
      <td>
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="type1">
          <option selected>Unique Unit's Primary Type</option>
          <option value="Infantry">Infantry</option>
          <option value="Archer">Archer</option>
          <option value="Cavalry">Cavalry</option>
          <option value="Camel">Camel</option>
          <option value="Cavalry Archer">Cavalry Archer</option>
          <option value="Defensive">Defensive</option>
          <option value="Elephant">Elephant</option>
          <option value="Gunpowder">Gunpowder</option>
          <option value="Monk">Monk</option>
          <option value="Warship">Warship</option>
          <option value="Siege">Siege</option>
        </select>
      </td>
      <td>
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="type2">
          <option selected>Unique Unit's Secondary Type</option>
          <option value="Infantry">Infantry</option>
          <option value="Archer">Archer</option>
          <option value="Cavalry">Cavalry</option>
          <option value="Camel">Camel</option>
          <option value="Cavalry Archer">Cavalry Archer</option>
          <option value="Defensive">Defensive</option>
          <option value="Elephant">Elephant</option>
          <option value="Gunpowder">Gunpowder</option>
          <option value="Monk">Monk</option>
          <option value="Warship">Warship</option>
          <option value="Siege">Siege</option>
        </select>
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civcode">Civilization</label>
      </td>
      <td colspan="3">
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="civcode">
          <option selected>Unique Unit's Civilization</option>
          @foreach($civsdata as $civs)
          <option value="{{ $civs ['civcode'] }}">{{ $civs ['civname'] }}</option>
          @endforeach
        </select>
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="age">Age Required</label>
      </td>
      <td colspan="3">
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="age">
          <option selected>Avaliable at</option>
          <option value="Dark Age">Dark Age</option>
          <option value="Feudal Age">Feudal Age</option>
          <option value="Castle Age">Castle Age</option>
          <option value="Imperial Age">Imperial Age</option>
        </select>
      </td>
    </tr>

    <br>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="hitpoint">Unique Unit's Hitpoint</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="hitpoint" placeholder="Total hitpoint before your unit dies.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="attack">Unique Unit's Damage</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="attack" placeholder="The harm upon your enemy per second.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="attackbonus">Attack Bonus Status</label>
      </td>
      <td colspan="3">
        <input type="text" class="form-control" name="attackbonus" placeholder="+10 against skirmisher, +.... etc." rows="5" cols="35">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="rateoffire">Rate of Fire</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="rateoffire" placeholder="Rate of fire is duration for a unit deal one damage.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="armormelee">Melee Armor</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="armormelee" placeholder="Total amount of armor to absorb melee damage.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="armorpierce">Piercing Armor</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="armorpierce" placeholder="Total amount of armor to absorb piercing damage.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="armorclass">Armor Class</label>
      </td>
      <td colspan="3">
        <input type="text" class="form-control" name="armorclass" placeholder="cavalry unit, cavalry and archer unit etc." rows="5" cols="35">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="lineofsight">Line of Sight</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="lineofsight" placeholder="The sight of unit to see obstacles.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="movement">Movement Speed</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="movement" placeholder="The amount of speed for unit to travel or move.">
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="trainedat">Trained at</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="trainedat" placeholder="Buildings require to train your unit, ex: Castle, Stable etc.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="traincost">Training Cost</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="traincost" placeholder="Resources need to train your unit, ex: 25 wood, 10 gold etc.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="traintime">Training Time</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="traintime" placeholder="The amount of time needed to train your unit in second, ex: 90 seconds etc.">
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="strong">Strong against</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="strong" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="weak">Weak against</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="weak" rows="5" cols="35"></textarea>
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="unitdes">Unit Description</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="unitdes" rows="5" cols="35"></textarea>
      </td>
    </tr>

    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="unitstrategy">Strategy/ies</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="unitstrategy" rows="5" cols="35"></textarea>
      </td>
    </tr>
  
  </table>
  <button type="text" class="btn btn-dark btn-lg">Create</button>
</form>
<br>
<br>
<br>

@endsection