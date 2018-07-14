<?php

namespace ArtisanSdk\Contract;

interface Listener
{
    /**
     * Get the listeners this event subscribes to.
     *
     * @return array
     */
    public static function listeners();
}
