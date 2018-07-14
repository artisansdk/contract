<?php

namespace ArtisanSdk\Contract;

interface Runnable extends Invokable
{
    /**
     * Run the function.
     *
     * @return mixed
     */
    public function run();
}
