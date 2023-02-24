@extends('layouts.layout')



@section('body')
    
    <table class="table">
        <thead>
          <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Useremailid</th>
            <th>Userphonenumber</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
          <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['username']}}</td>
            <td>{{$item['useremailid']}}</td>
            <td>{{$item['userphonenumber']}}</td>
            <td><a href="{{route('editform',$item['id'])}}" type="button" value="Edit" class="btn btn-info">Edit</a></td>
            {{-- <td><form class="btn btn-danger" action="{{route('deleteform',$item['id'])}}"  method="post">Delete</form></td> --}}
            <td><a href="{{route('deleteform',$item['id'])}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    






@endsection