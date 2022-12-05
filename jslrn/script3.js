$(document).ready(function ()
{
    var number = $('.number');
    var operator= $('.operator');
    var symbol= ['+','-','/','%','*','='];
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
            }
            else if(operate=='='){
                // console.log(value);
                var v1 = '';
                var v2 = '';
                var sm = 0;
                for (res of value) {
                    for(sym of symbol){
                        if(res!=sym && symbol.indexOf(sym)==(symbol.length-1) && sm==0){
                            v1 +=res;
                        }
                        else if(res==sym){
                            sm=1;
                            var opr=res;
                            break
                        }
                        else if(sm==1) {
                            v2 +=res;
                            break
                        }
                    }
                    
                }
                v1 = parseInt(v1);
                v2 = parseInt(v2);
                // opr = parseInt(opr);

                value = v1+opr+v2
                // value =new String(value);
                value= eval(value);
                console.log(v1);
                console.log(v2);
                $('#output-value').text(value);
                console.log($('#output-value').text());
                // console.log(value);
            } 
            else{
                value += operate;
                $('#output-value').text(value);
            }

            // $('#output-value').text(value);console.log(v2);
            // console.log(e.target.innerText);
        });
    }
});