let text = document.getElementById('text');

// console.log(text.innerText);

// text.innerText = "TEST"

// console.log(text.innerHTML);

// let table = text.innerHTML
// text.innerHTML = table + '<h1>Hello</h1>'
text.innerHTML = '';
const table = (x) => {
    let tablePrint = '';
    for (let index = 1; index <= 10; index++) {
        tablePrint = tablePrint + (x + " X " + index + " = " + x * index) + "<br>";
    }
    text.innerHTML = text.innerHTML + tablePrint +"<br>";
}

table(2)
table(3)
table(5)