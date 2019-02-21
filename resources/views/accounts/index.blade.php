@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Accounts Index
            </div>

            <div class="accounts">
                <ul>
                @foreach ($accounts as $account)
                    <li>
                        <a href="{{ route('accounts.show', ['accountId' => $account->id]) }}">{{ $account->first_name }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection