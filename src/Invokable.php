<?php

namespace ArtisanSdk\Contract;

interface Invokable
{
    /**
     * Invoke the class as a function.
     *
     * @return mixed
     */
    public function __invoke();
}
