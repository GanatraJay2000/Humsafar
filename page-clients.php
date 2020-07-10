<?php get_header(); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
    @import url('https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig');

    body {
        background-color: #fcf7ff;
        margin: 0;
        padding: 0;
    }

    .blog-part {
        font-family: 'playfair display', serif;
    }

    .date {
        font-family: 'FuturaLig', sans-serif;
        color: #3d3d3d;
        font-size: 12px;
    }

    .date p {
        margin: 1% 10%;
    }

    .date a {
        text-decoration: none;
        color: #3d3d3d;
    }

    .name {
        font-size: 28px;
    }

    .name p {
        margin: 1% 10%;
    }

    .name a {
        text-decoration: none;
        color: #2f2e2e;
    }

    .name:hover a {
        color: #b28f5e;
    }

    .text {
        font-family: 'FuturaLig', sans-serif;
        font-size: 20px;
        color: #3d3d3d;
    }

    .text p {
        margin: 1% 10%;
    }

    .text a {
        text-decoration: none;
        color: #3d3d3d;
    }

    .heading {
        padding-top: 10px;
        margin: auto;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
        /* //background-color:rgba(0,0,0,0.5); */
        width: 70%;
    }

    .heading p {
        margin: 0;
    }

    h1 {
        font-family: sans-serif;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

    }

    h1:before {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        left: 0;
        margin-left: 20%;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    h1:after {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        right: 0;
        margin-right: 20%;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    .container {
        margin: 10px auto;
        padding: 10px;
        width: 75%;
        /* //background-color:#bababa; */
    }

    .image {
        margin: 20px auto;
        /* //background-color: red; */
        height: 400px;
        overflow: hidden;
    }

    .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .kebab {
        float: right;
        margin: 0% 10%;
    }

    hr {
        width: 80%;
        margin: 0 auto;
    }



    /*    login signup      */
    .login {
        height: 36px;
    }

    * {
        box-sizing: border-box;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        border-bottom: 1px solid black;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        outline: none;
        border-bottom: 1px solid #bba45b;
    }

    /* Set a style for all buttons */
    .blog-part button {
        background-color: #bba45b;
        font-family: 'playfair display', serif;
        color: white;
        font-size: 16px;
        padding: 5px;
        margin: 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .signupbtn {
        margin-bottom: 20px;
    }

    .firstbtn {
        background-color: #fcf7ff;
        border: 1px solid;
        color: #bba45b;
        float: right;
    }

    button:hover {
        opacity: 1;
    }


    /* Add padding to container elements */
    .signup-container {
        padding: 16px;
    }

    .signup-part {
        width: 400px;
        text-align: center;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: inherit;
        /* Enable scroll if needed */
        background-color: #ffffff;
        padding-top: 20px;
    }


    /* Modal Content/Box */
    .modal-content {
        background-color: #ffffff;
        margin: 2% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        width: 40%;
        /* Could be more or less, depending on screen size */
        float: center;
    }

    .modal-content .head-s {
        font-family: sans-serif;
        text-align: center;
        font-size: 35px;
        color: #2f2e2e;
    }

    .modal-content .head-s h1 {
        color: #2f2e2e;
        margin: 5px;
    }

    .modal-content .p-text p {
        text-align: center;
        font-size: 20px;
        margin: 0;
        color: #2f2e2e;
    }

    .modal-content .p-text a {
        text-decoration: none;
        color: #bba45b;
    }

    .modal-content a {
        color: #2f2e2e;
    }

    .modal-content .other-signup p {

        font-size: 16px;
        margin: 0;
        color: #2f2e2e;
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #adb3af;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    .modal-content .other-signup span {
        background-color: white;
        padding: 0 10px;
    }

    .modal-content .other-signup .fb {
        float: right;
        margin: 10px 35% 0 0;
    }

    .modal-content .other-signup .ggl {
        float: left;
        margin: 10px 0 0 35%;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 15px;
        top: 5px;
        font-size: 60px;
        color: #000000;
    }

    .close:hover,
    .close:focus {
        color: #bba45b;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    #form2,
    #form3 {
        display: none;
    }

    /* Change styles for  small screens */
    @media screen and (max-width: 900px) {
        .modal-content {
            width: 70%;
            margin-top: 0;
        }
    }


    @media screen and (max-width : 600px) {
        .heading {
            visibility: hidden;
            display: none;
        }

        .container {
            width: 100%;
        }

        .image {
            text-align: center;
            height: 250px;
        }

        .image img {
            object-fit: fill;
        }

        .name p {
            margin: 8px;
        }

        .text p {
            margin: 8px;
        }

        .date p {
            margin: 8px;
        }

        hr {
            width: 100%;
        }

        .kebab {
            margin: 0%;
        }


        .modal-content {
            width: 90%;
            margin-top: 0;
        }

        .login {
            background-color: #bba45b;
            height: 36px;
        }

        .firstbtn {
            background-color: #bba45b;
            border: 1px solid #bba45b;
            color: white;
            float: right;
        }

        div.content.wrapper {
            margin: 0 !important;
            width: 100%;
            padding: 0 !important;
        }

        div.container {
            margin: 0 !important;
        }

        .container .text a {
            font-size: 16px;
        }

        .container .text p {
            line-height: 1.2em !important;
        }
    }
</style>


<div class="blog-part">

    <div class="heading">
        <p>Find The Latest Updates Here</p>
        <h1><span>*</span></h1>
    </div>
    <div class="container">
        <div class="login">

            <button class="firstbtn" onclick="document.getElementById('id01').style.display='block'"
                style="width:auto;">Log In / Sign Up</button>


            <div class="signup-part">
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <form id="form1" class="modal-content" action="/action_page.php">
                        <div class="signup-container">
                            <div class="head-s">
                                <h1><b>SIGN UP</b></h1>
                            </div>
                            <div id="login" class="p-text">
                                <p>Already a member? <a href="#">Log In</a></p>
                            </div>
                            <br>
                            <label for="email">Email</label>
                            <input type="text" name="email" required>

                            <label for="psw">Password</label>
                            <input type="password" name="psw" required>


                            <div class="clearfix">
                                <button type="submit" class="signupbtn">Sign Up</button>
                            </div>
                            <div class="other-signup">
                                <p><span>or sign up with</span></p>
                                <div class="ggl"><a href="#"><img
                                            src="https://image.flaticon.com/icons/svg/2702/2702602.svg" alt="google"
                                            width="40" height="40"></a>
                                </div>
                                <div class="fb"><a href="#"><img
                                            src="https://image.flaticon.com/icons/svg/1384/1384053.svg" alt="facebook"
                                            width="40" height="40"></a>
                                </div>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>

                    <form id="form2" class="modal-content" action="/action_page.php">
                        <div class="signup-container">
                            <div class="head-s">
                                <h1><b>LOG IN</b></h1>
                            </div>
                            <div id="signup" class="p-text">
                                <p>New to this site? <a href="#">Sign Up</a></p>
                            </div>
                            <br>
                            <label for="email">Email</label>
                            <input type="text" name="email" required>

                            <label for="psw">Password</label>
                            <input type="password" name="psw" required>

                            <label class="fgtpsd"><a href="#">Forgot Password?</a></label>

                            <div class="clearfix">
                                <button type="submit" class="signupbtn" style="margin-top:30px;">Log in</button>
                            </div>
                            <div class="other-signup">
                                <p><span>or log in with</span></p>
                                <div class="ggl"><a href="#"><img
                                            src="https://image.flaticon.com/icons/svg/2702/2702602.svg" alt="google"
                                            width="40" height="40"></a>
                                </div>
                                <div class="fb"><a href="#"><img
                                            src="https://image.flaticon.com/icons/svg/1384/1384053.svg" alt="facebook"
                                            width="40" height="40"></a>
                                </div>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>

                    <form id="form3" class="modal-content" action="/action_page.php">
                        <div class="signup-container">
                            <div class="head-s">
                                <h1>RESET PASSWORD</h1>
                            </div>
                            <div class="p-text">
                                <p>please enter your email address</p>
                            </div>
                            <br>
                            <label for="email">Email</label>
                            <input type="text" name="email" required>


                            <div class="clearfix">
                                <button type="submit" class="signupbtn">Reset Password</button>
                            </div>

                            <br>
                            <br>
                            <br>
                        </div>
                </div>
                </form>



            </div>
        </div>


        <?php  

        $clients = new WP_QUERY(array(
            'posts_per_page' => -1,
            'post_type' => 'event'
        ));
        while($clients->have_posts()){
            $clients->the_post(); ?>


        <div class="image">
            <a href="#"><img id="my-img1"
                    src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
                    alt="deepak-nikita" /></a>
        </div>
        <div class="kebab">
            <a href="#"><img src="https://image.flaticon.com/icons/svg/483/483345.svg" width="15" height="15" /></a>
        </div>
        <div class="date">
            <p>Jul 29, 2018</p>
        </div>
        <div class="name">
            <p><a href="#">Deepak & Nikita</a></p>
        </div>
        <div class="text">
            <p><a href="#">Deepak & Nikita are an adorable couple. They shied away from the usual spotlight (and
                    sometimes the camera) that is always on the bride & ...</a></p>
            <br>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="date">
            <p>275 views &ensp; &ensp; <a href="#">Write comment</a></p>
        </div>


        <?php } ?>

        <div class="image">
            <a href="#"><img id="my-img1"
                    src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
                    alt="deepak-nikita" /></a>
        </div>
        <div class="kebab">
            <a href="#"><img src="https://image.flaticon.com/icons/svg/483/483345.svg" width="15" height="15" /></a>
        </div>
        <div class="date">
            <p>Jul 29, 2018</p>
        </div>
        <div class="name">
            <p><a href="#">Deepak & Nikita</a></p>
        </div>
        <div class="text">
            <p><a href="#">Deepak & Nikita are an adorable couple. They shied away from the usual spotlight (and
                    sometimes the camera) that is always on the bride & ...</a></p>
            <br>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="date">
            <p>275 views &ensp; &ensp; <a href="#">Write comment</a></p>
        </div>
    </div>

    <div class="container">

        <div class="image">
            <a href="#"><img id="my-img1"
                    src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp"
                    alt="prem-varsha" /></a>
        </div>
        <div class="kebab">
            <a href="#"><img src="https://image.flaticon.com/icons/svg/483/483345.svg" width="15" height="15" /></a>
        </div>
        <div class="date">
            <p>Jul 29, 2018</p>
        </div>
        <div class="name">
            <p><a href="#">Prem & Varsha</a></p>
        </div>
        <div class="text">
            <p><a href="#">A Grand venue with a decor that's larger than life, beautifully complemented by musical
                    evenings of an absolutely in-love bride and groom...</a></p>
            <br>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="date">
            <p>208 views &ensp; &ensp; <a href="#">Write comment</a></p>
        </div>
    </div>

</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#login a').click(function (e) {
        $('#form1').css('display', 'none');
        $('#form3').css('display', 'none');
        $('#form2').css('display', 'block');
        e.preventDefault();
    });

    $('#signup a').click(function (e) {
        $('#form2').css('display', 'none');
        $('#form3').css('display', 'none');
        $('#form1').css('display', 'block');
        e.preventDefault();
    });

    $('.fgtpsd a').click(function (e) {
        $('#form2').css('display', 'none');
        $('#form3').css('display', 'block');
        e.preventDefault();
    });

    $('.firstbtn').click(function (e) {
        $('#form3').css('display', 'none');
        $('#form2').css('display', 'none');
        $('#form1').css('display', 'block');
        e.preventDefault();
        $('body').css('overflow', 'hidden');
    });

    $("#myModal").on("show", function () {
        $("body").addClass("modal-open");
    }).on("hidden", function () {
        $("body").removeClass("modal-open")
    });

    $('.close').click(function (e) {
        e.preventDefault();
        $('body').css('overflow', 'auto');
    });
</script>


<?php get_footer() ?>