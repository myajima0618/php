<?php


function searchCityTime($city_name) 
{
    require('config/cities.php');

    foreach($cities as $city) {
        if ($city['name'] === $city_name) {
            //現在時刻取得
            $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
            //時刻をフォーマット
            $time = $date_time->format('H:i');
            //フォーマットした時刻を配列に追加
            $city['time'] = $time;
            return $city;
        }
    }
}