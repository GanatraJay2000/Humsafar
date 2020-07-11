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


    .container {
        margin: 10px auto;
        padding: 10px;
        width: 75%;
        //background-color:#bababa;
    }

    .image {
        margin: 20px auto;
        //background-color: red;
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
        margin: 0% 11%;
    }

    hr {
        width: 80%;
    }



    /*    login signup      */
    .login {
        height: 36px;
    }

    * {
        box-sizing: border-box;
    }

    /* Full-width input fields */
    .blog-part input[type=text],
    .blog-part input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        border-bottom: 1px solid black;
    }

    .blog-part input[type=text]:focus,
    .blog-part input[type=password]:focus {
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

    .blog-part button:hover {
        opacity: 1;
    }


    /* Add padding to container elements */
    .signup-container {
        padding: 16px;
    }

    .signup-part {
        width: 400px;
        text align: center;
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
        width: 450px;
        /* Could be more or less, depending on screen size */
        float: center;
        text-align: center;
    }

    .modal-content .head- s {
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
        margin: 0 color: #2f2e2e;
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
        border-bottom: 1.5px solid #d9d9d9;
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
        right: 18px;
        top: 5px;
        font-size: 60px;
        color: #000000;
        z-index: 10;
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

    /*  share menu  */

    /* The Modal (background) */
    .modal2 {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        cursor: context-menu;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content2 {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        width: 400px;
        text-align: center;
    }

    .modal-content2 img {
        margin: 20px 10px;
    }

    .copy-link {
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        margin-bottom: 10px;
    }

    /* The Close Button */
    .close2 {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
    }

    .close2:hover,
    .close2:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    #content2 {
        display: none;
    }

    #content2-2 {
        display: none;
    }

    @media screen and (min-width : 600px) {
        #for-mobile {
            visibility: hidden;
            display: none;
        }
    }

    /* Change styles for  small screens */
    @media screen and (max-width: 900px) {
        .modal-content {
            margin-top: 0;
        }
    }


    @media screen and (max-width : 600px) {

        #for-pc {
            visibility: hidden;
            display: none;
        }

        #for-mobile {
            visibility: visible;
            font-size: 30px;
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

        .blog-part hr {
            width: 100%;
        }

        .kebab {
            margin: 1%;
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


    }
</style>

<div class="blog-part">

    <div id="for-pc" class="heading">
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



        <div class="posts">
            <pre>    </pre>
        </div>

        <div class="image">
            <a href="#"><img id="my-img1"
                    src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
                    alt="deepak-nikita" /></a>
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
            <hr style="height:1px;border-width:0;background-color:#cccccc">
        </div>
        <div class="kebab">
            <img id="myBtn" src="https://image.flaticon.com/icons/svg/126/126469.svg" width="15" height="15" />

            <div id="myModal" class="modal2">

                <!-- Modal content -->
                <div class="modal-content2">
                    <span class="close2">&times;</span>

                    <div id="content1">
                        <h3>Share Post</h3>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179319.svg" width="40"
                                height="40" /></a>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179342.svg" width="40"
                                height="40" /></a>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179330.svg" width="40"
                                height="40" /></a>
                        <a id="link" href="#"><img src="https://image.flaticon.com/icons/svg/181/181531.svg" width="40"
                                height="40" /></a>
                    </div>
                    <div id="content2">
                        <h3>Share Link</h3>
                        <div class="copy-link">
                            <p id="p1">add the link1 here</p>
                        </div>
                        <button onclick="copyToClipboard('#p1')">copy link</button>
                    </div>
                </div>
            </div>
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
            <hr style="height:1px;border-width:0;background-color:#cccccc">
        </div>
        <div class="kebab">
            <img id="myBtn2" src="https://image.flaticon.com/icons/svg/126/126469.svg" width="15" height="15" />

            <div id="myModal2" class="modal2">

                <!-- Modal content -->
                <div class="modal-content2">
                    <span class="close2">&times;</span>

                    <div id="content1-2">
                        <h3>Share Post</h3>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179319.svg" width="40"
                                height="40" /></a>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179342.svg" width="40"
                                height="40" /></a>
                        <a href="#"><img src="https://image.flaticon.com/icons/svg/179/179330.svg" width="40"
                                height="40" /></a>
                        <a id="link-2" href="#"><img src="https://image.flaticon.com/icons/svg/181/181531.svg"
                                width="40" height="40" /></a>
                    </div>
                    <div id="content2-2">
                        <h3>Share Link</h3>
                        <div class="copy-link">
                            <p id="p2">add the link2 here</p>
                        </div>
                        <button onclick="copyToClipboard('#p2')">copy link</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="date">
            <p>208 views &ensp; &ensp; <a href="#">Write comment</a></p>
        </div>


    </div>

    <div id="for-mobile" class="heading">
        <p>Find The Latest Updates Here</p>
        <h1><span>*</span></h1>
    </div>
    <br>
    <br>
    <br>

</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the modal
    var modal2 = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[1];

    // When the user clicks the button, open the modal 
    btn2.onclick = function () {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function () {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal2.style.display = "none";
        }
    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert("link copied");
    }

    $('#link').click(function (e) {
        $('#content1').css('display', 'none');
        $('#content2').css('display', 'block');
        e.preventDefault();
    });

    $('#myBtn').click(function (e) {
        $('#content2').css('display', 'none');
        $('#content1').css('display', 'block');
        e.preventDefault();
    });
</script>

<script>
    $('#link-2').click(function (e) {
        $('#content1-2').css('display', 'none');
        $('#content2-2').css('display', 'block');
        e.preventDefault();
    });

    $('#myBtn2').click(function (e) {
        $('#content2-2').css('display', 'none');
        $('#content1-2').css('display', 'block');
        e.preventDefault();
    });
</script>


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

<?php get_footer(); ?>