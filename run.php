<?php
/**
 * what we did today? 08/01/2023
 * 
 * Make php xdebug configed and working in vs code, both in current open script and listen for xdebug.
 * The vscode debug can also work as a script execute for any single php files.
 * 
 * Secondly, the we have php 7.4 running in windows cmd, just type 'php run.php', it can run.
 * 
 * Or if you want to run interactive mode of php, type 'php -a'.
 */


 /**
  * test string method
  */

//   $string = 'as a net';
//   $count = 0;
//   for($i=0;$i<strlen($string);$i++){
//     $count++;
//   }
//   print_r($count);


/**
 * test regular expression
 */

//  $string = 'peter.yuan255@163.com';
//  if(preg_match("/b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/b",$string)){
//     print_r("correct email");
//  }

//  if(filter_var($string, FILTER_VALIDATE_EMAIL)) {
//     print_r("good email");
//   }



// Has minimum 8 characters in length. Adjust it by modifying
// {8,}
// At least one uppercase English letter. You can remove this condition by removing
// (?=.*?[A-Z])
// At least one lowercase English letter.  You can remove this condition by removing
// (?=.*?[a-z])
// At least one digit. You can remove this condition by removing
// (?=.*?[0-9])
// At least one special character,  You can remove this condition by removing
// (?=.*?[#?!@$%^&*-])

// "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"



// $password = "9P0iW%a4";
// $password = "121u22112";
// if(preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$password)){
//     print_r("good password");
// }


// $t = date('Y-m-d H:i:s');
// print_r($t);

/**
 * split array
 */

//  $d = Array ( "firstname" => "peter",
//                "lastname" => 'yuan',
//                 "id" => 10 );
//  $d1 = $d["id"];
//  $d2 = Array('firstname'=>$d["firstname"],"lastname"=> $d['lastname']);

//  print_r($d1);
//  print_r($d2);





/**
 * * just the second way to do session in CIframework
 */
//     $this->load->library('session');
//     $newdata = array(
//         'user_id'  => $userData[0]['id'],
//         'username'     => $userData[0]['username']
// );
// $this->session->set_userdata($newdata);



/**
 * php create timestamp
 */

//  $d = date('Y-m-d H:i:s');
//  var_dump($d);

/**
 * calculation in ulr
 */

//  $offset=1;

//  $url = 'index.php/flashcard/onecardview/'.strval($offset+1);

//  echo $url;


/**
 * reminder
 */

//  $d = 1%5;
//  echo $d;


/**
 * array push
 */

 $data = array(
  'id'=>2,
  'definition'=>'apple'
 );

 $fin = array_merge($data,array("user_id"=>3));
 print_r($fin);



