
const ask = document.querySelectorAll(".draft_qs");

const up_dr = document.querySelectorAll(".up_dr");
const down_dr = document.querySelectorAll(".down_dr");
const list_li = document.querySelectorAll(".a");
const title_dr = document.querySelectorAll("#title_dr");


for( let i = 0; i < ask.length; i++){
    down_dr[i].addEventListener('click', ()=>{
        list_li[i].style.display = 'block';
        up_dr[i].style.display = 'block';
        down_dr[i].style.display = 'none';
        title_dr[i].classList.add('dr_color');
    });
}

for( let i = 0; i < ask.length; i++){
    up_dr[i].addEventListener('click', ()=> {
        list_li[i].style.display = 'none';
        up_dr[i].style.display = 'none';
        down_dr[i].style.display = 'block';
        title_dr[i].classList.remove('dr_color');
    })
}