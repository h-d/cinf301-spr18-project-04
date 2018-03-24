<?php
namespace App\Models;
//Hudson DeVoe (kind of)
//Users class uses given id var for j7mbo's twitter api to return tweets for a specific hashtag


/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

class Hashtags
{
    /**
     * Access only a single "record" of data for the given id (or index)
     *
     * @param int $id
     * @return number[]|string[]
     */
    public static function find($id)
    {
        //gets url and adds the $id
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=%23' . $id . '-filter:retweets';

        //uses the j7mbo twitter API to get a json response
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        //decodes json output and puts each status into an array of statuses, returning the status data
        $json_output = json_decode($response, true);

        $hashtags = array();

        foreach ($json_output as $hashtag )
        {
            if (is_array($hashtag)) {
                foreach ($hashtag as $unique_hashtag) {
                    $hashtags[] = $unique_hashtag;
                }
            }
        }
        return $hashtags;
    }

}