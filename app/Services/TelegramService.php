<?php

namespace App\Services;

class TelegramService extends AbstractService
{
    public $botToken = '323512898:AAHFsYUMsUd8m-TfXL70UHK3Sj-QhAbkkO8';
    public $groupId = '-1001122198494';
    // $groupId = '-219606424';

    private function sendTelegramMessage($mytext,$data,$errors = NULL)
    {
        try {
            if (!isset($_ENV['app.disable_registration_tg'])) 
            {
                // if ($referer = \Request::server('HTTP_REFERER')) {
                //     $arUrl = parse_url($referer);
                //     $url = $arUrl["scheme"] . "://" . $arUrl["host"];
                // } else {
                //     $url = \Config::get('app.secure_domain') . '.' . \Config::get('app.domain');
                // }
                $url = 'https://api.telegram.org/bot' . $this->botToken . '/sendMessage';

                $text = ".$mytext.\r\nСервер: " . $url . "\r\nДата: " . $this->now->copy()->setTimezone('Europe/Moscow')->toDateTimeString() . "\r\n";
                
                $text .= "Компания " . $data->name . "(id:" . $data->id . ")\r\n";

                foreach ($data as $key => $val) {
                    $text .= $key.": ".$val."\r\n";
                }

                $text .= "Ошибки:\r\n";

                foreach ($errors as $error) {
                    $text .= $error . "\r\n";
                    $text .= $key.": ".$message[0]."\r\n";
                }

                $sendData = [
                    'chat_id' => $this->groupId,
                    'text' => $text,
                    'disable_web_page_preview' => null,
                    'reply_to_message_id' => null,
                    'reply_markup' => null,
                    'parse_mode' => "HTML"
                ];

                $result = $this->curlhelper->call($url,$sendData);

                $this->logs($result);
                $this->logs($text);
                return $result;
            }
        } catch (Exception $e) {
            $this->logs($e);
        }     
    }

    public function SendSuccess($data)
    {
        $this->sendTelegramMessage('Зарегистрирована новая компания',$data);
    }

    public function SendError($data,$errors)
    {
        $this->sendTelegramMessage('Ошибка при регистрации компании',$data,$errors);
    }

    // public function SendDemoError($data,$errors)
    // {
    //     $this->sendTelegramMessage('Ошибка при создании демо-данных компании',$data,$errors);
    // }

}
