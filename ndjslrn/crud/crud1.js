const fs = require('fs');
const path = require('path');
const dirpath = path.join(__dirname,'crud');
// fs.writeFileSync(`${dirpath}/crud.txt`,'Crud in nodejs');
fs.readFile(`${dirpath}/crud.txt`,'utf8',(error,item)=>{
    console.log(item);
});