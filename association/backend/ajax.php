<script>        
    var ajax_call =(data,backend_file) =>{
    $.ajax({
        type: 'post',
        url: `/<?=$main_url?>/backend/${backend_file}.php`,
        data: data,
        success: (res)=> {
            console.log(res);
            $('#error').html(res);
        setTimeout(() => {
            $('#error').removeClass('error btn');
            $('#error').empty();        
        }, 3000);
        }
    });
    }
          
    var ajax_call1 =(data,backend_file) =>{
    $.ajax({
        type: 'POST',
        method: 'POST',
        // dataType:'application/json',
        url: `/<?=$main_url?>/backend/${backend_file}.php`,
        data: data,
        contentType:false,
        cache:false,
        processData: false,
        success: (res)=> {
            // console.log('test');
            // console.log(res);
            // console.log(typeof(res));
            // var response = JSON.parse(res);
            // if (res=='false'){
            //     $('#ajax_res').val('');
            // } else {
            //     $('#ajax_res').val(res);
            // }
            $('#error').html(res);
        setTimeout(() => {
            $('#error').removeClass('error btn');
            $('#error').empty();        
        }, 3000);
        }
    });
    }
</script>