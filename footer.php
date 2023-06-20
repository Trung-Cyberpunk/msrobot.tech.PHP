<div class="wapper">
    <div class="signUp">
        <div class="top-signUp">
            <h3>Sign Up and Start Learning!</h3>
            <a id="btn_x" class='bx bx-x'></a>
        </div>
        <form class="item-signUp" action="/msrobot.tech.PHP/login_email.php">
            <div class="box-sign">
                <input id="box_" type="index" placeholder="Email" required>
                <i id="icon" class='bx bx-envelope'></i>
            </div>
            <div class="box-sign">
                <input id="box_" type="index" placeholder="Passwork" required>
                <i id="icon" class='bx bx-lock'></i>
            </div>
            <div class="box-sign">
                <input id="box_" type="index" placeholder="Verify password" required>
                <i id="icon" class='bx bx-lock'></i>
            </div>
            <span id="note">Please use this email & password to login our Demo Sites when using Selenium Test
                Automation.</span>
            <div id="check">
                <input id="myCheckbox" type="checkbox" required>
                <label for="myCheckbox">Yes! I want to receive emails with Selenium Tips and ebook!</label>
            </div>
            <button id="btn_sign">Sign Up</button>
            <div class="sign_end">
                <p>By signing up, you agree to our <strong style="color: rgba(7, 68, 242, 1)">Terms of Use</strong> and
                    <strong style="color: rgba(7, 68, 242, 1)">Privacy Policy.</strong>
                </p>
                <hr style="width: 100%; height: 1px">
                <span>Already have an account? <a id="login_a" href="#"
                        style="color: rgba(7, 68, 242, 1); font-weight: 600;">Log In</a></span>
            </div>
        </form>
    </div>

    <div class="login">
        <div class="top-login">
            <h3>Forgot password</h3>
            <a id="btn_y" class='bx bx-x'></a>
        </div>
        <form class="item-login" method="post" action="home.php">
            <div class="box-login">
                <input id="box_" type="index" placeholder="Email" name="email" required>
                <i id="icon" class='bx bx-envelope'></i>
            </div>
            <div class="box-login">
                <input id="box_" type="index" placeholder="Passwork" name="passwork" required>
                <i id="icon" class='bx bx-lock'></i>
            </div>
            <button id="btn_login" name="login">Login</button>
            <div class="login_end">
                <p>Or <a id="passwork_rs" style="color: rgba(7, 68, 242, 1)">Forgot password</a></p>
                <hr style="width: 100%; height:1px">
                <span>Don't have an account?<a id="sign_a" href="#"
                        style="color: rgba(7, 68, 242, 1); font-weight: 600;"> Sign up</a></span>
            </div>
        </form>
    </div>

    <div class="reset_pw">
        <div class="top-reset_pw">
            <h3>Log in to your <strong style="color: rgba(7, 68, 242, 1);">Ms.Robot</strong> account!</h3>
            <a id="btn_z" class='bx bx-x'></a>
        </div>
        <form class="item-reset_pw" method="post">
            <div class="box-reset_pw">
                <input id="box_" type="index" placeholder="Email">
                <i id="icon" class='bx bx-envelope'></i>
            </div>
            <div class="box-reset_pw">
                <img src="/msrobot.tech.PHP/assets/img/capcha.png" alt="Capcha">
            </div>
            <button id="btn_reset_pw">Reset password</button>
            <div class="reset_pw_end">
                <span>Or <a id="login_rs" style="color: rgba(7, 68, 242, 1); font-weight: 600;"> Login</a></span>
            </div>
        </form>
    </div>

    <div class="reset_pw_2">
        <div class="top-reset_pw_2">
            <h3>Log in to your <strong style="color: rgba(7, 68, 242, 1);">Ms.Robot</strong> account!</h3>
            <a id="btn_z_2" class='bx bx-x'></a>
        </div>
        <div class="item-reset_pw_2">
            <div class="box-reset_pw_2">
                <input id="box_" type="index" placeholder="Passwork">
                <i id="icon" class='bx bx-lock'></i>
            </div>
            <div class="box-reset_pw_2">
                <input id="box_" type="index" placeholder="Passwork">
                <i id="icon" class='bx bx-lock'></i>
            </div>
            <button id="btn_reset_pw_2">Sumbit</button>
        </div>
    </div>

    <div class="ask_qsBox">
        <div class="title_ask">
            <p>Select the question category</p>
            <button class="ask_btn bx bx-x"></button>
        </div>
        <div class="ask">
            <h4>1. Special catalog, you will be expertly answered by our experts.</h4>
            <a href="forum_qs_ask.php"><button id="q_a">Q & A with Our Test Automation Architect team</button></a>
            <h4>2. Free catalogory, you can ask all questions here. No login required.</h4>
            <button id="general">General Discussion</button>
        </div>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="/msrobot.tech.PHP/assets/js/home.js"></script>
<script src="/msrobot.tech.PHP/assets/js/sign_login.js"></script>
<script src="/msrobot.tech.PHP/assets/js/feedback.js"></script>
<script src="/msrobot.tech.PHP/assets/js/forum.js"></script>
<script src="assets/js/droop_qs.js"></script>
<script src="/msrobot.tech.PHP/assets/js/actions_stie.js"></script>
<script src="/msrobot.tech.PHP/assets/js/ecommerce_site.js"></script>
<script src="/msrobot.tech.PHP/assets/js/basic_site.js"></script>

<!-- thư viện Sortable kéo thả -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
// Sử dụng thư viện Sortable để thực hiện kéo thả

var box_action = document.querySelector('.box-action');
var container_object = document.querySelector('.container_object');
var object_1 = document.querySelector('.object_1');
var object_2 = document.querySelector('.object_2');
var alphabet = document.querySelector('.alphabet');


if (box_action) {
    new Sortable(box_action, {
        animation: 150,
    });
}
if (container_object) {
    new Sortable(container_object, {
        animation: 150,
    });
}
if (object_1) {
    new Sortable(object_1, {
        animation: 150,
    });
}

if (object_2) {
    new Sortable(object_2, {
        animation: 150,
    });
}

if (alphabet) {
    new Sortable(alphabet, {
        animation: 150,
    });
}





// new Sortable(document.querySelector('.container_object'), {
//     animation: 150,
// });
// new Sortable(document.querySelector('.object_1'), {
//     animation: 150,
// });
// new Sortable(document.querySelector('.object_2'), {
//     animation: 150,
// });
// new Sortable(document.querySelector('.alphabet  '), {
//     animation: 150,
// });
</script>