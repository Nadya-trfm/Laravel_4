@extends('layout')
@section('content')
<form  action="{{ route('pages.store') }}" method="post">
    @csrf
    <p><b>Text:</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><button type="submit">submit</button></p>
</form>
@endsection
