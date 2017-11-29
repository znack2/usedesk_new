@extends('user.layouts.login')

@section('title')
    {{ trans('text.login') }}
@stop

@section('body')
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <a href="{{ route('user.auth.get_login') }}" class="logo">
                    <img src="{{ asset('/images/usedesk_logo.png') }}" width="120" alt=""/>
                </a>
                <p class="description">{{ trans('text.account_entrance') }}</p>
            </div>
        </div>
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                {{ Form::open(['route' => ['user.auth.post_login', 'redirect_to' => Input::get('redirect_to')]]) }}
                <div class="form-group">
                    <div class="input-group {{ Session::has('message_danger') ? 'validate-has-error' : '' }}">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => trans('text.email'),
                            'autofocus' => 'autofocus']) }}
                        @if(Session::has('message_danger'))
                            <label class="error" style="color: #ec5956;">{{ Session::get('message_danger') }}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group {{ Session::has('message_danger') ? 'validate-has-error' : '' }}">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('text.password')]) }}
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        {{ trans('text.login') }}
                    </button>
                </div>
                {{ Form::close() }}
                <div class="login-bottom-links">
                    <a href="{{ route('user.auth.get_password_restore') }}" class="link">{{ trans('text.password_restore') }}</a>
                    <br>
                    <a href="{{ route('user.auth.get_registration') }}" class="link">{{ trans('text.registration') }}</a>
                    <br>
                    © 2017 Usedesk
                </div>
                <div class="login-bottom-links">
                    @set('currentLang',  Config::get('app.locale'))
                    <div class="dropdown language-selector">

                        {{trans('text.lang')}}: &nbsp;
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true" >
                            <img src="/neon/neon/assets/images/flag-{{$currentLang}}.png" width="16" height="16">
                        </a>

                        <ul class="dropdown-menu pull-right">
                            @foreach(Config::get('app.languages') as $lang)
                                <li class="<?php if($lang == $currentLang):?>active<?php endif;?>" >
                                    <a href="?lang={{$lang}}">
                                        <img src="/neon/neon/assets/images/flag-{{$lang}}.png" width="16" height="16">
                                        <span>{{trans('text._lang_local.'.$lang)}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
