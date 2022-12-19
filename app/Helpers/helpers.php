<?php


if (!function_exists('to_array'))
{
    /**
     * return array
     */
    function to_array($data)
    {
        if(empty($data))
            return [];

        return $data->toArray();
    }
}
