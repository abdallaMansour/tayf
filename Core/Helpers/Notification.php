<?php

use Brian2694\Toastr\Facades\Toastr;


if (!function_exists('toastNotification')) {
    /**
     * Set toast message
     *
     * @param string $type
     * @param string $message
     * @param string $header
     * @return void
     */
    function toastNotification($type, $message, $header = null)
    {
        Toastr::$type(translate($message), $header);
    }
}
