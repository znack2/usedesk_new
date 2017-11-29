@extends('user.layouts.registration')

@set('title', trans('text.registration'))

@section('title')
    {{ $title }}
@stop

@section('body')
    {{ Form::open(['id' => 'form']) }}
    <div class="form-group">
        <div class="input-group {{ $errors->has('user_password') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-lock"></i>
            </div>
            {{ Form::password('user_password', ['class' => 'form-control', 'placeholder' => trans('text.admin_password')]) }} <!-- admin_password -->
        </div>
    </div>
    <div class="form-group">
        <div class="input-group {{ $errors->has('user_password_confirmation') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-lock"></i>
            </div>
            {{ Form::password('user_password_confirmation', ['class' => 'form-control', 'placeholder' => trans('text.password_confirmation')]) }} <!-- password_confirmation -->
        </div>
        <div style="color: #51555D; font-size: 11px; text-align: right;">{{ trans('text._help.auth.user_password_confirmation') }}</div>
    </div>
    <div class="form-group">
        <div class="input-group {{ $errors->has('company_users_number') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-users"></i>
            </div>
            {{ Form::select('company_users_number', [null => trans('text.users_number'), '10' => '1 - 10', '25' => '11 - 25', '50' => '26-50', '100' => '51-100'], Input::old('company_users_number'), ['class' => 'form-control']) }} <!-- users_number -->
        </div>
        <div style="color: #51555D; font-size: 11px; text-align: right;">
            {{ trans('text._help.auth.user_number') }}
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
            <i class="entypo-right-open-mini"></i>
            {{ trans('text.finish_registration') }}
        </button>
    </div>
    <div class="form-group" style="color:#51555D">
        {{ trans('text.step2of2') }}
    </div>
    <input type="hidden" id="_ga_cid" name="_ga_cid">
    {{ Form::close() }}
@stop

@section('scripts')
    <script>
        $(function () {
            var isSubmit = false;
            $('#form').submit(function () {
                isSubmit = true;
            });
            window.onbeforeunload = function () {
                if (!isSubmit) {
                    return Lang.get('text.are_you_sure'); // r_u_sure
                }
            };
            var gaCid = $.cookie('_ga_cid');
            if (gaCid) {
                $('#_ga_cid').val(gaCid);
            }
        });
    </script>
@stop

