@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Profile</h1>
    </div>
    <div class="col-lg-4">
        <form action="{{ url('profile/'.Auth::user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ $user->name }}" />
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ $user->username }}" />
            </div>
            <div class="mt-4">
                <button ttpe="submit" class="btn btn-primary">Perbaharui</button>
            </div>
        </form>
    </div>
</div>
@endsection