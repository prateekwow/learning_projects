const fs = require('fs');
// const inp = process.argv;
// console.log(inp[2]);
const path = require('path');
// const dirpath = path.join(__dirname);
const dirpath = path.join(__dirname,'files');
// for(i=0;i<5;i++)
// {
//     fs.writeFileSync(`${dirpath}/file${i+1}.txt`,'testing');
// }
console.log(dirpath);
fs.readdir(dirpath,(error,res)=>{
    res.forEach((i)=>{
        console.log(i);
    });
});