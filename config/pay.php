<?php

return [
    'alipay' => [
        'app_id'         => '2016101100658667',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxCAmfuoV71DLDLUQykUJkeHf0eshu7EiJF7NnfoGOgDJhvFMpoNzU2S0ZQbXtMlsw3N05jNWgXY4kt0KkXbThjajlCnbdfHoke4ihSdUT/cxfMQSVNTe7FqJbWQkcgQFXu28DKAdxY9zbCEAxmMV87l/kGnuJEjEm4er2Nj7LOHL9JZFBBYsuikbcQ4NnuWM/Pd0594FiVRGxS/MGRTtwyYqXKzdWxyIHZi5GdfkCWhQ1MjgrmIVucVPUoM2IwdT5fcdf/niQbRnzc0J/1rIvAa0O6qmjbGEuuVnrY9gMIbozW4j54PjoeJrmBzXBFt+q5GYANqgk70YJ9bUz3JKUwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAwGhuCD1TWZtHFH17+g9SdDsQezIcpe8gUT92ImP0/JFuyFjoZag+NKCKZjocP0cqqh05VITsMRKmaQ6v5IfXdn86ruiUae6ulOAJ/sH6iEupVJnr4iK69bA7vHwtCuhUzS343z+HlIEqyxQ581u4l3Ukatcn+ty4jX/zBLfvKNigSi471eVChR2g12l3kZ3UuQSTmjek7qw7SMr3yEDibzrNdLHX1lpoBWOaSbcyQ5nTQKa8pnrHtpnKc9sB07+3AM6/DN6mtH9h3f60wCIC/FhMwDz+wISemh2bVNk0wwpMk/50tPDupCk7S2euSp4DTY3XJsH09AYS6qTtSJFNJQIDAQABAoIBAG9RvB9+Q6P7R7OeKkVx6fWfWpi8VIDYie0X92RMSqh6CAtYDRULsvnFzGz6v+8IYLHNeKbixLhbnvX3bmKdCVbgo3Yg0AU997ngqUfAuQ90HwL4jtXl3B9bmCQj//dole+j4nJfkjSkSrr199VJwtG2D5zU4KeuXgRX+6VGOdN6B56ND9i4KJPK4X6K/OMPHXYKxFjioDXnEp3+ywuGa+xQBl/+BkHzj4lPwyrYOHHVfP7dKDVOJ/cRtjUdnf8tpZutxhauBX/CIIbSdLbG+tTooH2FrvqPT23BGbkNK8nF8jntQ3c5J1snFiDkK0nQNVdQj0iijt9xg/MBbvw/aR0CgYEA9Wlzhrl1bm3TFKSQ0H718dtOetnt0cr7YjWocvrjmKKmOCw6t14b//HZwAF7cGpKfrtA7aUDVmzZIz+qcduvWywYu9rsBJdCIymvolGe36UDLZOtdLie8kDQZ7EssSxdDCJJCaval8YsKessTDJ/96xNhI9MnnbeWCRB5KjGlDsCgYEAyLWOGNccifO9sa46dAfRyjAc6EG+V9FtczhFxnkG8+MQRIHG4bUEHCtIJJl8dmZFH3b38IR6i+NJLpFQx7tUOiUgZ9TLnVei4aXEHSpGqPL3j/OcIKTGbwfMsFHmPAPuyhb1DlHDkVO7t6QEEqzmFlPfOVbhZn16BaWEfOU8bh8CgYAV1b8QopmfLKhWMtorotAxJ6kQ5yjwvJWnREzrhgUQBJCzeMP0oqvtFtCf88HO27YrFnANdNwaKW8cYsLAhKJSg1bkB/Nt6SNaS5Az6f0vutfQi04oj3Cc70VbpHjsfpz8wmQrNx4o2Nn/FMyJLwkRuUPgYnuXsc3Qm9E9DgM1FwKBgAWo2PDqX+uj691uxEcxUUEaSjZiZDOlvChbldwa3Y9S/8puvmTu7ca9kbM2gMP17k0M1cD6e1omdpHRly2Kor1g/qDu5y7woa8rNXR9FLD+6OwuOmDRRKcs2SC/rnZSxhD8xLw6ogEfE1QCU/sS1QocI1dCk+iH8UDngezjqeiRAoGAKF5YD9tz6CznKxVZN0CMyk2A32DojVudxSloIaPnjzy4anVyNnO5NOVzzxfETfLc4JmrVCvtk3BAEZ8PvpYBWxxh3AiPM049oDezTFgj1m9/r4bUYYr9xCXokqj5BL7aoq4lS/0Ri0R+nOtinlWRrZutZevRVsX6p2kQIhjctlU=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];