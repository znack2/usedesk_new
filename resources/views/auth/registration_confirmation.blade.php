@extends('user.layouts.registration')

@set('title', trans('text.registration_confirmation'))

@section('title')
    {{ $title }}
@stop

@section('body')
    {{ Form::open(['id' => 'form']) }}
    <div class="form-group">
        <div class="input-group {{ $errors->has('code') ? 'validate-has-error' : '' }}">
            <div class="input-group-addon">
                <i class="entypo-mobile"></i>
            </div>
            {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => trans('text.sms_code'), 'autofocus' => 'autofocus']) }} <!-- sms_code -->
        </div>
        <div style="color: #51555D; font-size: 11px; text-align: right;">
            {{ trans('text._help.auth.sms_confirmation_code') }}<br>
            <a href="javascript:void(0)" class="no-sms">{{trans('text.reg_by_email')}}</a><br>
            <a href="{{route('user.auth.get_redirect_by_hash', [$hash])}}" class="">{{trans('text.reg_change_phone')}}</a>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-login">
            <i class="entypo-right-open-mini"></i>
            {{ trans('text.next_step') }}
        </button>
    </div>
    <div class="form-group" style="color: #51555D">
        {{ trans('text.step2of3') }}
    </div>
    {{ Form::close() }}
    <div class="modal" id="modal-1" style="display: none;">
        <div class="modal-dialog" style="width: 450px; max-width: 100%; top: 50%; margin-top: -65px;">
            <div class="modal-content" style="font-size: 14px;">
                <div class="modal-body alert alert-info fade in alert-dismissable" style="margin: 0;">
                    {{trans('text.check_your_mail')}}
                </div>
            </div>
        </div>
    </div>
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
                    return Lang.get('text.are_you_sure'); //r_u_sure
                }
            };
            window.addEventListener('widgetLoaded', function (){
                window.WidgetDefaults.additionalParameters.subject = '{{trans('text.cant_register')}}';
            });
            $('.no-sms').on('click', function(){
                var text = 'Не приходит смс на мой номер '+$.cookie('reg_phone')+', Usedesk, помогай!';
                Usedesk.widget.identify({ name: '', email: '', message: text });
                Usedesk.widget.send();
            });

            $(window).load(function () {
                if (typeof (Usedesk) !== 'undefined' && typeof(Usedesk.widget) !== 'undefined') {
                    Usedesk.widget.afterSubmit(function () {
                        var modal = $('#modal-1').modal();
                        setTimeout(function () {
                            modal.close();
                        }, 30000);
                        $('#simplemodal-container').click(function () {
                            modal.close()
                        });
                    });
                }
            });
        });
    </script>
@stop
