<?php

namespace App\Events;

use App\Http\Controllers\Webpanel\OverviewController;
use App\Models\UserRecordModel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class realtimedata implements ShouldBroadcast
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
        $response = UserRecordModel::orderBy('id', 'desc')->take(5)->get();
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
        return new Channel('realtimedata');
    }
}
