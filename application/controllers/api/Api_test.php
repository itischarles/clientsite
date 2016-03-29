<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api_test
 *
 * @author itischarles
 */
class Api_test extends CI_Controller {
    //put your code here
    
    var  $url ='http://ENTER-PATH/api/client/new';
    var  $key = "cs9a25c11ba50c1f63562d6a50f74bd885";
    
    function __construct() {
	parent::__construct();
    }
    
 
    
    function addnewClient(){
	
	
	$content['API_KEY'] = $this->key;
	$content['clientReference'] = "123";
	$content['clientFirstName'] = "James";
	$content['clientLastName'] = "John";
	$content['clientUsername'] = "charles3@example.co.uk";
	$content['clientIsActve'] = 1;
	$content['clientDateCreated'] = changeDateFormat('now', "Y-m-d");
	$content['addNewClient'] = 1; 
	$content['userReference'] = 'abc';

	$content['clientPassword'] = "password";
	//echo $this->url;
	$response = $this->make_api_request($this->url, $content);
	echo "<pre>";print_r($response);
	$aa= json_decode($response['feedback'], TRUE);
	print_r($aa);
	//echo $aa->response_code;
	
    }
    
    
    
    function make_api_request1($website, $postfields){    
	$ch = curl_init();                                      //init curl
	curl_setopt($ch, CURLOPT_REFERER, $_SERVER['PHP_SELF']);               // page on which the actual post is on
	curl_setopt($ch, CURLOPT_URL, $website);                  // set url to post to
	curl_setopt($ch, CURLOPT_POST, 1);                      // set POST method
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($postfields));      // add POST fields
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$response['feedback']     = curl_exec($ch); // run the whole process
	$response['errorno'] = curl_errno( $ch );
	$response['error']  = curl_error( $ch );
      // echo "<pre>";print_r($response); echo "</pre>";
	curl_close($ch);   
	    return $response['feedback'];
       // return $response;
    }
    
    
    function make_api_request($url, $postfields){    
         $ch = curl_init();                                      //init curl
         curl_setopt($ch, CURLOPT_REFERER, $_SERVER['PHP_SELF']);               // page on which the actual post is on
         curl_setopt($ch, CURLOPT_URL, $url);                  // set url to post to
         curl_setopt($ch, CURLOPT_POST, 1);                      // set POST method
         // we are posting a multi-dimentional array but curl would ONLY post a key value pair.
         //lets preserve out multi-dimentioanl array using http_build_query function
        $postfields = http_build_query($postfields);
    
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($postfields));      // add POST fields
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                   
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

         $response['feedback']     = curl_exec($ch); // run the whole process
         $response['errorno'] = curl_errno( $ch );
         $response['error']  = curl_error( $ch );
         curl_close($ch);   
         //print_r($response);
         return $response;
    } 
    
    
}
