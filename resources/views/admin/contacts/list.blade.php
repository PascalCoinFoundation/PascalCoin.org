<?php

/** @var $data \App\Contact[] */

?>
@extends('layouts.admin')
@section('content')
    <h1>Contacts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">E-Mail</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $contact)
        <tr>
            <td><strong><time class="timeago" datetime="{{$contact->created_at}}"></time><br />{{$contact->created_at}}</strong></td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->email}}</td>
            <td>
                <a type="button" class="btn btn-danger" href=""><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <tr>
            <td colspan="5">{{$contact->message}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection