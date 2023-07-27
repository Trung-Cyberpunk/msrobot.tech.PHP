
// Xử lý thanh lọc đơn giá với việc sử dụng thư viện Jquery UI

$(document).ready(function () {
  // Tạo range slider với giá trị từ 0 đến 1000

  var value1;
  var value2;
  var searchData;

  $(".search_box").submit(function(event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của form
  
    searchData = $(".datasearch").val(); // Lấy dữ liệu từ form tìm kiếm
  
    filterProduct(); // Gọi hàm xử lý tìm kiếm
  });
  
  // sử dụng ajax
  // Data lọc giá theo thanh trượt
  function filterProduct(){
    var min = value1;
    var max = value2;  
    // console.log(max);
    $.ajax({
      // url: 'fetch_data.php', //file sử dụng cũ để xử lý tìm kiếm và lọc giá
      url: 'test_fetch.php',
      type: "POST",
      data:{
            min:min, 
            max:max, 
            searchData: searchData 
          },
      success:function(data){
        $(".container_phone").html(data);
      }
    });
  }
  function initializeSlider(){
    $('#slider-range').slider({
      range: true,
      min: 1,
      max: 1900,
      values: [1, 1900],
      slide: function (event, ui) {
        value1 = ui.values[0];
        value2 = ui.values[1];
        $('#amount').val('$' + value1 + ' - ' +'$'+ value2);
        filterProduct();
      },  
    });
    
    initialValue1 = '$' + $('#slider-range').slider('values', 0);
    initialValue2 = '$' + $('#slider-range').slider('values', 1);
    $('#amount').val( initialValue1 + ' - ' + initialValue2);
  }

  //gọi hàm để tải dữ liệu ban đầu
  
  initializeSlider();
  filterProduct();
});


// Search   

// quantity

document.addEventListener('DOMContentLoaded', function () {
  var decreaseBtn = document.querySelector('.decrease');
  var increaseBtn = document.querySelector('.increase');
  var valueSpan = document.querySelector('.value');
  var quantity = 1;

  if(decreaseBtn){
    decreaseBtn.addEventListener('click', function () {
      if (quantity > 1) {
        quantity--;
      }
      updateQuantityDisplay();
    });
  }

  if(increaseBtn){
    increaseBtn.addEventListener('click', function () {
      quantity++;
      updateQuantityDisplay();
    });
  }

  function updateQuantityDisplay() {
    if (quantity > 1) {
      valueSpan.textContent = quantity.toString();
    } else {
      valueSpan.textContent = 'Only 1';
    }
  }
});



// ------------------------------------------------

var description = document.querySelector('#description');
var reviews = document.querySelector('#reviews');

var description_item = document.querySelector('.description');
var reviews_item = document.querySelector('.reviewss');
var triangle = document.querySelector('.triangle');


if(reviews){
  reviews.addEventListener('click', function(){
    description_item.style.display = 'none';
    reviews_item.style.display = 'block';
    triangle.style.transform = 'translateX(21rem)';
  });
}

if(description){
  description.addEventListener('click', function(){
    description_item.style.display = 'block';
    reviews_item.style.display = 'none';
    triangle.style.transform = 'translateX(3.3rem)';
  });
}


// Rating



const rating = document.querySelectorAll('.rating-star');
const selectedRating = document.getElementById('selected-rating');
const userRatingValue = document.getElementById('user-rating-value');
rating.forEach((star, i) => {
  star.onclick = function() {
    let current = i + 1;

    rating.forEach((item, j) => {
      if (current >= j + 1) {
        item.classList.remove('bx-star');
        item.classList.add('bxs-star');
      } else {
        item.classList.remove('bxs-star');
        item.classList.add('bx-star');
      }
    });
    userRatingValue.value = current;
  };
});









// slider
  
var slideIndex = 0;
var slideWidth = 22; //độ rộng mỗi item
var slideMargin = 2.4;// khoảng cách giữa các item

var containerSlide = document.querySelector('.box_related');
var slides_boxs = document.querySelectorAll('.boxs');

  function slidePrev(){
    slideIndex--;
    if(slideIndex < 0){
      slideIndex = slides_boxs.length - 4 ;// số item hiển thị trên slide
    }
    updateSlide();
  }
  
  function slideNext(){
    slideIndex++;
    if(slideIndex >= slides_boxs.length - 3){
      slideIndex = 0;
    }
    updateSlide();
  }

  function updateSlide(){
    if(containerSlide){
      var translateX =  -(slideWidth + slideMargin) * slideIndex;
      containerSlide.style.transform = 'translateX(' + translateX + 'rem)';
    }
  }


  setInterval(slideNext, 3000); //time 3s các box tự di chuyển




// cách 1 sử dụng js thuần

// document.addEventListener('DOMContentLoaded', function(){
//     var fliter_price = document.getElementById('fliter_price');
//     var handle1 = document.getElementById('handle1');
//     var handle2 = document.getElementById('handle2');
//     var value1 = document.getElementById('value1');
//     var value2 = document.getElementById('value2');
//     var rangeMin =  0;
//     var rangeMax = 1900;
//     var handleWidth = 20;
//     handle1.style.left = '0px';
//     handle2.style.right = (fliter_price.offsetHeight - handleWidth) + 'px';

//     handle1.addEventListener('mousedown', function(envet){
//         var sliderRect = fliter_price.getBoundingClientRect();
//         var handle1Rect = handle1.getBoundingClientRect();
//         var handle2Rect = handle2.getBoundingClientRect();
//         var offsetX = envet.clientX - handle1Rect.left;

//         document.addEventListener('mousemove', dragHandle1);
//         document.addEventListener('mouseup', function(){
//             document.removeEventListener('mousemove', dragHandle1);
//         });
//         function dragHandle1(event){
//             var left = event.clientX - sliderRect.left - offsetX;
//             var right = parsetInt(handle2.style.left, 10) - handleWidth;

//             if(left < rangeMin){
//                 left = rangeMin;
//             }
//             else if ( left > right){
//                 left = right;
//             }

//             handle1.style.left = left + 'px';
//             value1.textContent = calculateValue(left);
//         }
//     });

//     handle2.addEventListener('mousedown', function(event){
//         var fliter_price = fliter_price.getBoundingClientRect();
//         var handle1Rect = handle1.getBoundingClientRect();
//         var handle2Rect = handle2.getBoundingClientRect();
//         var offsetX = event.clientX - handle2Rect.left;

//         document.addEventListener('mousemove', dragHandle2);
//         document.addEventListener('mouseup', function() {
//           document.removeEventListener('mousemove', dragHandle2);
//         });

//         function dragHandle2(event){
//             var left = parseInt(handle1.style.left, 10) + handleWidth;
//             var right = event.clientX - sliderRect.left - offsetX;

//             if (right > rangeMax - handleWidth) {
//                 right = rangeMax - handleWidth;
//             } else if (right < left) {
//                 right = left;
//             }

//           handle2.style.left = right + 'px';
//           value2.textContent = calculateValue(right);
//         }

//     });

//     function calculateValue(position) {
//         var valueRange = rangeMax - rangeMin;
//         var pixelRange = slider.offsetWidth - handleWidth;
//         var ratio = valueRange / pixelRange;
//         return Math.round(position * ratio);
//       }
// });