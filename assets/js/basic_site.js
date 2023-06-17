
const item_btn = document.querySelectorAll(".btn-ct");
const item_content = document.querySelectorAll(".content_box")

//box city
item_btn.forEach(function(button, index) {
    button.addEventListener('click', function(){
        item_btn.forEach(function(btn){
            btn.classList.remove('click');
        });
        button.classList.add('click');
        item_content.forEach(function(box){
            box.classList.remove('content_block');
        });
        item_content[index].classList.add('content_block');
    });
});

    