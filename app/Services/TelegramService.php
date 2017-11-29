<?php

namespace App\Services;

class TelegramService extends AbstractService
{
    public $botToken = '323512898:AAHFsYUMsUd8m-TfXL70UHK3Sj-QhAbkkO8';
    public $groupId = '-1001122198494';

    private function sendTelegramMessage($mytext,$data)
    {
        try {
            if (!isset($_ENV['app.disable_registration_tg'])) {
                
                $text = ".$mytext.\r\nСервер: ".$url."\r\nДата: ".$now->toDateTimeString()."\r\n";
                unset($data['user_password']);
                foreach ($data as $key => $val) {
                    $text .= $key.": ".$val."\r\n";
                }
                $sendData = array(
                    'chat_id' => $this->groupId,
                    'text' => $text,
                    'disable_web_page_preview' => null,
                    'reply_to_message_id' => null,
                    'reply_markup' => null,
                    'parse_mode' => "HTML"
                );
                $url = 'https://api.telegram.org/bot' . $this->botToken . '/sendMessage';

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

    public function SendError($data)
    {
        $this->sendTelegramMessage('Ошибка при регистрации компании',$data);
    }

}
