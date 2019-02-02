@extends('layouts.myapp')

@section("content")
    <table>
        <tr>
            <th>Name</th>
            <th>mail</th>
            <th>status</th>
        </tr>
           @foreach($users as $user)
               <tr>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>
                       @if($user->Isonline())
                           Online
                       @else
                          Offline
                           @endif
                   </td>
               </tr>
           @endforeach
    </table>

@endsection