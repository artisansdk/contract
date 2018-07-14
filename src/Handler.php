<?php

namespace ArtisanSdk\Contract;

interface Handler extends Runnable
{
    /**
     * Run the command as an event handler.
     *
     * @param \ArtisanSdk\Contracts\Event $event
     *
     * @return mixed
     */
    public function handle(Event $event);
}
