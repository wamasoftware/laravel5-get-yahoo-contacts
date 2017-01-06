<?php

namespace Yahoocontact\Contact\Facade;

use Illuminate\Support\Facades\Facade;

class YahooFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'yahoo';
    }

}
