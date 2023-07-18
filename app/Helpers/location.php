<?php

if (! function_exists('set_price')) {
    function set_price($car)
    {
        $ip = request()->getClientIp() == '127.0.0.1' ? '103.244.134.0' : request()->getClientIp();
        $location = \Stevebauman\Location\Facades\Location::get($ip);
        $country = $location == false ? 'AE' : $location->countryCode;
        if ($country === 'AE') {
            return number_format((float) $car->price_aed).' AED';
        } else {
            return number_format((float) $car->price_aed).' $';
        }
    }
}
if (! function_exists('set_contact')) {
    function set_contact($car)
    {
        $ip = request()->getClientIp() == '127.0.0.1' ? '103.244.134.0' : request()->getClientIp();
        $location = \Stevebauman\Location\Facades\Location::get($ip);
        $country = $location == false ? 'AE' : $location->countryCode;
        if ($country == 'AE') {
            return $car->whatsapp_uae;
        } else {
            return $car->whatsapp_africa;
        }
    }
}
