@extends('layouts.app')

@section('content')
    <h1>Create New Member</h1>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Favorite Language</label>
            <select name="favorite_language" class="form-control" required>
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="C#">C#</option>
                <option value="Ruby">Ruby</option>
                <option value="Swift">Swift</option>
                <option value="Go">Go</option>
                <option value="Kotlin">Kotlin</option>
                <option value="Rust">Rust</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
