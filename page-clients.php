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
        font-family: 'Raleway', sans-serif;
        font-size: 18px;
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
        //background-color:rgba(0,0,0,0.5);
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

    .text hr {
        margin:10px auto;
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

    .blog-part .signupbtn {
        margin-bottom: 20px;
    }

    .blog-part .firstbtn {
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
    .my-modal-content {
        border: 0 !important;
        background-color: #ffffff;
        margin: 2% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        width: 450px;
        /* Could be more or less, depending on screen size */
        float: center;
        text-align: center;
    }

    .my-modal-content .head- s {
        font-family: sans-serif;
        text-align: center;
        font-size: 35px;
        color: #2f2e2e;
    }

    .my-modal-content .head-s h1 {
        color: #2f2e2e;
        margin: 5px;
    }

    .my-modal-content .p-text p {
        text-align: center;
        font-size: 20px;
        margin: 0 color: #2f2e2e;
    }

    .my-modal-content .p-text a {
        text-decoration: none;
        color: #bba45b;
    }

    .my-modal-content a {
        color: #2f2e2e;
    }

    .my-modal-content .other-signup .links {
        display: flex;
        justify-content: space-around;
    }

    .my-modal-content .other-signup p {

        font-size: 16px;
        margin: 0;
        color: #2f2e2e;
        width: 100%;
        text-align: center;
        border-bottom: 1.5px solid #d9d9d9;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    .my-modal-content .other-signup span {
        background-color: white;
        padding: 0 10px;
    }

    /* .my-modal-content .other-signup .fb {
        float: right;
        margin: 10px 35% 0 0;
    }

    .my-modal-content .other-signup .ggl {
        float: left;
        margin: 10px 0 0 35%;
    } */

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 15px;
        top: 5px;
        z-index: 10;
        font-size: 40px;
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
    .my-modal-content2 {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        width: 400px;
        text-align: center;
    }

    .my-modal-content2 img {
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
        .my-modal-content {
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

        hr {
            width: 100%;
        }

        .kebab {
            margin: 1%;
        }


        .my-modal-content {
            width: 90%;
            margin-top: 0;
        }

        .my-modal-content2 {
            width: 300px;
        }

        .login {
            background-color: #bba45b;
            height: 36px;
        }

        .blog-part .firstbtn {
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
                    <form id="form1" class="my-modal-content" action="/action_page.php">
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
                                <div class="links">
                                    <div class="ggl"><a href="#"><img
                                                src="https://image.flaticon.com/icons/svg/2702/2702602.svg" alt="google"
                                                width="40" height="40"></a>
                                    </div>
                                    <div class="fb"><a href="#"><img
                                                src="https://image.flaticon.com/icons/svg/1384/1384053.svg"
                                                alt="facebook" width="40" height="40"></a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>

                    <form id="form2" class="my-modal-content" action="/action_page.php">
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
                                <div class="links">
                                    <div class="ggl"><a href="#"><img
                                                src="https://image.flaticon.com/icons/svg/2702/2702602.svg" alt="google"
                                                width="40" height="40"></a>
                                    </div>
                                    <div class="fb"><a href="#"><img
                                                src="https://image.flaticon.com/icons/svg/1384/1384053.svg"
                                                alt="facebook" width="40" height="40"></a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>

                    <form id="form3" class="my-modal-content" action="/action_page.php">
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

</div>
<?php
$events = new WP_Query(array(
    'post_type'=>'events',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));
while($events->have_posts())
{
    $events->the_post();         
    $event_date = rwmb_meta('event_date');
    $event_type = rwmb_meta('event_type');
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );

    $eventDate = new DateTime($event_date);          
    
if($event_type === 'Wedding'){
    ?>



<div class="container">
<div class="image">
            <?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
        <?php } ?>
        </div>


        <div class="name">
            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </div>
        <div class="text">
            <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
            <br>
            <hr style="height:1px;border-width:0;background-color:#cccccc">
        </div>
        <div class="kebab">
            <img id="myBtn" src="https://image.flaticon.com/icons/svg/126/126469.svg" width="15" height="15" />

            <div id="myModal" class="modal2">

                <!-- Modal content -->
                <div class="my-modal-content2">
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
            <p><?php echo $eventDate->format('M').' '.$eventDate->format('dS').', '.$eventDate->format('Y'); ?></p>
        </div>

    </div>
    <div class="posts">
            <pre>    </pre>
    </div> 

    <?php
}
}
?>
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
        $('body').css('overflow', 'auto');
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
        $('body').css('overflow', 'auto');
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
        $('body').css('overflow', 'hidden');
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
        $('body').css('overflow', 'hidden');
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