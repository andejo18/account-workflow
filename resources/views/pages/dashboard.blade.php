@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container">
	@include('partials.revenue', ['data' => $data])

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