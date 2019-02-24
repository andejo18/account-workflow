@extends('layouts.app')
@section('title', 'Account Transition')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Are you sure you want to transition this account?
            </div>

            <div class="title m-b-md">
                <a href="{{ route('accounts.transition.store', ['account_id' => $account_id,'transition' => $transition]) }}">
                    <button class="btn btn-default">Yes</button>
                </a>
            </div>

            <div class="title m-b-md">
                <a href="{{ route('accounts.show', ['id' => $account_id]) }}">
                    <button class="btn btn-default">No</button>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection