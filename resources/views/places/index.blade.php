@extends('layouts.app')
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Places/Statuses
            </div>

            <div class="accounts">
                <ul>
                @foreach ($places as $place)
                    <li>
                        {{ $place->place }}: {{ $place->description }} 
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection