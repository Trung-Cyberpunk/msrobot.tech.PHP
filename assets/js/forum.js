

const ask_qs = document.querySelector("#ask_qs");

const remove_ask = document.querySelector(".ask_btn");

const ask_qsBox = document.querySelector(".ask_qsBox");
// open ask qs box


if(ask_qs){
    ask_qs.onclick = () => {
        ask_qsBox.classList.add("run");    
        backgr.classList.add("opacity");
    }
}


//close ask qs box
if(remove_ask){
    remove_ask.onclick = () => {
        ask_qsBox.classList.remove("run");    
        backgr.classList.remove("opacity");
    }
}



