var variavelX;
if(window.XMLHttpRequest){
    variavelX = new XMLHttpRequest;
}
else{
    variavelX = new ActiveXObject("Microsoft.XMLHTTP");
}

variavelX.onreadystatechange = function(){
    if(variavelX.readyState == 4 && xmlHttp.status == 200 ){
        console.log(xmlHttp.responseText);
    }
}

xmlHttp.open('GET', 'exclusao.html', true);