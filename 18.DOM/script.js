// document.getElementById("heading").innerText = "DOM First";





// let elements = document.getElementsByTagName("p");
// console.log(elements);
// for (let index = 0; index < elements.length; index++) {
//     const element = elements[index];
//     element.innerText ="P" + (index+1);
// }


// let elemClass = document.getElementsByClassName('info');

// for (let index = 0; index < elemClass.length; index++) {
//     const element = elemClass[index];
//     element.innerHTML ="Class <br> Class";
// }

var arrObj = [
    {
        name: {
            first: "Madi",
            last: "Ali",
        },
        phoneNo: "0311-1111111",
        age: 20,
        RollNo: 30,
        arr: [2, 4, 7],
    },{
        name: {
            first: "Madi",
            last: "Ali",
        },
        phoneNo: "0311-1111111",
        age: 20,
        RollNo: 30,
        arr: [2, 4, 7],
    },{
        name: {
            first: "Madi",
            last: "Ali",
        },
        phoneNo: "0311-1111111",
        age: 20,
        RollNo: 30,
        arr: [2, 4, 7],
    }
];



var table = document.getElementById('table');
let data = "<tr>"+
"<th>Age</th>"+
"<th>Name</th>"+
"<th>Roll No</th>"+
"<th>Phone</th></tr>";

arrObj.forEach((e)=>{
    data = data + "<tr>"+
"<td>"+e.age+"</td>"+
"<td>"+e.name.first+"</td>"+
"<td>"+e.RollNo+"</td>"+
"<td>"+e.phoneNo+"</td>"+
"</tr>";
})

console.log(data);
table.innerHTML = data;
