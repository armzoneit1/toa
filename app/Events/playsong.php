<?php

namespace App\Events;

use App\Http\Controllers\Webpanel\OverviewController;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class playsong implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $msg;
    public $data;
    public function __construct($msg)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=1&controltype=play_list_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 9c3273e6-ed68-ea45-c8de-5ad888fa9bbb"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);
        $this->msg = $msg;
        $this->data = $response;
    }

//    public function broadcastWith()
//    {
//        return[
//            'hello' => 'there'
//        ];
//    }



    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('playsongs');
    }
}
