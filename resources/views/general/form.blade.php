@extends('layout.app')

@section('title', 'registrasi')

@section('content')
<form action="{{ url('proses') }}" method="post">
    {{ @csrf_field() }}

    <h1>Buat Account Baru !</h1>
    <h3>Sign Up Form</h3>

    <p>First Name :</p>
    <p><input type="text" name="first_name" id="first_name" required></p>
    <p>Last Name :</p>
    <p><input type="text" name="last_name" id="last_name" required></p>
    <p>Gender :</p>
    <label><input type="radio" name="gender" id="Male"> Male</label><br>
    <label><input type="radio" name="gender" id="Female"> Female</label><br>
    <label><input type="radio" name="gender" id="Other"> Other</label>
    <p>Nationality :</p>
    <p><select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="WNA">Warga Negara Asing</option>
            <option value="NonWNA">Tak Memiliki Kewarganegaraan</option>

        </select></p>
    <p>Language Spoken :</p>
    <label><input type="checkbox" name="language_spoken1" id="language_spoken1"> Bahasa Indonesia</label><br>
    <label><input type="checkbox" name="language_spoken2" id="language_spoken2"> English</label><br>
    <label><input type="checkbox" name="language_spoken3" id="language_spoken3"> Other</label>
    <p>Bio :</p>
    <p><textarea name="bio" id="bio" cols="30" rows="10"></textarea></p>
    <p>Foto :</p>
    <p><input type="file" name="foto" id="foto"></p>
    <p><input type="submit" value="Sign Up"></p>
</form>
@endsection