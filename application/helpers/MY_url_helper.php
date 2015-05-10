<?php
if ( ! function_exists('menu_active'))
{
    function menu_active($var = '')
    {
        $CI = get_instance();
        $active = $CI->uri->segment(1);
        return ($active == $var ? 'class="active"' : '');
    }   
}