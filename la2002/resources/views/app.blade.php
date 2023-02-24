@extends('layouts.index')
@section('content')
    


<div>

{{-- @foreach ($user as $item) --}}
    
<li>{{$users['username']}}---->{{$users['useremailid']}}---->{{$users['phonenumber']}}</li>

{{-- @endforeach --}}

</div>





@endsection