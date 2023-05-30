// var arr = [20, "test", true, { id: 10, name: "test", available: true }, [1, 2, 3]]

// console.log(arr[3]['name']);
// console.log(arr[3].name);

// for (let index = 0; index < arr.length; index++) {
//     const element = arr[index];
//     console.log(element);

// }
// const arrayLog = (val)=>{
// console.log(val);
// }

// arr.forEach((val) => {
//     console.log(val);
// });
var row = document.getElementById('row');
let data = "";

for (let index = 0; index < 10; index++) {
    data = data +
        '<div class="col-3">' +
        '<div class="card">' +
        '<div class="card-body">' +
        '<h5 class="card-title">Card title</h5>' +
        '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' + 's content.</p>' +
        '<a href="#" class="btn btn-primary">Go somewhere</a>' +
        '</div>' +
        '</div>' +
        '</div>'

}
row.innerHTML = data;


var test = document.getElementsByTagName("td");
for (let index = 0; index < test.length; index++) {
    const element = test[index];
}



// users.forEach((val)=>{
//     console.log(val);
// })