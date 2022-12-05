const express = require('express');
const path = require('path');
const app = express();
const viewpath = path.join(__dirname,'public');

app.set('view engine','ejs');
app.get('/profile',(req,res)=>{
    var i = 1;
    const info={
        id:1,name:'john',
    };
    res.render('profile',{i,info});
});

app.listen(2000);