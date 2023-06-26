// xử lý sự kiện các box feedback 

const feedback_img = document.querySelector("#feedback-icon");
// const backgr = document.querySelector(".backgr");
const feedback_icon = document.querySelector(".fb_icon")

const remove_fb = document.querySelector("#btn_fb");


if (feedback_icon) {
    feedback_img.onclick = () => {
        feedback_icon.classList.add("run");    
        backgr.classList.add("opacity");
    }
}

if(remove_fb){
    remove_fb.onclick = () => {
        feedback_icon.classList.remove("run");    
        backgr.classList.remove("opacity");
    }
}


function updateSlide(){
    if(containerSlide){
      var translateX =  -(slideWidth + slideMargin) * slideIndex;
      containerSlide.style.transform = 'translateX(' + translateX + 'rem)';
    }
  }


//khảo sát hài lòng (sad, like, angry...)
const imageContainers = document.querySelectorAll('.container_icon'); //chọn 1 phần tử chứa ảnh và text
// nummm = imageContainers.length;
// alert(nummm)

imageContainers.forEach((container) => {
    const image = container.querySelector('.feedback-img'); //khi bấm vào 1 ảnh

    image.addEventListener('click', () => {
        // Loại bỏ lớp CSS "selected" khỏi tất cả các phần tử "image-container"
        imageContainers.forEach((container) => {
            container.classList.remove('selected');
        });
        // Thêm lớp CSS "selected" vào phần tử "image-container" tương ứng với ảnh được chọn
        container.classList.add('selected');
    });
});

// dùng vòng lặp forEach để clear tất cả các .container_icon 
//có selected và rồi thêm selected vào khối chọn