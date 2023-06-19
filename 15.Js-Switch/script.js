
// var key = "2";

// switch (parseInt(key)) {
//     case 1:
//         console.log("Jan");
//         // break;
//     case 2:
//         console.log("Feb");
//         // break;
//     case 3:
//         console.log("Mar");
//         // break;
//     case 4:
//         console.log("Apr");
//         // break;

//     default:
//         console.log("Not in this Example");
//         break;
// }

// for (var index = 0; index < 11;index++) {
//     console.log(index);
// }

// var table = 2;
// for (var index = 1; index < 11;index++) {
//     console.log(table + " X " + index +" = "+ table * index);
// }

// *
// **
// ***
// ****
// *****

// Solution 1

// for (let i = 1; i < 6; i++) {
//     var stars = "";
//     for (let j = 1; j <= i; j++) {
//         stars = stars + "*"
//     }
//     console.log(stars);
//     document.write(stars);
//     document.write("<br>");
// }


// Solution 2

// var stars = "";
// for (let i = 1; i < 6; i++) {
//     for (let j = 1; j <= i; j++) {
//         stars = stars + "*"
//     }
//     stars = stars + "\n";
// }
// console.log(stars);

// Even Odd In Loop Between 1 to 50

// for (let i = 1; i < 50; i++) {
//     if (i%2 === 0) {
//         console.log(i + " is Even");
//     }else{
//         console.log(i + " is Odd");
//     } 
// }


// Prime Numbers

// for (let num = 1; num < 100; num++) {
//     var count = 0;
//     for (var index = 1; index <= num; index++) {
//         if (num % index === 0) {
//             count++;
//         }
//     }
//     if (count < 3) {
//         console.log(num + " Prime number");
//     }
// }
