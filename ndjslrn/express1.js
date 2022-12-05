const express = require('express');
const app = express();
app.get('',(req,res)=>{
    res.send('Hii john');
});

app.get('/test',(req,res)=>{
    res.send('Hii jack');
});

app.get('/get',(req,res)=>{
    var request =req.query.nm;
    // console.log(request);
    res.send(`Hii jackNjohn.... ${request}`);
});

app.listen(2000);