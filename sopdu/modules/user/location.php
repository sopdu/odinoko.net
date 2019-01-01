<?php
class userLocation {
    function getCity(){
        $ch = curl_init('http://ipgeobase.ru:7020/geo?ip=' .$_SERVER["REMOTE_ADDR"]);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $string = curl_exec($ch);
        # $encode = mb_detect_encoding($string);
        $sit = iconv('windows-1251', 'UTF-8', $string);
        $params = array('inetnum', 'country', 'city', 'region', 'district', 'lat', 'lng');
        $data = $out = array();
        foreach ($params as $param) {
            if (preg_match('#<' . $param . '>(.*)</' . $param . '>#is', $sit, $out)) {
                $data[$param] = trim($out[1]);
            }
        }
        return $data;
    }
    function main(){
        $data = self::getCity();
        return $data;
    }
}
?>
