<?php

return [
    'resources' => [
        'labels' => [
            'user' => [
                'one' => 'User',
                'few' => 'Users',
            ],
        ],
        'fields' => [
            'user' => [
                'name' => 'Name',
                'email' => 'Email',
                'password' => 'Password',
            ],
        ],
    ],
    'metrics' => [
        'names' => [
            'new_users' => 'New Users',
            'users_per_day' => 'Users Per Day',
        ],
        'options' => [
            'new_users' => [
                '30_days' => '30 Days',
                '60_days' => '60 Days',
                '365_days' => '365 Days',
                'today' => 'Today',
                'month_to_date' => 'Month To Date',
                'quarter_to_date' => 'Quarter To Date',
                'year_to_date' => 'Year To Date',
            ],
            'users_per_day' => [
                '30_days' => '30 Days',
                '60_days' => '60 Days',
                '90_days' => '90 Days',
            ],
        ],
    ],
];
