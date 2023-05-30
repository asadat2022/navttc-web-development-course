// console.log('external');


// var $number_x = 1;
// var $number_y = 2;
// var $number_z;
// $number_z = $number_x % $number_y;
// console.log($number_z);

// x = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. "Et debitis magnam quis quos" aperiam, praesentium voluptates velit suscipit excepturi, fuga dicta error tenetur eveniet odit quod beatae, veniam autem placeat.'
// console.log(x);



// var $number_x = 2;
// var $number_y = "3";
// var $number_z;
// $number_z = $number_x <= $number_y;
// console.log($number_z);



// var $number_w = 2;
// var $number_x = 2;
// var $number_y = 3;
// var $number_z = 3;
// console.log(!($number_w == $number_y));
// console.log(!(($number_w == $number_x) && ($number_y == $number_z) && true));

// console.log(($number_w == $number_z) || ($number_y == $number_x) || true);

var $number_w = 2;
var $number_x = 2;
var $number_y = 2;
var $number_z = 3;

if (($number_w == $number_x)){
    if (($number_y == $number_x)) {
        console.log("w & x & y Are equal");
    }else{
        console.log("w & x Are equal");
    }
}
else if (($number_y == $number_x)){
        console.log("y & x Are equal");
    }
    else{
        console.log("not equal");
    }

