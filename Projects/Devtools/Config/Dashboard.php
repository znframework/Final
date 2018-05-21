<?php return
[
    /*
    |--------------------------------------------------------------------------
    | Devtools Version
    |--------------------------------------------------------------------------
    |
    | Current devtools version.
    |
    */

    'version' => '1.0.2.3', 

    /*
    |--------------------------------------------------------------------------
    | Minimum ZN Version
    |--------------------------------------------------------------------------
    |
    | The lowest executable ZN version
    |
    */

    'minZNVersion' => '5.7.2',

    /*
    |--------------------------------------------------------------------------
    | IP
    |--------------------------------------------------------------------------
    |
    | IP addresses with permission to access.
    |
    */

    'ip' => ['127.0.0.1'],

    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    |
    | Users who can open sessions.
    |
    */

    'users' =>
    [
        #'username1' => 'password1',
        #'username2' => 'password2'
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor
    |--------------------------------------------------------------------------
    |
    | Editor default theme.
    |
    */

    'editor' =>
    [
        'theme' => 'tomorrow_night_eighties'
    ],

    /*
    |--------------------------------------------------------------------------
    | Limits
    |--------------------------------------------------------------------------
    |
    | Limits for datatables.
    |
    */

    'limits' =>
    [
        'language'  => 20,
        'grid'      => 20,
        'datatable' => 10
    ]
];
