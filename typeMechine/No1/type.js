var s = 'This is a word type js. Just for fun!  ';  
var con = $('.container');  
var index = 0;  
var length = s.length;  
var tId = null;  

function start(){  
    con.text('');  
    con.append('<span></span>');  
    tId=setInterval(function(){  
        con.append(s.charAt(index));  
        if(index++ === length){  
            clearInterval(tId);  
            index = 0;  
            start()  
        }  
    },400);  
}  

start();  