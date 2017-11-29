@extends('user.layouts.password_restore')

@set('title', trans('text.password_restore'))

@section('title')
    {{ $title }}
@stop

@section('body')
    @include('user.include.flash')
    {{ Form::open() }}
    <div class="form-group">
        <div class="input-group {{ $errors->has('password') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-lock"></i>
            </div>
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Пароль', 'autofocus' => 'autofocus']) }} <!-- password -->
        </div>
    </div>
    <div class="form-group">
        <div class="input-group {{ $errors->has('password_confirmation') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-lock"></i>
            </div>
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Подтвердите пароль']) }} <!-- confirm_password -->
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
            <i class="entypo-right-open-mini"></i>
            {{ trans('text.password_restore') }}
        </button>
    </div>
    {{ Form::close() }}
@stop
