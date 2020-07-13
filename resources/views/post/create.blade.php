@extends('layouts.app')

@section('title', 'New Post')
@section('content')

    @include('partitials.header')

    <form action="/post/store" method="POST" class="bg-light p-4 p-md-5 contact-form" style="padding: 20 500px !important;">
    <input type="hidden" name="user_id" value=""/>
        <div class="form-group">
        <input name="title" type="text" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
        <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
        <input type="file" class="form-control" placeholder="Image" name="image">
        </div>
        <br>
        <label for="category">Category: </label>
        <select id="category" name="category_id">
            <option value="1">Illustration</option>
            <option value="2">Brading</option>
            <option value="3">Application</option>
            <option value="4">Design</option>
            <option value="4">Marketing</option>
        </select>
        <br><br>
        <div class="form-group">
        <input type="submit" value="Post Now" class="btn btn-primary py-3 px-5">
        </div>
    </form>

@endsection('content')
