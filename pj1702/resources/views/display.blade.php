@extends('layouts.layouts')

@section('content')
<div class="">
<table class="table">
    <thead>
        <th>name</th>
        <th>age</th>
        <th>place</th>
        <th>number</th>
    </thead>
<tbody>
    @foreach ($users as $item)
        <tr>
            <td>{{$item['name']}}</td>
            <td>{{$item['age']}}</td>
            <td>{{$item['place']}}</td>
            <td>{{$item['number']}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection