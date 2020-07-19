<?php


function user() {
    $token = 'Bot ' . env('DISCORD_BOT_TOKEN');
    $headers = [
        'Accept'        => 'application/json',
        'Authorization' => $token
    ];
    $request = Requests::get('https://discordapp.com/api/v6/users/390179632911089666', $headers, array())->body;
    return $request;
}
