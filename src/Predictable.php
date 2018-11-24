<?php

namespace ArtisanSdk\Contract;

use SplFixedArray;

interface Predictable
{
    /**
     * Predict the target from the feature input.
     *
     * @param int|float|array|\SplFixedArray $x
     *
     * @return \SplFixedArray
     */
    public function predict($x): SplFixedArray;
}
