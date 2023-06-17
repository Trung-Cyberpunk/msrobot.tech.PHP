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

// Xử lý thanh lọc đơn giá với việc sử dụng thư viện Jquery UI

$(function () {
  // Tạo range slider với giá trị từ 0 đến 1000
  $('#slider-range').slider({
    range: true,
    min: 0,
    max: 1900,
    values: [0, 1900],
    slide: function (event, ui) {
      var value1 = '$' + ui.values[0];
      var value2 = '$' + ui.values[1];
      $('#amount').val(value1 + ' - ' + value2);
    },
  });

  var initialValue1 = '$' + $('#slider-range').slider('values', 0);
  var initialValue2 = '$' + $('#slider-range').slider('values', 1);
  $('#amount').val(initialValue1 + ' - ' + initialValue2);
});

// quantity

document.addEventListener('DOMContentLoaded', function () {
  var decreaseBtn = document.querySelector('.decrease');
  var increaseBtn = document.querySelector('.increase');
  var valueSpan = document.querySelector('.value');
  var quantity = 1;

  decreaseBtn.addEventListener('click', function () {
    if (quantity > 1) {
      quantity--;
    }
    updateQuantityDisplay();
  });

  increaseBtn.addEventListener('click', function () {
    quantity++;
    updateQuantityDisplay();
  });

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


reviews.addEventListener('click', function(){
  description_item.style.display = 'none';
  reviews_item.style.display = 'block';
  triangle.style.transform = 'translateX(21rem)';
})
description.addEventListener('click', function(){
  description_item.style.display = 'block';
  reviews_item.style.display = 'none';
  triangle.style.transform = 'translateX(3.3rem)';
})



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
    var translateX =  -(slideWidth + slideMargin) * slideIndex;
    containerSlide.style.transform = 'translateX(' + translateX + 'rem)';
    
  }


  setInterval(slideNext, 3000);
