function proses1(){
    return new Promise((resolve, reject)=>{
    setTimeout(() => {
       resolve(`proses dengan data1 `)
    }, 1000);
});
}

function proses2(proses1){
    return new Promise((resolve, reject)=>{
    setTimeout(() => {
       resolve(`proses dengan data2${proses1}`)
    }, 1000);
});
}
function proses3(proses2){
    return new Promise((resolve, reject)=>{
    setTimeout(() => {
       resolve(`proses dengan data 3${proses2}`)
    }, 1000);
});
}


proses1().then((proses1)=>{
    return proses2(proses1)
}).then((proses2)=>{
    return proses3(proses2)
}).then((proses3)=>{
    console.log(`final: ${proses3}`);

}).catch((error) => {
    console.log(`error: ${error}`);
});
