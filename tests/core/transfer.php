<?php 
/**
 * [do_Post CURL模拟post请求]
 * @param  [string] $url         [请求路径]
 * @param  [array] $fields      [请求参数] array( 'data' => '111' ); 
 * @param  array  $extraheader [header头部的重写]
 * @return [type]              [返回的数据]
 */
function do_Post($url, $fields, $extraheader = array()){  
    $fields = http_build_query($fields);    //将数据进行URL-encode转换
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_POST, true);  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields );  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $extraheader);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回  
    $output = curl_exec($ch);  
    curl_close($ch);  
    return json_decode($output);  
}  
 /**
 * [do_Post CURL模拟get请求]
 * @param  [string] $url         [请求路径]
 * @param  [array] $fields      [请求参数] array( 'data' => '111' ); 
 * @param  array  $extraheader [header头部的重写]
 * @return [type]              [返回的数据]
 */ 
function do_Get($url, $fields,$extraheader = array()){  
    $getString = http_build_query($fields);  //将数据进行URL-encode转换
    $url = $url.'?'.$getString;
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $extraheader);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回:  
    //curl_setopt($ch, CURLOPT_VERBOSE, true);  
    $output = curl_exec($ch) ;  
    curl_close($ch);  
    return json_decode($output);  
}  
/**
 * [do_Post CURL模拟put请求]
 * @param  [string] $url         [请求路径]
 * @param  [array] $fields      [请求参数] array( 'data' => '111' ); 
 * @param  array  $extraheader [header头部的重写]
 * @return [type]              [返回的数据]
 */  
function do_Put($url, $fields, $extraheader = array()){  
    $fields = http_build_query($fields);    //将数据进行URL-encode转换
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url ) ;  
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields );  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $extraheader);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回  
    //curl_setopt($ch, CURLOPT_ENCODING, '');  
    $output = curl_exec($ch);  
    curl_close($ch);  
    return json_decode($output);  
}  
/**
 * [do_Post CURL模拟delete请求]
 * @param  [string] $url         [请求路径]
 * @param  [array] $fields      [请求参数] array( 'data' => '111' ); 
 * @param  array  $extraheader [header头部的重写]
 * @return [type]              [返回的数据]
 */  
function do_Delete($url, $fields, $extraheader = array()){  
    $fields = http_build_query($fields);     //将数据进行URL-encode转换
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url ) ;  
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $extraheader);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回  
    //curl_setopt($ch, CURLOPT_ENCODING, '');  
    $output = curl_exec($ch);  
    curl_close($ch);  
    return json_decode($output);  
}  