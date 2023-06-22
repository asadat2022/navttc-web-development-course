document.getElementById("heading").innerText = "DOM First";





let elements = document.getElementsByTagName("p");
console.log(elements);
for (let index = 0; index < elements.length; index++) {
    const element = elements[index];
    element.innerText ="P" + (index+1);
}


let elemClass = document.getElementsByClassName('info');

for (let index = 0; index < elemClass.length; index++) {
    const element = elemClass[index];
    element.innerHTML ="Class <br> Class";
}
// elements.forEach(element => {
// });