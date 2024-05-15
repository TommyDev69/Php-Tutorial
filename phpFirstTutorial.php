<?php
 define('NAME', 'Tommy'); // if we wanna define it as a constant
 $name = 'sunday';
// $name = 'Sunnevian'; //if we are declaring a dynamic variable
// $stringOne = 'My Email Address is :' ;
// $stringTwo = 'sunnevian4life@gmail.com ' ;
// echo $stringOne.$stringTwo; // concatenating two variable using concatenation is using fullStop(.)
// echo "Hey my name is $name \"WOOOOOOHOOO!\"";
// echo 'Hey my name is $name "WAAAAAAHAAAAAA!"';

// // echo $name[1]; //to check index
//  echo strlen(NAME);
//  echo strlen($name);
//  echo strtoupper(NAME);
//  echo strtolower($name);
//  echo str_replace('vian', 'zilo', $name)


//  2 datatype in php  INTEGER AND FLOAT

$rad = 25;
define('pi', 3.142);
// $answer = pi * $rad**2;
// echo $answer;

// echo floor(pi);
// echo ceil(pi);
// echo pi()

// indexed ARRAY

// $peopleOne = ['tommy', 'shaun', 'crystal']; 
// // $peopleTwo = array('kem', 'Chulo'); 
// $peopleTwo = ['Arise', 'jobber']; 


// // echo $peopleOne[1];
// // to print array in php we use print_r
// // print_r($peopleOne)

// // to add an element to an array

// // $peopleOne [] = ['Jesus', 'is', 'Lord'];
// // print_r($peopleOne)

// // to push in the array
// array_push($peopleOne, 'Olatunde');
// // print_r($peopleOne);
// // echo count($peopleOne)

// // to merge two{2} ARRAY TOGETHER

// $newer = array_merge($peopleOne, $peopleTwo);
// // print_r($newer);

// // associative array are key value pair pair
// $ninja = ['shaun' => 70, 'color' => 'Blue', 'gender' => 'Male'];
// // echo $ninja['shaun'];
// // print_r($ninja)

// for($i = 0; $i < count($newer); $i++){
//    echo $newer[$i] . '<br />';
// }
// foreach ($ninja as $key => $val){
//    echo "key : $key, values : $val. <br />";
// }

// $product = [
//    ['name' => 'Shiny star', 'price' => 20],
//    ['name' => 'green shell', 'price' => 10],
//    ['name' => 'red shell', 'price' => 22],
//    ['name' => 'gold coin', 'price' => 40],
//    ['name' => 'lightning bolt', 'price' => 30],
//    ['name' => 'Banana skin', 'price' => 5]

// ];

// // foreach ($product as $endProduct) {
// //    if ($endProduct['price'] < 10) {
// //       echo $endProduct['price'];
// //       # code...
// //    }
// // }

// // for ($i=0; $i < count($product) ; $i++) { 
// //    if ($product[$i]['price'] > 10 &&  $product[$i]['price'] < 40) {
// //       echo $product[$i]['price'] . ',' ;
// //       # code...
// //    }
// // }

// for ($i=0; $i < count($product) ; $i++) { 
//    if ($product[$i]['name'] == 'gold coin' ) {
//       break;
//    }
//    echo $product[$i]['name']  ;

//    if ($product[$i]['price'] < 15 ) {
//       continue;
      
//    }
   
//    echo $product[$i]['name'] . '-', ' <br />'  ;
// }
// // foreach ($product as $item) {
// //   echo $item['name'], '-', $item['price'] . '<br />';
// // }

// // for ($i=0; $i < count($product); $i++) { 
// //    echo $product[$i]['name']. '<br />';
// // }
// // $y = 0;
// // while ($y < count($product)) {
  
// //    echo $product[$y]['name']. '<br />';
// //    $y++;
// // }

// function sayMyName($Name){
//    echo "my full name is {$Name} '<br />'";
// }
//  sayMyName('Ajagbe Adetomiwa makanjuola') ;

// //  function sayMyNameVar($Name=>'sunday'){
// //    echo "my Surname name is $Name";
// // }
// //  sayMyNameVar('Ajagbe');

//  function setProductName1($Name='sunday' ,  $price = 89){
//    echo "my full name is {$Name}, and the price of good you bought from us is ${price} '<br />'";
// }
// setProductName1();

// function setProductName($product){
//    echo "my full name is {$product['name']} <";
// }
// setProductName(['name'=>'Milo']);


// function ProductName($product){
//    return "the Product name is {$product['names']} and the price of the milo is $ {$product['priceList']}";
// }
// $result = ProductName(['names'=>'Milo', 'priceList' => 400]);

// echo $result;

function localVariable($price){
   $a =$price;
   echo $a. '<br />' ;
}
localVariable( 20);

$Gender = 'male';
// to use global variable and local variable andm pass it with referemce of &
function localVariableGender(&$Gender){
   $Gender = 'Female';
   echo $Gender . '<br />';
}

localVariableGender($Gender);

define('Surname', 'OmoTara Tommy');
function globalScopeVariable(){
   global $Surname;
   $Surname = 'Sunnvianer';
   echo "Hello $Surname";

}
globalScopeVariable();




 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP Files</title>
 </head>
 <body>
    <h1><?php echo 'my name is  tomiwa, am learning backend'; ?></h1>
    <h2><?php echo NAME; ?></h2> <!-- constant declaration -->
    <h3><?php echo $name ?></h3>  <!-- dynamic declaration -->
 <div>
   
   
 </div>
   </body>
 </html>