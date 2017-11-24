<?php

namespace App\Service;

use Illuminate\Mail\Message;

class MailService extends AbstractService
{
    public function send($name,$data,$request,$subject)
    {
        return Mail::send($name, $data, function (Message $message) use ($request) {
            $message->to($request->email);
            $message->subject($subject);
        });
    }

    public function sendInvivation($user,$password)
    {
        switch ($user->role) {
            case static::ROLE_SUPPORT:
                $roleParam = trans('text._user.role_params.support');
                break;
            case static::ROLE_EMPLOYEE:
                $roleParam = trans('text._user.role_params.employee');
                break;
            default:
                $roleParam = '';
        }
        MandrillFacade::messages()->sendTemplate(
            'invitation',[],[
                'from_email' => Config::get('mail.from.address'),
                'from_name' => Config::get('mail.from.name'),
                'to' => [
                    [
                        'email' => $user->email,
                        'name' => $user->name,
                        'type' => 'to',
                    ]
                ],
                'global_merge_vars' => [
                    [
                        'name' => 'USER_NAME',
                        'content' => $user->name,
                    ],
                    [
                        'name' => 'USER_TYPE',
                        'content' => $roleParam,
                    ],
                    [
                        'name' => 'USER_LOGIN',
                        'content' => $user->email,
                    ],
                    [
                        'name' => 'USER_PASSWORD',
                        'content' => $password,
                    ],
                    [
                        'name' => 'LOGIN_URL',
                        'content' => URL::route('user.auth.get_login'),
                    ],
                ],
            ]
        );
    }
}