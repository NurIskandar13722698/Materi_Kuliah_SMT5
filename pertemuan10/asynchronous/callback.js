function proses1(callback1) {
    setTimeout(() => {
        console.log("proses data 1..");
        callback1("data1");
    }, 1000);
}

function proses2(data1, callback2) {
    setTimeout(() => {
        console.log(`proses data 2.., ${data1}`); // Perbaiki string template
        callback2("data2");
    }, 1000);
}

function proses3(data2, callback3) {
    setTimeout(() => {
        console.log(`proses data 3.. ${data2}`); // Perbaiki string template
        callback3("data3");
    }, 1000);
}

proses1((data1) => {
    proses2(data1, (data2) => {
        proses3(data2, (data3) => {
            console.log(`final data: ${data3}`); // Perbaiki string template
        });
    });
});
