 function fetchData() {
    return new Promise((resolve, reject) =>{
        setTimeout(() =>{
            const data = "apa";
        if(data){
        resolve(data);
        }else{
            reject("data tidak ada")

        }
        }, 1000);
    });
}
    // Using async/await
     fetchData(). then((data)=>{

            console.log(data);
         }). catch ((error)=>{
            console.error(error);
        });

