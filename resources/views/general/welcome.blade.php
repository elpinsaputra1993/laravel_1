@extends('layout.app')
@section('title','welcome')
@section('content')
<h1>Selamat Datang {{$post['first_name']." ".$post['last_name']}} !!!</h1>
<h3>Terima kasih telah bergabung di sanberbook. Social Media kita bersama !!!</h3>
@php(print_r($post))
@endsection