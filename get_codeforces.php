<?php

$ch=curl_init();
$url="https://codeforces.com/api/contest.standings?contestId=567&from=1&count=1&showUnofficial=true";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($ch);
if($e=curl_error($ch))
{
    echo $e;
}
else
{
    $dec=json_decode($resp);
    foreach($dec as $key => $val){
         echo $key.':'.print_r($val, true).'<br />';
    }
    
}
curl_close($ch);



?>