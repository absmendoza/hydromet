@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Edit User</h1>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($user, ['method' => 'POST','route' => ['userCRUD.update', $user->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => $user->firstname,'class' => 'form-control', 'disabled' => 'disabled')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee ID:</strong>
                {!! Form::text('employee_id', $user->employee_id, array('placeholder' => 'Employee ID','class' => 'form-control', 'disabled' => 'disabled')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {!! Form::text('email', $user->email, array('placeholder' => 'E-mail','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {!! Form::text('contact_num', $user->contact_num, array('placeholder' => 'Contact #','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position/Permission:</strong></br>
                <input type="checkbox" class="filled-in" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user" id="role_user"><label for="role_user">User</label></br>
                <input type="checkbox" class="filled-in" {{ $user->hasRole('Head') ? 'checked' : '' }} name="role_head" id="role_head"><label for="role_head">Head</label></br>
                <input type="checkbox" class="filled-in" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin" id="role_admin"><label for="role_admin">Admin</label></br>
            </div><br>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <!--{!! Form::password('password') !!}-->
                <a class="btn btn-primary" id="pw_btn">Change</a>
                <input type="password" id="change_pw">
            </div>
        </div><br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('userCRUD.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </div>
    {!! Form::close() !!}

@endsection