@extends('layouts.layout')

@section('body')
{{-- @if ($message=session::get(''))
    <div>{{message}}</div>
@endif --}}
    <form action="{{route('adddata')}}" method="POST">
        <div class="mb-3  form-outline text-center">
            @csrf
            <label for="exampleInputEmail1" class="">User-Name</label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}"  aria-describedby="">
            @error('username')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="">User-EmailID</label>
                <input type="text" class="form-control" name="useremailid" value="{{old('useremailid')}}"> 
                @error('useremailid')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="">User-PhoneNumber</label>
                <input type="text" class="form-control" name="userphonenumber" value="{{old('userphonenumber')}}">
                @error('userphonenumber')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
@endsection
