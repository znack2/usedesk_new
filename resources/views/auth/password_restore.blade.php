@extends('user.layouts.password_restore')

@set('title', trans('text.password_restore'))

@section('title')
    {{ $title }}
@stop

@section('body')
    @include('user.include.flash')
    {{ Form::open() }}
    <div class="form-group">
        <div class="input-group {{ $errors->has('email') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-mail"></i>
            </div>
            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => 'autofocus']) }}
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
