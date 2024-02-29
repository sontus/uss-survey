<?php

use Illuminate\Support\Facades\DB;

if(! function_exists('checkVersion')){
    function checkVersion()
    {
        $result = DB::table('settings')->first()->set_name;
        return $result;
    }
}
?>
