<?php

namespace Tnhnclskn\DebugWhitelist;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return 'debug-whitelist';
    }
}
