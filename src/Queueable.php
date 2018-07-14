<?php

namespace ArtisanSdk\Contract;

interface Queueable extends Handler
{
    /**
     * Run the command as a queued job.
     *
     * @param \ArtisanSdk\Contracts\Event $event
     *
     * @return \Illuminate\Foundation\Bus\PendingDispatch
     */
    public function queue(Event $event);
}
