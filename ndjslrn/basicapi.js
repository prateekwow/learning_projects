const http = require('http');
const data = require('./data');
// http.createServer((req,res)=>{
//     res.write('hii');
//     res.end();
// }).listen(2000);

const testfunc = (req,res)=>{
    res.writeHead(200,{'Content-Type': 'Application/json'});
    res.write(JSON.stringify(data));
    res.end();
}

http.createServer(testfunc).listen(1400);