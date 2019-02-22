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
                <table>
                    <tr>
                        <th>Account Type</th>
                        <th>Account Name</th>
                        <th>Place</th>
                        <th>Status</th>
                        <th>Revenue</th>
                        <th>Created</th>
                    </tr>
                    @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->account_type }}</td>
                        <td><a href="{{ route('accounts.show', ['accountId' => $account->id]) }}">{{ $account->first_name.' '.$account->last_name }}</a></td>
                        <td>{{ $account->place }}</td>
                        <td>
                            @if ($account->active) 
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>${{ $account->cost }}</td>
                        <td>{{ $account->created_at }}</td>                      
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection