const calci = {
    symbol: ['+','-','/','%','*','='],
    memory: [],
    screenM: '',
    digit: (num) => {
        $('#output-value').html(num);
        this.screenM += num;
    },
    
};