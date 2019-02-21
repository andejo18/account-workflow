@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
        	<h1>Account Details</h1>
        	<h2>{{ $account->first_name.' '.$account->last_name }}</h2>	

            <div class="title m-b-md">
				Email: {{ $account->email }} <br/>
                Account Type ID: {{ $account->account_type_id }}<br/>
                Active: {{ $account->active }}
            </div>
        </div>
    </div>
</div>
@endsection