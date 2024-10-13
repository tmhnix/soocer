<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Redis as Redis;
class RedisCache {

    const SETTING_MAINTAIN = 'SETTING_MAINTAIN';
    const CACHE_INPLAY = 'CACHE_INPLAY';
    const COOKIE_LIVE = 'COOKIE_LIVE';

    /**
     * get driver from cache by id
     *
     * @param integer $id
     * @return array
     */
    public static function getMaintainMode() {
         $cacheKey = self::SETTING_MAINTAIN;

        $cacheData = Redis::get($cacheKey);
        if ($cacheData) {
             return json_decode($cacheData, true)['value'];
        }
        return false;
    }

    public static function getInplay($version, $type, $key) {
        $cacheKey = self::CACHE_INPLAY.$version.'_'.$type.'_'.$key;

        $cacheData = Redis::get($cacheKey);
        if ($cacheData) {
            return json_decode($cacheData, true);
        }

        return false;
    }

    public static function setInplay($version, $type, $key, $value) {
        $cacheKey = self::CACHE_INPLAY.$version.'_'.$type.'_'.$key;
        Redis::set($cacheKey, json_encode($value), 'EX', 10);
    }

    /**
     * clean current redis DB by using FLUSHDB command
     */
    public static function flush() {
        Redis::flushDb();
    }

    public static function getCookieLive() {
        $liveKey = self::COOKIE_LIVE;
        return Redis::get($liveKey);
    }

}
