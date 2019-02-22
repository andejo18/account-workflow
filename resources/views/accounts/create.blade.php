@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            
            <form action="{{ route('accounts.store') }}" method="post">
                <h1>Create a New Account</h1>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                    @if($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                    @if($errors->has('last_name'))
                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('account_type_id') ? ' has-error' : '' }}">
                    <label for="account_type_id">Account Type</label>
                    <select name="account_type_id" class="form-control">
                    <option></option>
                    @foreach($accountTypes as $accountType)
                    <option value="{{ $accountType->id }}"> {{ $accountType->account_type . ' - Cost/Month: $' . $accountType->cost }}</option>
                    @endforeach
                    </select>
                    @if($errors->has('account_type_id'))
                        <span class="help-block">{{ $errors->first('account_type_id') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection