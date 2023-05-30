// var obj = {
//     name:{
//         first: "Madi",
//         last: "Ali",
//     },
//     phoneNo: "0311-1111111",
//     age: 20,
//     RollNo: 30,
//     arr: [2,4,7],
// };

// console.log(obj.name.first);


// var arrObj = [
//     {
//         name: {
//             first: "Madi",
//             last: "Ali",
//         },
//         phoneNo: "0311-1111111",
//         age: 20,
//         RollNo: 30,
//         arr: [2, 4, 7],
//     },{
//         name: {
//             first: "Madi",
//             last: "Ali",
//         },
//         phoneNo: "0311-1111111",
//         age: 20,
//         RollNo: 30,
//         arr: [2, 4, 7],
//     },{
//         name: {
//             first: "Madi",
//             last: "Ali",
//         },
//         phoneNo: "0311-1111111",
//         age: 20,
//         RollNo: 30,
//         arr: [2, 4, 7],
//     }
// ];

// console.log(arrObj);

// write(arrObj);


// function write(arg) {
//     console.log(arg);
// }


// const write2 = (arg) => {
//     console.log(arg);

// } 

// write2(arrObj)


const table = (value) => {
    for (var index = 1; index < 11; index++) {
        console.log(value + " X " + index + " = " + value * index);
    }
}

table(2)
table(3)
table(4)


const isEven = (num) => {
    if (num % 2 === 0) {
        return num + " Is Even";
    }
    return num + " Is Odd";
}

for (let index = 1; index < 101; index++) {
document.write(isEven(index));
document.write("<br>");
}