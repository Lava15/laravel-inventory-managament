<?php
if (!function_exists('isActiveNavLink')) {
    function isActiveNavLink($route, $class = 'border-b-2 border-gray-300', $exact = true)
    {
        if ($exact && request()->routeIs($route)) {
            return $class;
        } elseif (!$exact && request()->is($route)) {
            return $class;
        }
        return '';
    }
}
