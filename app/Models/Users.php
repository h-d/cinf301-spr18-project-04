<?php
namespace App\Models;



/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

class Users
{
    /**
     * Return all of the stored data
     *
     * @return number[][]|string[][]
     */
    public static function complete()
    {
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name=Twitter';
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $json_output = json_decode($response, true);

        $statuses = array();

        foreach ($json_output as $status )
        {
            $statuses[] = $status;
        }

        return $statuses;
    }

    /**
     * Access only a single "record" of data for the given id (or index)
     *
     * @param int $id
     * @return number[]|string[]
     */
    public static function find($id)
    {
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$id;
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $json_output = json_decode($response, true);

        $statuses = array();

        foreach ($json_output as $status )
        {
            $statuses[] = $status;
        }

        return $statuses;
    }

}