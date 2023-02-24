@extends('layouts.index')

@section('content')

@foreach ($collection as $item)
    <li>{{$item['id']}}---->{{$item['username']}}---->{{$item['usermailid']}}---->{{$item['userphonenumber']}}-----{{$item['created_at']}}
    ---->{{$item['updated_at']}}</li>
@endforeach
    
@endsection