<?php
namespace App\Models;



/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

class Followers
{


    public static function complete()
    {
        $url = 'https://api.twitter.com/1.1/followers/list.json';
        $getfield = '?screen_name=Twitter&skip_status=true';
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

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

    /**
     * Access only a single "record" of data for the given id (or index)
     *
     * @param int $id
     * @return number[]|string[]
     */
    public static function find($id)
    {
        $algorithms = array(
            array(
                'id' => 1,
                'hashtags' => 'Bubble Sort',
                'ranking' => 999
            ),
            array(
                'id' => 2,
                'hashtags' => 'Insertion Sort',
                'ranking' => 5
            ),
            array(
                'id' => 3,
                'hashtags' => 'Merge Sort',
                'ranking' => 2
            )
        );

        foreach ($algorithms as $algorithm) {
            if ($algorithm['id'] == $id) {
                return $algorithm;
            }
        }

        return $algorithms[0];
    }

}