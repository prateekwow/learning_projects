$(document).ready(function ()
{
    var number = $('.number');
    var operator= $('.operator');
    var value = '';
    var operate = '';
    // console.log(number.length);
    for(var i=0; i<number.length;i++)
    {
        $(number[i]).click(function(e)
        {
            // console.log(number[i]);
            value += e.target.innerText;
            $('#output-value').text(value);
        });
    }
    for (x of operator)
    {
        $(x).click(function(e)
        {
            operate = e.target.value;
            // alert(operate);
            if(operate=='C'){
                value = '';
                $('#output-value').text('');
            }else if(operate=='='){
                // value =new String(value);
                value= eval(value);
                // console.log(value);
                $('#output-value').text(value);
                console.log($('#output-value').text());
                // console.log(value);
            } else{
                value += operate;
                $('#output-value').text(value);
            }

            // $('#output-value').text(value);
            // console.log(e.target.innerText);
        });
    }
});