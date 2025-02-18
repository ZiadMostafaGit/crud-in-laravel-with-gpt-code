@extends('layouts.app')

@section('content')
    <h1>Edit Member</h1>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for updates -->

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $member->first_name }}" required>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $member->last_name }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
        </div>

        <div class="form-group">
            <label>Favorite Language</label>
            <select name="favorite_language" class="form-control" required>
                <option value="PHP" {{ $member->favorite_language === 'PHP' ? 'selected' : '' }}>PHP</option>
                <option value="JavaScript" {{ $member->favorite_language === 'JavaScript' ? 'selected' : '' }}>JavaScript</option>
                <option value="Python" {{ $member->favorite_language === 'Python' ? 'selected' : '' }}>Python</option>
                <option value="Java" {{ $member->favorite_language === 'Java' ? 'selected' : '' }}>Java</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
