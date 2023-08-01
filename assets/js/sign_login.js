const backgr = document.querySelector(".backgr");

// sign
const btn_signUp = document.querySelector("#btn-header_signUp");
const wapper_sign = document.querySelector(".signUp");
const sign_close  = document.querySelector("#btn_x");
const login_a  = document.querySelector("#login_a");
const sign_a  = document.querySelector("#sign_a");
const sign_ask = document.querySelector("#sign_ask");

const ask_login = document.querySelector("#sign_ask");

// Login
const btn_login = document.querySelector("#btn-header_login");
const wapper_login = document.querySelector(".login");
const login_close  = document.querySelector("#btn_y");


// xử lý sign
btn_signUp.onclick = () => {
    wapper_sign.classList.add("active");
    wapper_login.classList.remove("active");
    backgr.classList.add("opacity");
}
sign_close.onclick = () => {
    wapper_sign.classList.remove("active");
    backgr.classList.remove("opacity");
}

login_a.onclick = () =>{
    wapper_sign.classList.remove("active");
    wapper_login.classList.add("active");
    backgr.classList.add("opacity");
}


sign_a.onclick = () =>{
    wapper_sign.classList.add("active");
    wapper_login.classList.remove("active");
    backgr.classList.add("opacity");
}







// xử lý login

btn_login.onclick = () => {
    wapper_login.classList.add("active");
    wapper_sign.classList.remove("active");
    backgr.classList.add("opacity");

}
login_close.onclick = () => {
    wapper_login.classList.remove("active");
    backgr.classList.remove("opacity");
}
sign_a.onclick = () =>{
    wapper_sign.classList.add("active");
    wapper_login.classList.remove("active");
}

// Forgot password

const reset_close = document.querySelector("#btn_z");
const reset_pw = document.querySelector(".reset_pw");
const link_rs = document.querySelector("#passwork_rs");
const login_rs = document.querySelector("#login_rs");

link_rs.onclick = () =>{
    reset_pw.classList.add("active");
    wapper_login.classList.remove("active"); 
    backgr.classList.add("opacity");    
}

login_rs.onclick = () => {
    reset_pw.classList.remove("active");
    wapper_login.classList.add("active");
    backgr.classList.add("opacity");
}

reset_close.onclick = () => {
    reset_pw.classList.remove("active");
    backgr.classList.remove("opacity");
}
//reset

const btn_reset = document.querySelector("#btn_reset_pw");
const reset_pw_2 = document.querySelector(".reset_pw_2");
const btn_z_2 = document.querySelector("#btn_z_2");

// btn_reset.onclick =  () =>{

    // reset_pw_2.classList.add("active");
    // reset_pw.classList.remove("active");
    // backgr.classList.add("opacity");
// }


$(document).ready(function() {
    // Bắt sự kiện khi người dùng bấm nút Reset Password
    $('#btn_reset_pw').click(function(e) {
        e.preventDefault();

        // Lấy thông tin từ form
        var email = $('#emailInput').val();
        var captcha_response = grecaptcha.getResponse(); // Lấy giá trị captcha

        // Gửi thông tin qua Ajax
        $.ajax({
            url: 'reset_pw.php',
            type: 'post',
            dataType: 'json',
            data: {
                'email': email,
                'g-recaptcha-response': captcha_response
            },
            success: function(response) {
                // Kiểm tra kết quả từ server
                if (response.email_exists) {
                    // Hiển thị box 2 nếu email tồn tại và captcha hợp lệ
                    reset_pw_2.classList.add("active");
                    reset_pw.classList.remove("active");
                    backgr.classList.add("opacity");
                    
                } else {
                    alert("Email không đúng");
                }
            },
            error: function() {
                alert("ERRO!");
            }
        });
    });
});
btn_z_2.onclick = (event) => {
    event.preventDefault();
    reset_pw_2.classList.remove("active");  
    backgr.classList.remove("opacity");
}
// sử dụng ajax để thực hiện hiện bảng reset passwrd



// sign page item8i

if(ask_login){
    ask_login.onclick = () =>{
        wapper_sign.classList.add("active");
        wapper_login.classList.remove("active");
        backgr.classList.add("opacity");
    }
}
