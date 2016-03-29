<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





function curlRequest($post){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    ///set the trb client site for post
    curl_setopt($ch, CURLOPT_URL, "https://www.wizbang.org.uk/fix/api/getListOfProjectsForEachCLient");
   // curl_setopt($ch, CURLOPT_URL, "https://www.wizbang.org.uk/fix/api/getListOfProjectsForEachCLient");
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post)); 
    $response = curl_exec($ch);

    $responseInfo  = curl_getinfo($ch);
    
    curl_close($ch);
    $response1 = $responseInfo['http_code'];
       // echo "<pre>";
       // print_r($responseInfo);
          // print_r($response);
        //   print_r(curl_error($ch));
        //   print_r($post);
       // echo "</pre>";
    return $response;
}


?>