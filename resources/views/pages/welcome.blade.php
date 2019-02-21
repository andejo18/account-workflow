@extends('layouts.app')
@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
	    <div class="content">
	        <div class="title m-b-md">
	            Account Workflow
	        </div>

	        <div class="links">
	            <a href="{{ route('accounts.index')}}">Accounts List</a>
	        </div>
	    </div>
	</div>
</div>
@endsection