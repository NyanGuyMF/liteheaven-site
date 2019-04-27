<?php
    $firstUser = DB::connection('liteheaven_launcher')
        ->table('users')
        ->first();

    echo $firstUser->login;
?>
