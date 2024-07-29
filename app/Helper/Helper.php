<?php

namespace App\Helper;

use Request;
use App;
use URl;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class Helper {

    public static function eventFileUploadPath(){
        return storage_path('app/public/event_pics');
    }

}

?>
