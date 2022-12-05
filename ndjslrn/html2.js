const express = require('express');
const path = require('path');
const app = express();
const htmlpath = path.join(__dirname,'public');
app.get('',(req,res)=>{
    res.sendFile(`${htmlpath}/index.html`);
});
app.get('/about',(req,res)=>{
    res.sendFile(`${htmlpath}/about.html`);
});
app.get('*',(req,res)=>{
    res.sendFile(`${htmlpath}/nopage.html`);
});

app.listen(2000);