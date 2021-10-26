<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EveryoneBid implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $price;

    /**
     * The name of the queue connection to use when broadcasting the event.
     *
     * @var string
     */
    public $connection = 'redis';

    /**
     * The name of the queue on which to place the broadcasting job.
     *
     * @var string
     */
    public $queue = 'default';

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('EveryoneChannel');
    }

    /*
     * The Event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'EveryoneMessage';
    }

    /*
     * Get the data to broadcast.
     *
     * @return array
     */
    // public function broadcastWith()
    // {
    // //     dd($Message);
    //     return [
    //         'message'=> "keren"
    //     ];
    // }
}
