@extends('user.layouts..verify_email')

@section('title')
    {{ trans('text.email_confirmation') }}
@stop

@section('body')
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <a href="{{ route('user.auth.get_login') }}" class="logo">
                    <img src="{{ asset('/images/usedesk_logo.png') }}" width="120" alt=""/>
                </a>
                <p class="description">
				@if(isset($name))
					{{ trans('text.hello') }} {{ $name }}<br><br>
				@endif
				@if(isset($message))
					{{ $message }}
				@endif
				</p>
                <div class="login-bottom-links">
		    <p><a href="{{ route('user.get_started.get_index') }}" class="btn btn-info btn-block"
			  style="color: white;">{{ trans('text.start_use_usedesk') }}</a></p>				
                    <br>
                    © 2016 Usedesk
                </div>
            </div>
        </div>
    </div>
@stop
