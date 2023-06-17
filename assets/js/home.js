


// // Show nội dung header ẩn
// $(document).ready(function(){

//   var initialWidth = $("#title-main").css("width");
  
//     $("#header_down").click(function(){
//       $(".header_insite").slideToggle("slow");
//       loop();
//     });

//     function loop(){
//       if ($("#title-main").css("width") == initialWidth) {
//         $("#title-main").css("width", "60%");
//       } else {
//         $("#title-main").css("width", initialWidth);
//       }
//       loop();
//     }
// });

//thay đổi width của thẻ h1 khi demosites chạy
$(document).ready(function() {
  var initialWidth = $("#title-main").css("width");

  function toggleHeader() {
    $(".header_insite").slideToggle("slow");
    if ($("#title-main").css("width") == initialWidth) {
      $("#title-main").css("width", "60%");
    } else {
      $("#title-main").css("width", initialWidth);
    }
    $("#header_down").one("click", toggleHeader);
  }

  $("#header_down").one("click", toggleHeader);
});