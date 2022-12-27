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

if (!function_exists('get_when'))
{
    /**
     * return array
     */
    function get_when($data)
    {
        $date = strtotime($data);
        $current = strtotime(date("Y-m-d"));

        $datediff = $date - $current;
        $difference = floor($datediff/(60*60*24));
        if ($difference==0)
        {
            return 'today';
        }
        elseif ($difference > 1) 
        {
            return 'Future Date';
        }
        elseif ($difference > 0)
        {
            return 'tomorrow';
        }
        elseif ($difference < -1)
        {
            return 'Long Back';
        }
        else
        {
            return 'yesterday';
        }  
    }
}