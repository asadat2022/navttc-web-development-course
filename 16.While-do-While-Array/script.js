// var i= 0;
// while (i < 10) {
//     console.log(i);
//     i++;
// }
// var i= 0;
// do {
//     console.log(i);
//     i++;
// } while (i<10);











// do {
    
//     var check = false;
//     let i = 0;
//     // console.log(check);
//     // console.log(i);
//     // i++;
//     // check=true;

// } while (check && i<10);

// console.log(check);
// console.log(i);

// // while (check) {
// //     console.log(i);
// //     i++;
// //     check=true;
// // }

// // do {
// //     if (i<10) {
// //         console.log(i);
// //         i++;
// //     }else{
// //         check=false;
// //     }
// // } while (check);

// // while (i < 10) {
// //     console.log(i);
// //     i++;
// // }



var arr = [0,"check",false];
arr.push([4,5,6]);
const arra = arr[3];
console.log(arra[2]);

arr[2] = "test";
// console.log(typeof arr);

console.log(arr.indexOf("check"));

// for (let index = 0; index < arr.length; index++) {
//     const element = arr[index];
//     console.log(element);
    
// }

arr.forEach((value) => console.log(value));