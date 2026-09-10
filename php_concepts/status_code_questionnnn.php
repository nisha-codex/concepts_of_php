<?php
    $status_code = [
        100 =>"informational",
        200 => "ok",
        201 => "created",
        204 => "no content",
        301 => "moved permanently",
        302 => "found",
        304 => "not modified",
        400 => "bad request",
        401 => "unauthorized",
        403 => "forbidden",
        404 => "not found",
        405 => "method not allowed",
        422 => "unprocessable content",
        429 => "too many request",
        500 => "internal server error",
        502 => "bad gateway",
        503 => "service unavailable",
        504 => "gateway timeout"

    ];

    $codes_to_check = [101,100,200,202,204,205,300,301,302,303,304,400,402,403,404,408,422,500,502,503,505,504,506];
    $length = count($codes_to_check);
    echo "\n\nLength of the array : $length \n";
    echo "---------------------------------------------------\n";

    $ok = 0;
    $redirection = 0;
    $client_error = 0;
    $server_error = 0;
    $unknown = 0;

    // printing all the status code...
    echo "\n\nSTATUS CODES :-\n";
    echo "---------------------------------------------------\n";
    // foreach($status_code as $key => $value){
    //     echo "$key => $value\n";
    // }

    //count the no of elements exists in each codes
    foreach($codes_to_check as $key){
        if(array_key_exists($key,$status_code)){
            if($key>=200 && $key<300){
                $ok++; 
            }
            elseif($key>=300 && $key<400){
                $redirection++; 
            }
            elseif($key>=400 && $key<500){
                $client_error++; 
            }
            elseif($key>=500 && $key<600){
                $server_error++; 
            }
            else{
                $unknown++;
            }
        }
        
    }

    echo "\n\n";
    $response =[
        "ok" => $ok,
        "redirection" => $redirection,
        "Client Error"=> $client_error,
        "Server Error" => $server_error,
        "Unknown" => $unknown
    ];

    print_r($response);

?>


