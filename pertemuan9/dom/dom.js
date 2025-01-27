let title = document.getElementById('title');
let firstParagraph = document.querySelector('p');

let header = document.getElementsByClassName('header-1');



let p = document.querySelector('p');
let mylist = document.getElementById("my-list");

//

// Example of event handling
let btn = document.getElementById('btn-changes');
btn.addEventListener('click',  () => {
    
title.innerHTML = 'dom manipulation';

header[0].style.color="blue"
header[0].style.fontSize="50px"
header[0].style.backgroundColor="yellow"

p.innerHTML= "new paragraph content"

//
let ul =document.createElement("ul");
let li =document.createElement("li");
let li2 =document.createElement("li");
li.textContent="Item 1";
li2.textContent="item 2";
ul.appendChild(li);
ul.appendChild(li2);
mylist.appendChild(ul);


});