<?php

return [
    'resources' => [
        'labels' => [
            'user' => [
                'one' => 'Użytkownik',
                'few' => 'Użytkownicy',
            ],
        ],
        'fields' => [
            'user' => [
                'name' => 'Nazwa',
                'email' => 'E-mail',
                'password' => 'Hasło',
            ],
        ],
    ],
    'metrics' => [
        'names' => [
            'new_users' => 'Nowi użytkownicy',
            'users_per_day' => 'Użytkownicy dziennie',
        ],
        'options' => [
            'new_users' => [
                '30_days' => '30 dni',
                '60_days' => '60 dni',
                '365_days' => '365 dni',
                'today' => 'Dzisiaj',
                'month_to_date' => 'Miesiąc do chwili obecnej',
                'quarter_to_date' => 'Kwartał do chwili obecnej',
                'year_to_date' => 'Rok do chwili obecnej',
            ],
            'users_per_day' => [
                '30_days' => '30 dni',
                '60_days' => '60 dni',
                '90_days' => '90 dni',
            ],
        ],
    ],
];
