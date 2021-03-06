@extends('user.layouts.registration')

@set('title', trans('text.registration'))

@section('title')
    {{ $title }}
@stop

@section('body')
    {{ Form::open() }}
    <div class="form-group">
        <div class="input-group {{ $errors->has('company_name') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-home"></i>
            </div>
            {{ Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => trans('text.company_name')]) }} <!-- company_name -->
        </div>
        <div style="color: #51555D; font-size: 11px; text-align: right;">{{ trans('text._help.auth.company_name') }}</div>
    </div>
    <div class="form-group">
        <div class="input-group {{ $errors->has('user_name') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-user"></i>
            </div>
            {{ Form::text('user_name', null, ['class' => 'form-control', 'placeholder' => trans('text.administrator_name')]) }}
        </div>
        <div style="color: #51555D; font-size: 11px; text-align: right;">
            {{ trans('text._help.auth.user_name') }}
        </div>
    </div>
    <div class="form-group">
        <div class="input-group {{ $errors->has('user_email') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-user"></i>
            </div>
        {{ Form::text('user_email', null, ['class' => 'form-control', 'placeholder' => trans('text.admin_email')]) }} <!-- admin_email -->
        </div>
        @if($errors->has('user_email'))
            <div style="color: #EC5956; font-size: 11px; text-align: right;">{{ $errors->first('user_email') }}</div>
        @else
            <div style="color: #51555D; font-size: 11px; text-align: right;">
                {{ trans('text._help.auth.user_email') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
            <i class="entypo-right-open-mini"></i>
            {{ trans('text.next_step') }}
        </button>
    </div>
    <div class="form-group" style="color:#51555D">
        {{ trans('text.step1of2') }}
    </div>
    {{ Form::close() }}
@stop
