    @extends('layouts.app')
    @section('content')
    <h1>Laravel Features</h1>
        <table style="border-bottom: 1px solid #ddd">
            <tr>
                <th>ID</th>
                <th>Feature</th>
                <th>Description</th>
            </tr>
            @foreach ($features as $feature)
                <tr>
                    <td>{{$feature->id}}</td>
                    <td>{{$feature->name}}</td>
                    <td>{{$feature->description}}</td>
                </tr>
            @endforeach
        </table>
    @endsection