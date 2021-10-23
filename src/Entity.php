<?php

namespace ArtisanSdk\Contract;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use ArrayAccess;
use JsonSerializable;

interface Entity extends Arrayable, ArrayAccess, Jsonable, JsonSerializable
{
    /**
     * Get the unique key for the entity.
     *
     * @return string
     */
    public function key() : string;
}
