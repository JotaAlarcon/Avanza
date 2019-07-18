function objetoAjax(){
    var xmlhttp = false;
    try{
        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
    }catch (e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch (E){
            xmlhttp = false;
        }
    }
    if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
        xmlhttp = XMLHttpRequest();
    }
    return xmlhttp;
}