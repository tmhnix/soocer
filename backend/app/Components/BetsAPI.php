<?php
namespace App\Components;

class BetsAPI {


    public function doPost($jwt, $url, $fields)
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        $fields_string = http_build_query($fields);

        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Accept: application/vnd.englishcentral-v2+json,application/json;q=0.9,*/*;q=0.8",
            "Content-Type: application/x-www-form-urlencoded",
            "authorization: $jwt",
            "Content-Length: ". strlen($fields_string),
        ]);

        $responseText = curl_exec($ch);
        curl_close ($ch);

        return json_decode($responseText);
    }

    public static function doGet($url)
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

        $responseText = curl_exec($ch);
        curl_close ($ch);
        return json_decode($responseText, true);

    }

    public function doDelete($jwt, $url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Accept: application/vnd.englishcentral-v1+json,application/json;q=0.9,*/*;q=0.8",
            "Content-Type: application/x-www-form-urlencoded",
            "authorization: $jwt",
        ]);

        $responseText = curl_exec($ch);
        return json_decode($responseText);
    }

    public static function getLeague($page = 1) {
        return self::doGet("https://api.betsapi.com/v1/league?token=3869-hDrKmu1jsNQ3TC&sport_id=1&page=$page");
    }

    public static function getListPlay($cc = 'vn') {
        return self::doGet('https://api.betsapi.com/v1/events/inplay?sport_id=1&token=3869-hDrKmu1jsNQ3TC&limit=10');
    }

    public static function getOdds($event, $since_time) {
        return self::doGet("https://api.betsapi.com/v1/event/odds?token=3869-hDrKmu1jsNQ3TC&event_id=$event&since_time=$since_time");
    }
}