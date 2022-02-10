<?php

namespace App\Http\Controllers;

use Pusher\Pusher;

class PusherNotificationController extends Controller
{
    public $pusher;
    public function __construct()
    {

        $options = array(
            'cluster' => 'ap2',
            'encrypted' => true,
        );
        // dd(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'));
        $this->pusher = new Pusher(
            'cf736425b7e4224a6bb2',
            '31f949797fcd7deb5ef6',
            '1344498',
            $options
        );

    }
    public function notification()
    {

        $data['message'] = 'Hello XpertPhp';
        $this->pusher->trigger('island-channel', 'island', $data);

    }
}
