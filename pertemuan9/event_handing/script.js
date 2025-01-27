let btnClink = document.getElementById("btn-clik");
let btnmouse = document.getElementById("btn-mouse");
let dclik = document.getElementById("dclik");
        
// normal klik
btnClink.addEventListener("click", () =>{
alert("tombol sudah diklik")
console.log("event type:", event.type);
console.log("event target:", event.target);

});

// tanpa di klik
btnmouse.addEventListener("mouseover", ()=> {
    alert("mouse kursor sudah di klik")
    console.log("event type:", event.type);
    console.log("event target:", event.target);
});


// double clik
dclik.addEventListener("dblclick", ()=> {
    document.body.style.backgroundColor = "blue";
    console.log("event type:", event.type);
    console.log("event target:", event.target);
});