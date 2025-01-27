// proses pertama
function fetchData(callback){

    setTimeout(()=> {
        const data = 'ambil data berhasil ';
        callback(data);
        }, 1000);
}

fetchData(function (data) {
    console.log(data);
    });
    
    // proses2
    console.log("proses2")
    // proses3
    console.log("proses3")