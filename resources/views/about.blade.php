@extends('layouts.main')

@section('container')
  <h1>Hello world. This is my profile</h1>
  <p>My name is {{ $name }}</p>
  <p>You can contact me through {{ $email }}</p>
@endsection