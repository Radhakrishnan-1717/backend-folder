@extends('layouts.index')



@section('content')
    <form action="{{ route('adddata') }}" method="POST">
        <div class="mb-3 form-outline text-center">
            @csrf
            <label for="exampleInputEmail1" class="">User-Name</label>
            <input type="text" class="form-control" name="username" aria-describedby="">
            @error('username')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="">User-EmailID</label>
                <input type="text" class="form-control" name="usermailid">
                @error('usermailid')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="">User-PhoneNumber</label>
                <input type="text" class="form-control" name="userphonenumber">
                @error('userphonenumber')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
@endsection
