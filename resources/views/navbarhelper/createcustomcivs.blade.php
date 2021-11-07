@extends('template.mainlayout')
@section('title', $title)
@section('main')

<form action="{{ route ('listofcivilization.store') }}" METHOD="POST" enctype="multipart/form-data">
  @csrf
  <table class="table table-dark table-striped table-bordered border-light ">
    <tr>
      <td class="text text-center" colspan="3">
        <h1>CREATE YOUR OWN CIVILIZATION :)</h1>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civname">Civilization Name</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="civname" placeholder="Aztec etc.">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civcode">Civilization Code</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="civcode">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="banner">Civilization Banner</label>
      </td>
      <td colspan="3">
        <input class="form-control" type="file" name="banner" accept="image/*">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civtype">Civilization Type</label>
      </td>
      <td>
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="civtype1">
          <option selected>Civilization Type 1</option>
          <option value="Infantry">Infantry</option>
          <option value="Archer">Archer</option>
          <option value="Cavalry">Cavalry</option>
          <option value="Camel">Camel</option>
          <option value="Cavalry Archer">Cavalry Archer</option>
          <option value="Defensive">Defensive</option>
          <option value="Elephant">Elephant</option>
          <option value="Gunpowder">Gunpowder</option>
          <option value="Monk">Monk</option>
          <option value="Naval">Naval</option>
          <option value="Siege">Siege</option>
        </select>
      </td>
      <td>
        <select class="form-select form-select-lg mb-1" aria-label=".form-select- example" name="civtype2">
          <option selected>Civilization Type 2</option>
          <option value="Infantry">Infantry</option>
          <option value="Archer">Archer</option>
          <option value="Cavalry">Cavalry</option>
          <option value="Camel">Camel</option>
          <option value="Cavalry Archer">Cavalry Archer</option>
          <option value="Defensive">Defensive</option>
          <option value="Elephant">Elephant</option>
          <option value="Gunpowder">Gunpowder</option>
          <option value="Monk">Monk</option>
          <option value="Naval">Naval</option>
          <option value="Siege">Siege</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="uniquetechone">Unique Technology 1</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="uniquetechone">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="uniquetechtwo">Unique Technology 2</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="uniquetechtwo">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civsbonus">Civilization Bonus</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="civsbonus">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="teambonus">Team Bonus</label>
      </td>
      <td colspan="3">
        <input type="string" class="form-control" name="teambonus">
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civdescription">Civilization Description</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="civdescription" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civinformation1">Civilization Information (Short)</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="civinformation1" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civinformation2">Civilization Information (Detailed)</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="civinformation2" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="civoverview">Civilization Overview</label>
      </td>
      <td colspan="3">
        <textarea type="text" class="form-control" name="civoverview" rows="5" cols="35"></textarea>
      </td>
    </tr>
    <tr>
      <td class="text text-center align-middle fs-4">
        <label for="strategies">Strategies</label>
      </td>
      <td colspan="3">
        <textarea type="string" class="form-control" name="strategies" rows="5" cols="35"></textarea>
      </td>
    </tr>
  </table>
  <button type="text" class="btn btn-dark btn-lg">Create</button>
</form>
<br>
<br>
<br>

@endsection