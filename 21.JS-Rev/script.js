// var x=1;
// var y=2;
// var z = x+y;


// console.log(x%y);


// var name = "Farhan";
// var lastName = "Khan";

// var fullName = name+
// " " +
// lastName;


// console.log(fullName);


// var test = true;
// var test2 = false;

// if (!(test2 || test)&& true) {
//     console.log("if: Is True");
// }else if(test2){
//     console.log("else if: Is True");
// }else{
//     console.log("Is False");
// }



// var key = "4";

// console.log(typeof key);
// console.log(typeof parseInt(key));

// switch (parseInt(key)) {
//     case 1:
//         console.log("Jan");
//         break;
//     case 2:
//         console.log("Feb");
//         break;
//     case 3:
//         console.log("Mar");
//         break;
//     case 4:
//         console.log("Apr");
//         break;
//     default:
//         console.log("Not in this Example");
//         break;
// }



// console.log(1);
// console.log(2);
// console.log(3);
// console.log(4);
// console.log(5);
// console.log(6);
// console.log(7);

// var diamond = "";
// for (let x = 1; x < 11; x++) {
//     var line = "";
//     for (let y = 0; y < (11-x)/2; y++) {
//         line +=" ";
//     }
//     for (let y = 1; y < x; y++) {
//         line +="+";
//     }
//     diamond += line + "\n";
// }
// console.log(diamond);

// var x = 1;
// while (x < 10) {
//     console.log(x);
//     x += 2;
// }


// do {
//     console.log(x);
//     x += 2;
// } while (x < 15) {

// }


// var a = [];
// console.log(a.length);
// a.push("true");
// a.push(true);
// a.push([1,2,3]);
// a.pop();

// a.shift();
// a.unshift("Test");
// a = [11,12,13,14,15,16,17];
// a[a.indexOf(15)] = 20;  

// a.splice(3,0,30)


// console.log(a);

// var test = "first name";

// var obj = {
// key:"value",
// id: 2,
// // Name: {
// //     first:"",
// //     last:"",
// // },
// 'first name': "test",
// };

// console.log(obj[test]);


// var opt = '<option value="">Select Age</option>';;

// for (let index = 18; index <= 60; index++) {
//     opt = opt + '<option value="">'+ index+'</option>';
// }
// var select = document.getElementById('age');
// select.innerHTML = opt;



// var test = [1,2,3];

// for (let index = 0; index < test.length; index++) {
//     const element = test[index];
//     console.log(element);
// }

// test.forEach(element => {
//     console.log(element);
// });

// function sum(x,y) {
//     // console.log(x,y);
//     return x+y;
// }

// const sum = (x,y)=>{
//     return x+y;
// }

// console.log(sum(3,6));

// console.log(sum(5,6));



// function handleClick() {
//     console.log("Button Clicked");
//     // document.getElementById('div1').innerText = "lorem";
//     document.getElementById('div1').innerHTML = "<b>lorem</b>";
// }


// $('#btn-click').click(() => {
//     console.log("Button Clicked 2");
//     // $('div2').text("text");
//     $('#div2').html("<b>lorem</b>");

//     var te = $('body').text();
//     console.log(te);
// });

// $('.btn-success').click(()=>{
//     $('#div1').hide(2000,()=>{
//         console.log("Hide");
//     });
// })

// $('#btn-click').click(()=>{
//     $('#div1').show(1000);
// })

// $('.btn-success').click(()=>{
//     $('#div1').toggle(1000);
// })


// $('.btn-success').click(()=>{
//     $('#div1').fadeIn(2000);
// })

// $('#btn-click').click(()=>{
//     $('#div1').fadeOut(1000);
// })

$('.btn-success').click(()=>{
    $('#div1').fadeToggle(1000);
})
