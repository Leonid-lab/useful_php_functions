<?php

    function collect_file($url){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        return($result);
    }

    function write_to_file($text,$new_filename){
        $fp = fopen($new_filename, 'w');
        fwrite($fp, $text);
        fclose($fp);
    }


    // start loop here

    $new_file_name = "test.xml";
    $url = "http://producthelp.sdl.com/sdl%20trados%20studio/client_en/sample.xml";

    $temp_file_contents = collect_file($url);
    write_to_file($temp_file_contents,$new_file_name)

    // end loop here
?>