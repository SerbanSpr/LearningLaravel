@extends('layouts.app')

@section('content')
<h1>Post page {{$id}} {{$name}} {{$ps}}</h1>

@stop

@section('footer')
<script>alert('Hello neighbour!')</script>
@stop
