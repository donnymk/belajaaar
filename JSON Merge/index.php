<?php
//tipe data nya json yah, klo mau xml silahkan ubah sendiri
header('Content-Type: application/json');

//First JSON array
$array1 = '{ "id" : "1", "username" : "James", "access_level" : "1" }';

//Second JSON array
$array2 = '{ "id" : "2", "username" : "Micheal", "access_level" : "2" }';


// Declare a PHP array variable.
$users = array();

// json_decode() is used to decode JSON objects and converts it into a Php Variable
// We are using second parameter (true) which is optional
// so as to convert it to array and not object
$users[]=json_decode($array1, true);
$users[]=json_decode($array2, true);

//We will use json_encode function to convert the PHP array ( $users ) into JSON value
// store the result into merge_user variable $merge_user = json_encode( $users );
// store the result into merge_user variable
$merge_user = json_encode($users);


//And that is all.
// To see the output print_r( $merge_user );
// To see the output
print_r( $merge_user );