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
                    @each('partials.table-column', $accounts, 'account', 'partials.empty-table-column')
                </table>
            </div>
        </div>
    </div>
</div>
@endsection