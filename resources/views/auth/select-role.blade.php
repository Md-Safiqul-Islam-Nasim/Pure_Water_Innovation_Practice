@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Select Your Role</h2>
    <form method="POST" action="{{ route('set.role') }}">
        @csrf
        <label>
            <input type="radio" name="role" value="admin" required> Admin
        </label>
        <label>
            <input type="radio" name="role" value="user" required> User
        </label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection