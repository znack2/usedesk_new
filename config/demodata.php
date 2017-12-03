<?php

    /*
    |--------------------------------------------------------------------------
    | DEMO DATA FOR COMPANY
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "sendmail", "mailgun", "mandrill", "ses",
    |            "sparkpost", "log", "array"
    |
    */


return [
    'clients' => [
        /* 0 => [
             'model' => [
                 'name' => 'Usedesk',
                 'avatar' => NULL,
                 'position' => NULL,
                 'note' => NULL,
                 'company_id' => '154680',
                 'zendesk_id' => NULL,
                 'spammer' => '0',
                 'vip' => '1',
                 'client_company_id' => NULL,
             ],
             'emails' => [
                 0 => [
                     'model' => [
                         'email' => 'support@usedesk.ru',
                         'fullcontact' => '0',
                         'status' => '',
                     ]
                 ],
             ],
             'tickets' => [
                 0 => [
                     'model' => [
                         'subject' => 'Ваше первое обращение в Usedesk',
                         'type' => 'question',
                         'priority' => 'medium',
                         'status_id' => '8',
                         'assignee_id' => NULL,
                         'channel' => 'email',
                         'email_channel_subject' => 'Ваше первое обращение в Usedesk',
                         'email_channel_email' => 'support@usedesk.ru',
                         'social_id' => NULL,
                         'status_updated_at' => '2017-08-24 07:40:30',
                         'last_updated_at' => '2017-08-24 07:40:30',
                         'published_at' => '2017-08-24 07:40:30',
                         'last_viewed_at' => NULL,
                         'zendesk_id' => NULL,
                         'owner_id' => NULL,
                         'spam_score' => NULL,
                         'nps_sent' => '0',
                         'group' => NULL,
                         'additional_id' => '',
                         'telephony_id' => '',
                         'contact' => 'support@usedesk.ru',
                     ],
                     'keys' => [
                         'email_channel_id' => [
                             'from' => 'channels',
                             'key' => 0
                         ]
                     ],
                     'comments' => [
                         0 => [
                             'model' => [
                                 'type' => 'public',
                                 'message' => '',
                                 'is_html' => '1',
                                 'from' => 'client',
                                 'user_id' => NULL,
                                 'group_id' => NULL,
                                 'is_first' => '0',
                                 'time' => NULL,
                                 'by_mandrill' => '0',
                                 'mandrill_id' => NULL,
                                 'mandrill_delivered' => '0',
                                 'mandrill_readed' => '0',
                                 'published_at' => '2017-08-24 07:40:30',
                                 'extra_headers' => NULL,
                                 'vk_id' => NULL,
                                 'twitter_id' => NULL,
                                 'trigger_id' => NULL,
                                 'mandrill_bounce' => '0',
                             ],
                         ],
                     ],
                 ],
             ],
         ],*/
        1 => [
            'model' => [
                'name' => 'Demo Алексей',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '1',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 0
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'alex@airandflot.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
        ],
        2 => [
            'model' => [
                'name' => 'Demo Дмитрий',
                'avatar' => NULL,
                'position' => NULL,
                'note' => NULL,
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 1
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'dim@qiwicorp.org',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
        ],
        3 => [
            'model' => [
                'name' => 'Demo Alfred',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '1',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 2
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'alfred@iambatman.com',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
        ],
        4 => [
            'model' => [
                'name' => 'Demo Robin',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '1',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 2
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'robin@iambatman.com',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
        ],
        5 => [
            'model' => [
                'name' => 'Demo Pepper Pots',
                'avatar' => NULL,
                'position' => NULL,
                'note' => NULL,
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 3
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'pp@ironman.stark',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ]
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Demo торт на корпоратив день рождения компании',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '2',
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo торт на корпоратив день рождения компании',
                        'email_channel_email' => 'pp@ironman.stark',
                        'social_id' => NULL,
                        'status_updated_at' => '-0001-11-30 00:00:00',
                        'last_updated_at' => '2017-08-25 13:17:06',
                        'published_at' => '2017-08-25 11:14:25',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'pp@ironman.stark',
                    ],
                    'keys' => [
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 7
                        ],
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 0
                        ],
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 4),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 4) - (60 * 60 * 6),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">Добрый день,</div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">&nbsp;</div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">мы бы хотели заказать торт с символикой компании и подписью 10 лет на корпоративе ожидается 300-400 человек. Нам лучше заказать один торт или несколько одинаковых? Какой по весу лучше взять? Как его забрать?</div></div>',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:14:25',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4),
                                ]
                            ],
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>Опираясь на наш опыт, мы рекомендуем расчитывать торт в пределах 150-200 грамм на человека. При этом следует учитывать, что полезная масса торта, декорируемого мастикой меньше, чем его полный вес. Это связано с тем, что мастика — очень плотный и тяжелый материал, и может составлять до 30% от веса торта. Несмотря на консистенцию и приятный вкус мастики, подавляющее большинство людей не способны съесть за один присест больше 20-30 грамм, так как она достаточно приторна. Поэтому,с предложенного кусочка торта, гости снимают декорацию и едят только саму начинку. <br></p>Существует несколько дополнительных факторов, влияющих на вес торта. Например, планируемая свадьба подготовлена на 15-25 человек. Но торт хочется большой, трехъярусный. В этом случае необходимо приготовить торт, весом не менее 5 килограммов, так как при уменьшении веса уменьшится и количество ярусов. К дополнительным факторам относится и энергичность тамады, который может настолько успешно и выгодно продавать большие куски торта, что для гостей совсем ничего не останется.<p><br></p><p>Вы можете забрать торт лично из офиса предоплат с 9:00 до 19:00 или с производства ежедневно с 3:00 до 4:00, и тем самым, сэкономить на доставке. Если же для Вас такой вариант неудобен, либо Вы не располагаете временем, мы доставим Ваш торт своими силами. В пределах города стоимость доставки составляет 650 рублей интервал доставки 4 часа. Доставка загород  — 30 рублей на километр пути от границы города до места назначения.</p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:14:25',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 60 * 6),
                                ]
                            ],
                        ],
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'Вес торта'
                            ],
                        ],
                        1 => [
                            'model' => [
                                'name' => 'доставка'
                            ],
                        ]
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.7'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.0'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 60 * 6),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'use_macros', 'valueByKey' => 'macroses.1'],
                                    1 => ['target' => 'status', 'value' => '2'],
                                    2 => ['target' => 'new_tags', 'value' => 'Вес торта, доставка']
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 60 * 6),
                                ]
                            ]
                        ]
                    ]
                ],
            ],
        ],
        6 => [
            'model' => [
                'name' => 'Demo Happy',
                'avatar' => NULL,
                'position' => NULL,
                'note' => NULL,
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 3
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'happy@ironman.stark',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Помогите выбрать пирожные',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '2',
                        'assignee_id' => NULL,
                        'channel' => 'email',
                        'email_channel_subject' => 'Помогите выбрать пирожные',
                        'email_channel_email' => 'mary@mary.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '2017-08-25 12:18:28',
                        'last_updated_at' => '2017-08-25 12:18:28',
                        'published_at' => '2017-08-25 11:10:17',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'group' => NULL,
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'mary@mary.ru',
                    ],
                    'keys' => [
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 8
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ]
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3) - (60 * 55),
                        ],
                        'status_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3) - (60 * 55),
                        ],
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<div>Добрый день,</div><div>&nbsp;</div><div>нужны пирожные, на которые можно нанести съедобную печать или как-то так это называется. Какие пирожные для этого лучше выбрать?</div><div>&nbsp;</div>',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>Здравствуйте!</p><p>Для съедобной печати подходят абсолютно все пирожные. Вы можете увидеть варианты у нас в каталоге и выбрать нужные. &#8203;</p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 55),
                                ]
                            ]
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.8'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 55),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'status', 'value' => '2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 55),
                                ]
                            ]
                        ]
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'Вес торта'
                            ],
                        ]
                    ],
                ],
            ],
        ],
        7 => [
            'model' => [
                'name' => 'Demo Dr.Blue',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
            ],
            'keys' => [
                'client_company_id' => [
                    'from' => 'clientCompanies',
                    'key' => 4
                ]
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'dr.blue@umbrellacorp.com',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Качество продукции',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '5',
                        'assignee_id' => NULL,
                        'channel' => 'email',
                        'email_channel_subject' => 'Качество продукции',
                        'email_channel_email' => 'mary@mary.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '-0001-11-30 00:00:00',
                        'last_updated_at' => '2017-08-25 12:18:28',
                        'published_at' => '2017-08-25 11:10:17',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'group' => NULL,
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'mary@mary.ru',
                    ],
                    'keys' => [
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 8
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ]
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 2),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60) + (60 * 30),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'есть ли у вас сертификаты, подтверждающие, что вы можете заниматься пищевой деятельностью? Есть какие-то гарантии, что все сырье натуральное без химических добавок? Вы не используете ГМО продукты? у вас натуральные красители и ароматизаторы? Есть варианты тортов для веганов?',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 2),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Я передала ваш запрос руководству. Они смогут более детально рассказать о нашей системе. Наши сертификаты вы можете увидеть у нас на сайте в разделе «О компании». ',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60) + (60 * 30),
                                ]
                            ]
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.8'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60) + (60 * 30),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'use_macros', 'valueByKey' => 'macroses.4'],
                                    1 => ['target' => 'status', 'value' => '5'],
                                    2 => ['target' => 'new_tags', 'value' => 'Вес торта']
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60) + (60 * 30),
                                ]
                            ]
                        ]
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'Вес торта'
                            ],
                        ]
                    ],
                ],
            ],
        ],
        8 => [
            'model' => [
                'name' => 'Demo Black Widow',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'bw@romanoff.com',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Верните деньги',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '2',
                        'assignee_id' => NULL,
                        'channel' => 'email',
                        'email_channel_subject' => 'Верните деньги',
                        'email_channel_email' => 'mary@mary.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '-0001-11-30 00:00:00',
                        'last_updated_at' => '2017-08-25 12:18:28',
                        'published_at' => '2017-08-25 11:10:17',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'group' => NULL,
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'mary@mary.ru',
                    ],
                    'keys' => [
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 8
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ]
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 20),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Заказала у вас торт наполеон — это оказался сущий кошмар! В настоящем наполеоне не 5 слоев, а 10 и больше! Я такое есть не буду, готова вернуть вам ваш торт, а вы верните мне деньги за него!',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>&#8203;Добрый деньЙ</p><p>Рецепт торта Наполеон ни в каких источниках строго не прописан, поэтому в торте там может быть 2 слоя, а может быть 22 слоя.&nbsp;</p><p>Сожалеем, что наш вариант не пришелся вам по душе. =(<br></p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 20),
                                ]
                            ]
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.8'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 20),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    1 => ['target' => 'status', 'value' => '2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 20),
                                ]
                            ]
                        ]
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'Вес торта'
                            ],
                        ]
                    ],
                ],
            ],
        ],
        9 => [
            'model' => [
                'name' => 'Demo Мария',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'mary@mary.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Demo свадебный торт',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '5',
                        'assignee_id' => NULL,
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo свадебный торт',
                        'email_channel_email' => 'mary@mary.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '-0001-11-30 00:00:00',
                        'last_updated_at' => '2017-08-25 12:18:28',
                        'published_at' => '2017-08-25 11:10:17',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'group' => NULL,
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'mary@mary.ru',
                    ],
                    'keys' => [
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 8
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ]
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 4),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 4) - (60 * 60),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">Добрый день!</div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">&nbsp;</div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">Хочу заказать у вас свадебный торт, двухэтажный, на 30 человек, чтобы хватило.</div><div style="color:rgb(0,0,0);font-family:Arial,sans-serif;font-size:15px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;text-align:start;text-transform:none;white-space:normal;background-color:rgb(255,255,255);">Свадьба у нас в бело-синих тонах, немного космическая гамма. Торт хотелось бы в той же. Подскажете, какой дизайн лучше сделать?</div></div>',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>&#8203;Мария, добрый день!&nbsp;</p><p>Я передала запрос нашему главному кондитеру. Он с вами свяжется напрямую, обсудит варианты и подготовит эскиз. <br></p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 59),
                                ]
                            ]
                        ],
                        2 => [
                            'model' => [
                                'type' => 'private',
                                'message' => '<p><a href="#">Роберт</a>,&nbsp;посмотри запрос. Хотят космический свадебный торт. <br></p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 60),
                                ]
                            ]
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.8'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 59),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'status', 'value' => '5'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 4) - (60 * 60),
                                ]
                            ]
                        ]
                    ]
                ],
            ],
        ],
        10 => [
            'model' => [
                'name' => 'Demo Антон Корчагин',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'antkor@maill.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Хочу торт',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '6',
                        'assignee_id' => NULL,
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo свадебный торт',
                        'email_channel_email' => 'antkor@maill.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '-0001-11-30 00:00:00',
                        'last_updated_at' => '2017-08-25 12:18:28',
                        'published_at' => '2017-08-25 11:10:17',
                        'last_viewed_at' => NULL,
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'group' => NULL,
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'antkor@maill.ru',
                    ],
                    'keys' => [
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 3
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ]
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3) - (60 * 60 * 3),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<div>Как купить торт? Хочу с тематиков Гарри Поттера. У вас есть готовые дизайны?</div>',
                                'is_html' => '1',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>&#8203;Добрый день, Антон!</p><p>Уточните, пожалуйста, какой по весу вы хотите торт? Он должен быть бисквитный, чизкейк, мусовый? Если нужны фигурки и много украшений, то лучше выбирать бисквитные. <br></p>',
                                'is_html' => '1',
                                'from' => 'user',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '1',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:10:17',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 60 * 3),
                                ]
                            ]
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.3'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 60 * 3),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'status', 'value' => '6'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 60 * 3),
                                ]
                            ]
                        ]
                    ],
                ],
            ],
        ],
        11 => [
            'model' => [
                'name' => 'Demo Лариса',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'lar@mmaail.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ]
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Demo торт',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '3',
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo торт',
                        'email_channel_email' => 'lar@mmaail.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '2017-08-25 11:20:31',
                        'last_updated_at' => '2017-08-28 11:49:38',
                        'published_at' => '2017-08-25 11:20:31',
                        'last_viewed_at' => '2017-08-25 12:18:08',
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'lar@mmaail.ru',
                    ],
                    'keys' => [
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 0
                        ],
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 0
                        ],
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 3) - (60 * 5),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Как мне расчитать, какой мне нужен торт на 10 человек? 2 кг подойдет или лучше больше взять?
                        спасибо',
                                'is_html' => '0',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:20:31',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3),
                                ]
                            ],
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>Добрый день, Лариса!<br></p><p>Опираясь на наш опыт, мы рекомендуем расчитывать торт в пределах 150-200 грамм на человека. При этом следует учитывать, что полезная масса торта, декорируемого мастикой меньше, чем его полный вес. Это связано с тем, что мастика — очень плотный и тяжелый материал, и может составлять до 30% от веса торта. Несмотря на консистенцию и приятный вкус мастики, подавляющее большинство людей не способны съесть за один присест больше 20-30 грамм, так как она достаточно приторна. Поэтому,с предложенного кусочка торта, гости снимают декорацию и едят только саму начинку. <br>
                                    </p>Существует несколько дополнительных факторов, влияющих на вес торта. Например, планируемая свадьба подготовлена на 15-25 человек. Но торт хочется большой, трехъярусный. В этом случае необходимо приготовить торт, весом не менее 5 килограммов, так как при уменьшении веса уменьшится и количество ярусов. К дополнительным факторам относится и энергичность тамады, который может настолько успешно и выгодно продавать большие куски торта, что для гостей совсем ничего не останется.<p><br>
                                    </p>',
                                'is_html' => '0',
                                'from' => 'user',
                                'client_id' => NULL,
                                'is_first' => '1',
                                'time' => '1699',
                                'by_mandrill' => '1',
                                'mandrill_id' => '2e588d5b2192459d99f9701384864d6c',
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:48:50',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                                'group' => [
                                    'from' => 'userGroups',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 5),
                                ]
                            ],
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.0'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.0'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 5),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'use_macros', 'valueByKey' => 'macroses.0'],
                                    1 => ['target' => 'status', 'value' => '2'],
                                    2 => ['target' => 'new_tags', 'value' => 'Вес торта']
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 3) - (60 * 5),
                                ]
                            ]
                        ]
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'Вес торта'
                            ],
                        ]
                    ],
                ],
            ],
        ],
        12 => [
            'model' => [
                'name' => 'Demo Линда Костромская',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'lindkos@mmmaail.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'У вас есть доставка в Воркуту?',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '6',
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo торт',
                        'email_channel_email' => 'lar@mmaail.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '2017-08-25 11:20:31',
                        'last_updated_at' => '2017-08-28 11:49:38',
                        'published_at' => '2017-08-25 11:20:31',
                        'last_viewed_at' => '2017-08-25 12:18:08',
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'lar@mmaail.ru',
                    ],
                    'keys' => [
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 3
                        ],
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ],
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 2),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 2) - (60 * 60 * 3),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Очень понравились ваши торты. Можно заказать их с доставкой в Воркуту? У нас тут таких не делают. :(',
                                'is_html' => '0',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:20:31',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2),
                                ]
                            ],
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => ' <p>Здравствуйте, Линда!&#8203;</p><p>Сожалею, так далеко мы не возми. Торт просто не доедет или доедет уже с неприемлемым качеством.<br></p>',
                                'is_html' => '0',
                                'from' => 'user',
                                'client_id' => NULL,
                                'is_first' => '1',
                                'time' => '1699',
                                'by_mandrill' => '1',
                                'mandrill_id' => '2e588d5b2192459d99f9701384864d6c',
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:48:50',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                                'group' => [
                                    'from' => 'userGroups',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60 * 3),
                                ]
                            ],
                        ],
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.3'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60 * 3),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'status', 'value' => '6'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60 * 3),
                                ]
                            ]
                        ]
                    ],
                ],
            ],
        ],
        13 => [
            'model' => [
                'name' => 'Demo Эльза Андросова',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'elad@gggmmail.ru',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Ваш торт — Отрава!!!!!!!!!!!',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '6',
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo торт',
                        'email_channel_email' => 'lar@mmaail.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '2017-08-25 11:20:31',
                        'last_updated_at' => '2017-08-28 11:49:38',
                        'published_at' => '2017-08-25 11:20:31',
                        'last_viewed_at' => '2017-08-25 12:18:08',
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'lar@mmaail.ru',
                    ],
                    'keys' => [
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 3
                        ],
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ],
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 2),
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => (60 * 60 * 24 * 2) - (60 * 60),
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Заказала у вас ребенку торт на праздник. После него все слегли с отравлением и родственники и гости! Что вы туда такое запихнули???????',
                                'is_html' => '0',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:20:31',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2),
                                ]
                            ],
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => '<p>&#8203;Эльза, добрый день!</p><p>Сожалеем, что наш торт не вызвал у вас положительных эмоций. Сообщите, пожалуйста, номер вашего заказа, чтобы мы могли отследить тех, кто над ним работал. <br></p>',
                                'is_html' => '0',
                                'from' => 'user',
                                'client_id' => NULL,
                                'is_first' => '1',
                                'time' => '1699',
                                'by_mandrill' => '1',
                                'mandrill_id' => '2e588d5b2192459d99f9701384864d6c',
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:48:50',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                                'group' => [
                                    'from' => 'userGroups',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60),
                                ]
                            ],
                        ],
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'негатив'
                            ],
                        ]
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => ['target' => 'assignee_id', 'valueByKey' => 'users.3'],
                                    1 => ['target' => 'group', 'valueByKey' => 'userGroups.2'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60),
                                ]
                            ]
                        ],
                        1 => [
                            'model' => [
                                'data' => [
                                    0 => [
                                        'target' => 'new_tags',
                                        'value' => 'негатив'
                                    ]
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 58),
                                ],
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                            ]
                        ],
                        2 => [
                            'model' => [
                                'data' => [
                                    1 => ['target' => 'status', 'value' => '6'],
                                ]
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => (60 * 60 * 24 * 2) - (60 * 60),
                                ]
                            ]
                        ]
                    ]
                ],
            ],
        ],
        14 => [
            'model' => [
                'name' => 'Demo Татьяна',
                'avatar' => NULL,
                'position' => '',
                'note' => '',
                'zendesk_id' => NULL,
                'spammer' => '0',
                'vip' => '0',
                'client_company_id' => NULL,
            ],
            'emails' => [
                0 => [
                    'model' => [
                        'email' => 'tati@hotttmmail.ru ',
                        'fullcontact' => '0',
                        'status' => '',
                    ]
                ],
            ],
            'tickets' => [
                0 => [
                    'model' => [
                        'subject' => 'Новое сообщение из виджета',
                        'type' => 'question',
                        'priority' => 'medium',
                        'status_id' => '6',
                        'channel' => 'email',
                        'email_channel_subject' => 'Demo торт',
                        'email_channel_email' => 'lar@mmaail.ru',
                        'social_id' => NULL,
                        'status_updated_at' => '2017-08-25 11:20:31',
                        'last_updated_at' => '2017-08-28 11:49:38',
                        'published_at' => '2017-08-25 11:20:31',
                        'last_viewed_at' => '2017-08-25 12:18:08',
                        'zendesk_id' => NULL,
                        'owner_id' => NULL,
                        'spam_score' => NULL,
                        'nps_sent' => '0',
                        'additional_id' => '',
                        'telephony_id' => '',
                        'contact' => 'lar@mmaail.ru',
                    ],
                    'keys' => [
                        'assignee_id' => [
                            'from' => 'users',
                            'key' => 3
                        ],
                        'email_channel_id' => [
                            'from' => 'channels',
                            'key' => 0
                        ],
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 2
                        ],
                    ],
                    'dates' => [
                        'published_at' => [
                            'type' => 'sub',
                            'value' => 1,
                        ],
                        'last_updated_at' => [
                            'type' => 'sub',
                            'value' => 1,
                        ]
                    ],
                    'comments' => [
                        0 => [
                            'model' => [
                                'type' => 'private',
                                'message' => '<p>userAgent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 YaBrowser/17.7.0.1575 Yowser/2.5 Safari/537.36</p><p>ip: 40.86.89.33</p><p>pageUrl: http://grantphoto.ucoz.net/</p><p>os: OS X</p><p>browserName: Chrome</p><p>browserVersion: 59.0.3071.125</p>',
                                'is_html' => '0',
                                'from' => 'client',
                                'user_id' => NULL,
                                'group_id' => NULL,
                                'is_first' => '0',
                                'time' => NULL,
                                'by_mandrill' => '0',
                                'mandrill_id' => NULL,
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:20:31',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => 1,
                                ]
                            ],
                        ],
                        1 => [
                            'model' => [
                                'type' => 'public',
                                'message' => 'Можно сделать такой торт?',
                                'is_html' => '0',
                                'from' => 'client',
                                'client_id' => NULL,
                                'is_first' => '1',
                                'time' => '1699',
                                'by_mandrill' => '1',
                                'mandrill_id' => '2e588d5b2192459d99f9701384864d6c',
                                'mandrill_delivered' => '0',
                                'mandrill_readed' => '0',
                                'published_at' => '2017-08-25 11:48:50',
                                'extra_headers' => NULL,
                                'vk_id' => NULL,
                                'twitter_id' => NULL,
                                'trigger_id' => NULL,
                                'mandrill_bounce' => '0',
                            ],
                            'dates' => [
                                'published_at' => [
                                    'type' => 'sub',
                                    'value' => 1,
                                ]
                            ],
                            'files' => [
                                0 => [
                                    'model' => [
                                        'file' => 'public/images/demo_cake.png'
                                    ]
                                ]
                            ]
                        ],
                    ],
                    'tags' => [
                        0 => [
                            'model' => [
                                'name' => 'widget'
                            ],
                        ]
                    ],
                    'triggerChanges' => [
                        0 => [
                            'model' => [
                                'data' => [
                                    0 => [
                                        'target' => 'new_tags',
                                        'value' => 'widget'
                                    ]
                                ]
                            ],
                            'dates' => [
                                'changed_at' => [
                                    'type' => 'sub',
                                    'value' => 1,
                                ],
                            ],
                            'keys' => [
                                'user_id' => [
                                    'from' => 'users',
                                    'key' => 0
                                ],
                            ]
                        ]
                    ]
                ],
            ],
        ],
    ],
    'clientCompanies' => [
        0 => [
            'model' => [
                'name' => 'Demo Аэрофлот',
                'note' => 'Постоянные, ко всем праздникам заказывают.',
                'domains' => '@airandflot.ru',
                'phone' => '',
                'address' => 'a:3:{s:7:"country";s:12:"Россия";s:4:"city";s:0:"";s:7:"address";s:0:"";}',
                'vip' => '1',
                'avatar' => '/images/client_companies/files/154680/154680_599eaeafc24dc_avatar.jpg',
            ]
        ],
        1 => [
            'model' => [
                'name' => 'Demo Qiwi',
                'note' => '',
                'domains' => '@qiwicorp.org',
                'phone' => '',
                'address' => 'a:3:{s:7:"country";s:0:"";s:4:"city";s:0:"";s:7:"address";s:0:"";}',
                'vip' => '0',
                'avatar' => '/images/client_companies/files/154680/154680_599eb03779bbc_avatar.jpg',
            ]
        ],
        2 => [
            'model' => [
                'name' => 'Demo Wayne Enterprises',
                'note' => 'Любит черный',
                'domains' => '@iambatman.com',
                'phone' => '',
                'address' => 'a:3:{s:7:"country";s:6:"США";s:4:"city";s:6:"Gothem";s:7:"address";s:0:"";}',
                'vip' => '1',
                'avatar' => '/images/client_companies/files/154680/154680_599eb11321936_avatar.png',
            ]
        ],
        3 => [
            'model' => [
                'name' => 'Demo Stark Industries',
                'note' => '',
                'domains' => '@ironman.stark',
                'phone' => '',
                'address' => 'a:3:{s:7:"country";s:6:"США";s:4:"city";s:8:"New-York";s:7:"address";s:0:"";}',
                'vip' => '0',
                'avatar' => '/images/client_companies/files/154680/154680_599eb20b71641_avatar.jpg',
            ]
        ],
        4 => [
            'model' => [
                'name' => 'Demo Umbrella',
                'note' => 'На Хэллоуин обычно пишут',
                'domains' => '@umbrellacorp.com',
                'phone' => '',
                'address' => 'a:3:{s:7:"country";s:0:"";s:4:"city";s:0:"";s:7:"address";s:0:"";}',
                'vip' => '0',
                'avatar' => '/images/client_companies/files/154680/154680_599eedf0a77c4_avatar.jpg',
            ]
        ],
    ],
    'companyEmailChannel' => [
        0 => [
            'model' => [
                'name' => 'Demo channel',
                'signature' => '<p>С уважением,</p><p>Кондитерская Cake by the ocean</p>',
                'incoming_connection' => 'internal',
                'internal_email' => 'company-154680-2@inbound.usedesk.ru',
                'imap_host' => NULL,
                'imap_port' => NULL,
                'imap_username' => NULL,
                'imap_password' => NULL,
                'outgoing_connection' => 'internal',
                'from_name' => 'company',
                'from_email' => 'Demousedesk@yandex.ru',
                'smtp_host' => NULL,
                'smtp_port' => NULL,
                'smtp_username' => NULL,
                'smtp_password' => NULL,
                'unencrypted_connection' => '0',
                'auto_reply' => '0',
                'auto_reply_message' => NULL,
                'has_problem' => '0',
                'type' => NULL,
                'token' => '',
                'group_id' => '0',
                'quotes' => '0',
                'csi' => '0',
                'key' => '',
                'redirect_url' => '',
                'imap_encrypted' => '',
                'smtp_encrypted' => '',
                'problem_sent' => '0',
                'deleted' => '0',
                'deleted_at' => '0000-00-00 00:00:00',
                'vk_user_id' => '0',
            ]
        ],
    ],
    'users' => [
        0 => [
            'model' => [
                'email' => 'Demo@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Demo-admin',
                'position' => '',
                'phone' => '+7 925 914-53-12',
                'note' => NULL,
                'role' => 'admin',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1398',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 0
                ]
            ]
        ],
        1 => [
            'model' => [
                'email' => 'demo+1@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Роберт',
                'position' => 'Главный кондитер',
                'phone' => '',
                'note' => NULL,
                'role' => 'admin',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1398',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 0
                ]
            ]
        ],
        2 => [
            'model' => [
                'email' => 'demo+2@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Арина',
                'position' => 'Младший кондитер',
                'phone' => '',
                'note' => NULL,
                'role' => 'support',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1398',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 0
                ]
            ]
        ],
        3 => [
            'model' => [
                'email' => 'demo+3@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Эмма',
                'position' => 'Консультант',
                'phone' => '',
                'note' => NULL,
                'role' => 'support',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 2
                ]
            ]
        ],
        4 => [
            'model' => [
                'email' => 'demo+4@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Кейтлин',
                'position' => 'Кондитер',
                'phone' => '',
                'note' => NULL,
                'role' => 'support',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1398',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 0
                ]
            ]
        ],
        5 => [
            'model' => [
                'email' => 'demo+5@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Джек',
                'position' => 'Курьер',
                'phone' => '',
                'note' => NULL,
                'role' => 'employee',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1400',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 1
                ]
            ]
        ],
        6 => [
            'model' => [
                'email' => 'demo+6@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Джеймс',
                'position' => 'Курьер',
                'phone' => '',
                'note' => NULL,
                'role' => 'employee',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1400',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 1
                ]
            ]
        ],
        7 => [
            'model' => [
                'email' => 'demo+7@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Чарльз',
                'position' => 'Кондитер',
                'phone' => '',
                'note' => NULL,
                'role' => 'support',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1398',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 0
                ]
            ]
        ],
        8 => [
            'model' => [
                'email' => 'demo+8@usedesk.ru',
                'avatar' => NULL,
                'my_signature' => NULL,
                'use_signature' => '',
                'name' => 'Изабелла',
                'position' => 'Консультант',
                'phone' => '',
                'note' => NULL,
                'role' => 'support',
                'user_group_id' => NULL,
                'is_first' => '0',
                'reply_behavior' => 'current',
                'company_id' => '154680',
                'last_su_viewed' => NULL,
                'zendesk_id' => NULL,
                'lang' => 'ru',
                'confirmation_code' => NULL,
                'confirmed' => '0',
                'default_group' => '1402',
                'status' => '1',
                'deleted' => '0',
                'deleted_at' => NULL,
            ],
            'keys' => [
                'default_group' => [
                    'from' => 'userGroups',
                    'key' => 2
                ]
            ]
        ],
    ],
    'triggers' => [
        0 => [
            'model' => [
                'name' => 'Demo повышение приоритета',
                'enabled' => '1',
                'manual_starting' => '0',
                'position' => '0',
                'use_word_forms' => '1',
                'deleted' => '0',
            ],
            'conditions' => [
                0 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'channel',
                        'condition' => 'equals',
                        'value' => '2048',
                        'word_form' => NULL,
                    ],
                    'keys' => [
                        'value' => [
                            'from' => 'channels',
                            'key' => 0
                        ]
                    ]
                ],
                1 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'status',
                        'condition' => 'equals',
                        'value' => '8',
                        'word_form' => NULL,
                    ],
                ],
                2 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'срочно',
                        'word_form' => NULL,
                    ],
                ],
                3 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'важно',
                        'word_form' => NULL,
                    ],
                ],
                4 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'нужно завтра',
                        'word_form' => NULL,
                    ],
                ],
            ],
            'actions' => [
                0 => [
                    'model' => [
                        'action' => 'update_priority',
                        'value' => 'urgent',
                    ],
                ],
                1 => [
                    'model' => [
                        'action' => 'update_status',
                        'value' => '1',
                    ],
                ],
                2 => [
                    'model' => [
                        'action' => 'update_assignee',
                        'value' => 'group-1398_user-2310',
                    ],
                    'keys' => [
                        'group' => [
                            'from' => 'userGroups',
                            'key' => 0
                        ],
                        'user' => [
                            'from' => 'users',
                            'key' => 2
                        ],
                    ]
                ],
            ],
        ],
        1 => [
            'model' => [
                'name' => 'Demo автоответ ',
                'enabled' => '1',
                'manual_starting' => '0',
                'position' => '0',
                'use_word_forms' => '1',
                'deleted' => '0',
            ],
            'conditions' => [
                0 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'channel',
                        'condition' => 'equals',
                        'word_form' => NULL,
                    ],
                    'keys' => [
                        'value' => [
                            'from' => 'channels',
                            'key' => 0
                        ]
                    ]
                ],
                1 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'status',
                        'condition' => 'equals',
                        'value' => '8',
                        'word_form' => NULL,
                    ],
                ],
            ],
            'actions' => [
                0 => [
                    'model' => [
                        'action' => 'create_comment',
                        'value' => '<p>Привет!
                        </p>
                        <p>Мы получили ваш запрос, скоро ответим.
                        </p>
                        <p>Всего сладкого!<br>Cake by the ocean<br>
                        </p>
                        <p><br>
                        </p>',
                    ],
                ],
            ],
        ],
        2 => [
            'model' => [
                'name' => 'Demo можно ли попробовать начинки?',
                'enabled' => '1',
                'manual_starting' => '0',
                'position' => '0',
                'company_id' => '154680',
                'use_word_forms' => '1',
                'deleted' => '0',
            ],
            'conditions' => [
                0 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'channel',
                        'condition' => 'equals',
                        'word_form' => NULL,
                    ],
                    'keys' => [
                        'value' => [
                            'from' => 'channels',
                            'key' => 0
                        ]
                    ]
                ],
                1 => [
                    'model' => [
                        'boolean' => 'and',
                        'target' => 'status',
                        'condition' => 'equals',
                        'value' => '8',
                        'word_form' => NULL,
                    ],
                ],
                2 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'попробовать начинку',
                        'word_form' => NULL,
                    ],
                ],
                3 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'попробовать крем',
                        'word_form' => NULL,
                    ],
                ],
                4 => [
                    'model' => [
                        'boolean' => 'or',
                        'target' => 'comment',
                        'condition' => 'text_contains',
                        'value' => 'попробовать бисквит',
                        'word_form' => NULL,
                    ],
                ],
            ],
            'actions' => [
                0 => [
                    'model' => [
                        'action' => 'create_comment',
                        'value' => '<p>Привет!
                            </p>
                            <p>Это автоматический ответ. Не обижайтесь, пожалуйста, если он ответил невпопад. Он у нас ещё учится. :)<br>
                            </p>
                            <p>Начинку можно и нужно пробовать! Вы можете посетить наше производство и продегустировать начинки, посмотреть, как делаются торты. Если Вам очень любопытно, шеф-кондитер лично раскроет Вам некоторые секреты производственного процесса. <br>Если Вы приехали к нам в гости, попробовали все имеющиеся начинки, но не можете определиться с выбором, мы упакуем Вам их с собой, чтобы Вы имели возможность угостить близкого Вам человека и попросить у него совета. <br>Наилучшие дни для дегустации — воскресенье, понедельник и вторник — дни, когда заказов и отгрузок относительно немного, и мы можем уделить Вам больше внимания. Дегустация проводится в любое удобное для Вас время по предварительной договоренности и совершенно бесплатна.<br>
                            </p>',
                    ],
                ],
                1 => [
                    'model' => [
                        'action' => 'update_status',
                        'value' => '2',
                    ],
                ],
            ],
        ],
    ],
    'macrosCategories' => [
        0 => [
            'model' => [
                'name' => 'Demo консультации по тортикам',
                'depth' => '1',
                'parent_id' => NULL,
                'sort' => '0',
            ],
            'macroses' => [
                0 => [
                    'model' => [
                        'name' => 'Demo как расчитать вес торта?',
                        'message' => '<p>Опираясь на наш опыт, мы рекомендуем расчитывать торт в пределах 150-200 грамм на человека. При этом следует учитывать, что полезная масса торта, декорируемого мастикой меньше, чем его полный вес. Это связано с тем, что мастика — очень плотный и тяжелый материал, и может составлять до 30% от веса торта. Несмотря на консистенцию и приятный вкус мастики, подавляющее большинство людей не способны съесть за один присест больше 20-30 грамм, так как она достаточно приторна. Поэтому,с предложенного кусочка торта, гости снимают декорацию и едят только саму начинку. <br>
                            </p>Существует несколько дополнительных факторов, влияющих на вес торта. Например, планируемая свадьба подготовлена на 15-25 человек. Но торт хочется большой, трехъярусный. В этом случае необходимо приготовить торт, весом не менее 5 килограммов, так как при уменьшении веса уменьшится и количество ярусов. К дополнительным факторам относится и энергичность тамады, который может настолько успешно и выгодно продавать большие куски торта, что для гостей совсем ничего не останется.
                            <p><br>
                            </p>',
                        'enabled' => '1',
                        'for_user_id' => NULL,
                        'privacy' => 'all',
                        'sort' => '0',
                        'updated_at' => '2017-08-24 09:40:00',
                        'changed_by_user' => null,
                        'deleted' => '0',
                    ],
                    'actions' => [
                        0 => [
                            'model' => [
                                'action' => 'add_tags',
                                'value' => 'Вес торта',
                            ],
                        ],
                        1 => [
                            'model' => [
                                'action' => 'update_status',
                                'value' => '2',
                            ],
                        ],
                    ],
                ],
                1 => [
                    'model' => [
                        'name' => 'Demo как получить торт?',
                        'message' => '<p>Вы можете забрать торт лично из офиса предоплат с 9:00 до 19:00 или с производства ежедневно с 3:00 до 4:00, и тем самым, сэкономить на доставке. Если же для Вас такой вариант неудобен, либо Вы не располагаете временем, мы доставим Ваш торт своими силами. В пределах МКАД стоимость доставки составляет 650 рублей интервал доставки 4 часа. Доставка в подмосковье — 30 рублей на километр пути от МКАД до места назначения.
                            </p>
                            <p><br>
                            </p>',
                        'enabled' => '1',
                        'for_user_id' => NULL,
                        'privacy' => 'all',
                        'sort' => '1',
                        'updated_at' => '2017-08-24 09:57:20',
                        'changed_by_user' => null,
                        'deleted' => '0',
                    ],
                    'actions' => [
                        0 => [
                            'model' => [
                                'action' => 'add_tags',
                                'value' => 'доставка',
                            ],
                        ],
                        1 => [
                            'model' => [
                                'action' => 'update_status',
                                'value' => '2',
                            ],
                        ],
                    ],
                ],
                2 => [
                    'model' => [
                        'name' => 'Demo индивидуальный дизайн',
                        'message' => 'Пришлите нам, пожалуйста, подробное описание торта, нарисуйте на листке бумаги его эскиз, отсканируйте и направьте нам в ответ на это письмо. Можно эскиз в графическом редакторе нарисовать, если так проще. Я передам его нашим кондитерам, и они предложат наилучший вариант воплощения вашей идеи в жизнь.',
                        'enabled' => '1',
                        'company_id' => '154680',
                        'for_user_id' => NULL,
                        'privacy' => 'all',
                        'sort' => '2',
                        'updated_at' => '2017-08-24 10:01:13',
                        'changed_by_user' => NULL,
                        'deleted' => '0',
                    ],
                    'actions' => [
                        0 => [
                            'model' => [
                                'action' => 'update_status',
                                'value' => '6',
                            ],
                        ],
                    ],
                ],
                3 => [
                    'model' => [
                        'name' => 'Demo дизайн получили, ждите',
                        'message' => '<p>Спасибо! Передала ваши эскиз нашим кондитерам. Они с вами свяжутся уже напрямую для дальнейшего обсуждения. <br>
                            </p>',
                        'enabled' => '1',
                        'for_user_id' => NULL,
                        'privacy' => 'all',
                        'sort' => '3',
                        'updated_at' => '2017-08-24 10:04:09',
                        'changed_by_user' => NULL,
                        'deleted' => '0',
                    ],
                    'actions' => [
                        0 => [
                            'model' => [
                                'action' => 'update_status',
                                'value' => '5',
                            ],
                        ],
                        1 => [
                            'model' => [
                                'action' => 'update_assignee',
                                'value' => 'group-1398_user-2308',
                            ],
                            'keys' => [
                                'value' => [
                                    'group' => [
                                        'from' => 'userGroups',
                                        'key' => 0,
                                    ],
                                    'user' => [
                                        'from' => 'users',
                                        'key' => 1,
                                    ]
                                ]
                            ]
                        ],
                        2 => [
                            'model' => [
                                'action' => 'user_message',
                                'value' => '{"users":["2308"],"subject":"{{ticket_subject}}","message":"<p>\\u0418\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u044b\\u0439 \\u0434\\u0438\\u0437\\u0430\\u0439\\u043d, \\u043f\\u0440\\u0438\\u0441\\u043b\\u0430\\u043b\\u0438 \\u044d\\u0441\\u043a\\u0438\\u0437. <br>\\n&lt;\\/p&gt;"}',
                            ],
                            'keys' => [
                                'value' => [
                                    'from' => 'users',
                                    'key' => 1,
                                ]
                            ]
                        ],
                    ],
                ],
                4 => [
                    'model' => [
                        'name' => 'Demo передали рук-ву',
                        'message' => '<p>Я передала ваш запрос руководству. Они смогут более детально рассказать о нашей системе. Наши сертификаты вы можете увидеть у нас на сайте в разделе «О компании». ​<br>
                            </p>',
                        'enabled' => '1',
                        'for_user_id' => NULL,
                        'privacy' => 'all',
                        'sort' => '4',
                        'updated_at' => '2017-08-24 10:04:09',
                        'changed_by_user' => NULL,
                        'deleted' => '0',
                    ],
                    'actions' => [
                        0 => [
                            'model' => [
                                'action' => 'update_status',
                                'value' => '5',
                            ],
                        ],
                        1 => [
                            'model' => [
                                'action' => 'update_type',
                                'value' => 'question',
                            ]
                        ],
                        2 => [
                            'model' => [
                                'action' => 'user_message',
                                'value' => '{"users":["2308"],"subject":"{{ticket_subject}}","message":"<p>\\u0418\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u044b\\u0439 \\u0434\\u0438\\u0437\\u0430\\u0439\\u043d, \\u043f\\u0440\\u0438\\u0441\\u043b\\u0430\\u043b\\u0438 \\u044d\\u0441\\u043a\\u0438\\u0437. <br>\\n&lt;\\/p&gt;"}',
                            ],
                            'keys' => [
                                'value' => [
                                    'from' => 'users',
                                    'key' => 1,
                                ]
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
    'userGroups' => [
        0 => [
            'model' => [
                'name' => 'Demo-кондитеры (рук-во)',
                'deleted' => '0',
                'deleted_at' => '0000-00-00 00:00:00',
            ]
        ],
        1 => [
            'model' => [
                'name' => 'Demo-курьеры',
                'deleted' => '0',
                'deleted_at' => '0000-00-00 00:00:00',
            ]
        ],
        2 => [
            'model' => [
                'name' => 'Demo-поддержка',
                'deleted' => '0',
                'deleted_at' => '0000-00-00 00:00:00',
            ]
        ],
    ],
];