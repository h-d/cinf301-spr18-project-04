<?php
namespace App\Models;
//Hudson DeVoe (kind of)
//Users class uses given id var for j7mbo's twitter api to return followers for a specific user


/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

class Followers
{

    /**
     * Access only a single "record" of data for the given id (or index)
     *
     * @param int $id
     * @return number[]|string[]
     */
    public static function find($id)
    {
        //gets url and adds the $id (+skips status)
        $url = 'https://api.twitter.com/1.1/followers/list.json';
        $getfield = '?screen_name='.$id.'&skip_status=true';


        //uses the j7mbo twitter API to get a json response
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();


        //decodes json output and puts each status into an array of followers, returning the follower data
        $json_output = json_decode($response, true);

        $followers = array();

        foreach ($json_output as $follower )
        {
            if (is_array($follower)) {
                foreach ($follower as $unique_follower) {
                    $followers[] = $unique_follower;
                }
            }
        }
        return $followers;
    }

}