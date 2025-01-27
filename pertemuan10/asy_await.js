async function proses1() {
    try {
    console.log("menagambil data")
    const hasil = await new Promise((resolve)=>{
        setTimeout(()=>{
        resolve("data berhasil di ambil"),2000});
    })
    console.log(hasil);
    } catch (error) {
    console.error(error);
    }
    }
    
    proses1();