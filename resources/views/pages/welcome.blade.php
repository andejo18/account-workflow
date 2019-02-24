@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
	    <div class="content">
	        <a href="{{ route('accounts.create') }}">
                <button class="btn btn-default">Create a New Account</button>
            </a>

            <a href="{{ route('accounts.index') }}">
                <button class="btn btn-default">Accounts List</button>
            </a>
	    </div>
	</div>
</div>
@endsection