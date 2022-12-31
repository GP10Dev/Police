function byug(v){
    let ls = document.getElementsByClassName("rdata");
    if(v==true){
        for(let i=0; i<ls.length; i++){
            ls[i].style.color = "green";
        }
    } else{
        for(let i=0; i<ls.length; i++){
            ls[i].style.color = "black";
        }
    }
}