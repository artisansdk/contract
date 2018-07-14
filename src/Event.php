<?php

namespace ArtisanSdk\Contract;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

interface Event extends Arrayable, Jsonable, JsonSerializable
{
}
