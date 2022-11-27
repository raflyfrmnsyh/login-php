<?php
    require_once 'core/init.php';
    $title = "Login Page";
    require_once 'view/tamplates/head.php';
?>

    <div class="wrapper">
        <div class="container d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="form-bx">
                <form action="" method="post" class="d-flex flex-column">
                    <div class="form-head mb-4">
                        <div class="form-head-text text-center">
                            <h2>Sign-in</h2>
                        </div>
                    </div>  
                    <div class="form-input w-100 d-flex align-items-center flex-column">
                         
                        <div class="input-bx">
                            <div class="icon">
                                <i class='bx bx-user'></i>
                            </div>
                            <input type="text" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="input-bx">
                            <div class="icon">
                                <i class='bx bx-lock'></i>
                            </div>
                            <input type="password" name="Password" id="Password" placeholder="Password">
                        </div>
                    </div>  
                        <div class="form-bottom d-flex flex-column">
                            <a href="#" class="forgot">Forgot password?</a>
                            <button class="btn-btn-submit" name="submit">Masuk</button>

                            <span class="text-center mt-2 mb-2 or-text">OR</span>

                            <a href="#" class="log-with-google">
                                <div class="icon-img">
                                    <img src="view/img/google.png" alt="">
                                </div>
                                <span>Login With Google</span>
                            </a>


                            <div class="new-account-btn text-center mt-3">
                                <span>Don't have account?</span>
                                <a href="#">Register</a>
                            </div>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>





<?php
    require_once 'view/tamplates/foot.php';
?>

    