


const btn_y = document.querySelectorAll(".btn-y");
const container_action = document.querySelectorAll(".container_action");
     

btn_y.forEach(function(button,index){
    button.addEventListener('click', function(){
        btn_y.forEach(function(btn){
            btn.removeAttribute("id");
        });
        button.setAttribute('id', 'btn-bgr');
        container_action.forEach(function(box){
            box.removeAttribute('id')
        })
        container_action[index].setAttribute('id','container_block');
    })
})  
  


// trung

// Lấy tất cả các nút x_action
const closeButtons = document.querySelectorAll("#x_action");

// Lặp qua từng nút và thêm sự kiện click
closeButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Tìm khối notify tương ứng của nút được nhấn
    const notify = button.parentElement;

    // Ẩn khối notify bằng cách đặt thuộc tính display thành "none"
    notify.style.display = "none";
  });
});
