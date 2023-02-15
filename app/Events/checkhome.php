<?php

namespace App\Events;

use App\Http\Controllers\Webpanel\OverviewController;
use App\Models\Backend\LayoutModel;
use App\Models\Backend\ZoneModel;
use App\Models\UserRecordModel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class checkhome implements ShouldBroadcast
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
        $layout = LayoutModel::first();
        $zone = ZoneModel::where('layout_id',$layout->id)->get();
        $this->msg = $msg;
        $this->data = ['layout' => $layout, 'zone' => $zone];
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
        return new Channel('checkhome');
    }
}
