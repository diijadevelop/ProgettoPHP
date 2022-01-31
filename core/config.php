<?php
return [
    'database'=>[
        'dbname'=>'calendar_application',
        'connection' => 'mysql:host=127.0.0.1',
        'username' => 'root',
        'password' => '',
        'options' => [
            //questo serve a mostrare segnalazioni di errore per quanto riguarda il database
            //ad es. se chiami un database che non esiste perché sbagli il nome, ecc.
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

        ]
    ]
];