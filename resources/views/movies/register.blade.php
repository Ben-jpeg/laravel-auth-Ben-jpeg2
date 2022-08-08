@extends('master')


<form action="{{ $action }}" method="POST">
    @csrf
    <p>Se créer un compte</p>
                <input type="text"  name="pseudo">
                <input type="text"  name="password">

</form>