@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ $account->first_name }}
                {{ $account->last_name }}
            </div>
        </div>
    </div>
</div>
@endsection