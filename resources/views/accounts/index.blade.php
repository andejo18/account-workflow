@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Accounts Index
            </div>

            <a href="{{ route('accounts.create') }}">
                <button class="btn btn-default">Create a New Account</button>
            </a>

            <div class="accounts">
                <ul>
                @foreach ($accounts as $account)
                    <li>
                        {{ $account->account_type }} account: &nbsp; <a href="{{ route('accounts.show', ['accountId' => $account->id]) }}">{{ $account->first_name.' '.$account->last_name }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection