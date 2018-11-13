@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <user-profile-form>{{ csrf_field() }}</user-profile-form>
        </div>
    </div>
@endsection
