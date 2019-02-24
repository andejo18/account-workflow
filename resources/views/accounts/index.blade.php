@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Accounts
            </div>

            <a href="{{ route('accounts.create') }}">
                <button class="btn btn-default">Create a New Account</button>
            </a>

            <div class="accounts">
                @include('partials.accounts-table', ['accounts' => $accounts])
            </div>
        </div>
    </div>
</div>
@endsection