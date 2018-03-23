<?php
namespace App\Models;



/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

class Tweets
{

    /*public function complete()
    {

        $data = array(
            array(
                'id' => 1,
                'data' => 'Statuses',
                'url' => 'https://api.twitter.com/1.1/statuses/user_timeline.json',
                'get_field' => '?screen_name=ClickHole',
                'request_method' => 'GET'
            ),
            array(
                'id' => 2,
                'data' => 'Followers',
                'url' => 'https://api.twitter.com/1.1/followers/user_timeline.json',
                'get_field' => '?screen_name=ClickHole',
                'request_method' => 'GET'
            ),
            array(
                'id' => 3,
                'data' => 'Mentions',
                'url' => 'https://api.twitter.com/1.1/statuses/mentions_timeline.json',
                'get_field' => '?screen_name=ClickHole',
                'request_method' => 'GET'
            )
        );

        return $data;
    }


    public function get_followers_by_name()
    {
        $url = 'https://api.twitter.com/1.1/followers/user_timeline.json';
        $getfield = '?screen_name=ClickHole';
        $requestMethod = 'GET';
        $response = $_SESSION['twitter']->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        return $response;
    }*/

    /**
     * Return all of the stored data
     *
     * @return number[][]|string[][]
     */
    public static function complete()
    {
        $algorithms = array(
            array(
                'id' => 1,
                'algorithm' => 'Bubble Sort',
                'ranking' => 999
            ),
            array(
                'id' => 2,
                'algorithm' => 'Insertion Sort',
                'ranking' => 5
            ),
            array(
                'id' => 3,
                'algorithm' => 'Merge Sort',
                'ranking' => 2
            )
        );

        return $algorithms;
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
                'tweets' => 'Bubble Sort',
                'ranking' => 999
            ),
            array(
                'id' => 2,
                'tweets' => 'Insertion Sort',
                'ranking' => 5
            ),
            array(
                'id' => 3,
                'tweets' => 'Merge Sort',
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