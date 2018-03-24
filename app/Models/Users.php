<?php
namespace App\Models;
//Hudson DeVoe (kind of)
//Users class uses given id var for j7mbo's twitter api to return tweets by a specific user


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
     * Access the statuses of a user with the given $id (username)
     */
    public static function find($id)
    {
        //gets url and adds the $id
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$id;

        //uses the j7mbo twitter API to get a json response
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();


        //decodes json output and puts each status into an array of statuses, returning the status data
        $json_output = json_decode($response, true);

        $statuses = array();

        foreach ($json_output as $status )
        {
            $statuses[] = $status;
        }

        return $statuses;
    }

}