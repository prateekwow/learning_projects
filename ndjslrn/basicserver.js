const http = require('http');
const data = require('./data');
// http.createServer((req,res)=>{
//     res.write('hii');
//     res.end();
// }).listen(2000);

const testfunc = (req,res)=>{
    res.write('<h1>hii testing3</h1>');
    res.end();
}

http.createServer(testfunc).listen(1300);