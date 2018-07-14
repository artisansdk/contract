<?php

namespace ArtisanSdk\Contract;

interface Eventable extends Runnable
{
    /**
     * Silence the command.
     *
     * @return self
     */
    public function silence();

    /**
     * Was the command silenced?
     *
     * @return bool
     */
    public function silenced();

    /**
     * Run the command silently.
     *
     * @return mixed
     */
    public function silently();
}
