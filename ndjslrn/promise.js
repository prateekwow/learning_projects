let a = 20;
let b = 0;

// setTimeout(()=>{
//     b= 30;
// },2000);

let waitData = new Promise((resolve,reject)=>{
    setTimeout(()=>{
        b= 30;
        resolve(b);
    },2000);
});

waitData.then((data)=>{
    console.log(a+data)
});

console.log(a+b)