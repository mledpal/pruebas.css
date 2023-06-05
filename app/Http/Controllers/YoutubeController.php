<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;


class YoutubeController extends Controller
{
    public function index() {
        

        $client = new Client();
        $client->setDeveloperKey('AIzaSyALDFol2cwbIsCc64akoyh9o_H8TgqU2ek');
        $client->setApplicationName('web-fpvenjaen');
        $client->setScopes(['https://www.googleapis.com/auth/youtube.force-ssl']);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setSubject('info@ledesmadrones.es');
        $youtube = new \Google\Service\YouTube($client);


        $channelResponse = $youtube->channels->listChannels('id,snippet,statistics', array(
    'forUsername' => 'fpvenjaen'));

        
        return gettype($channelResponse);

    }



}
