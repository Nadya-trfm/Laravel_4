@extends('layout')
@section('content')
<a  href={{route('pages.create')}}>+</a>

@foreach($pages as $page)
    <a  href="{{route('pages.show',  $page->id)}}">{{$page->id}}</a>
@endforeach
@endsection
