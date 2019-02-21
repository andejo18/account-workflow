@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
        	<h1>Account: {{ $account->first_name.' '.$account->last_name }}</h1>

            <div class="title m-b-md">
				Email: {{ $account->email }} <br/>
                Account Type: {{ $account->account_type }}<br/>
                Active: {{ $account->active }}
            </div>
        </div>
    </div>
</div>
@endsection