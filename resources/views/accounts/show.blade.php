@extends('layouts.app')

@section('title')
{{ $account->account_type }} Account
@endsection

@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
        	<h1>{{ $account->account_type }} Account: {{ $account->first_name.' '.$account->last_name }}</h1>
            <h2>Status: {{ $account->place }}</h2>

            <div class="title m-b-md">
				Email: {{ $account->email }} <br/>
                Account Type: {{ $account->account_type }}<br/>
                Active: {{ $account->active }}
            </div>

            <title>Pick a transition</title>
            @foreach ($transitions as $transition)
            <div class="title m-b-md">
                <a href="{{ route('accounts.transition.show', ['id' => $account->id,'transition' => $transition->name]) }}">
                    <button class="btn btn-default">{{ $transition->name }}</button>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection