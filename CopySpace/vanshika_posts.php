<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	

	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
		@import url('https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig');


    .prev,
    .next {
        position: fixed !important;
        top: 0;
        width: 15%;
        height: 100%;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        text-decoration: none !important;
        z-index: 999;
        color: rgba(255, 255, 255, .5) !important;
        font-size: 7rem;
        font-family: monospace;
        -webkit-transition: all .2s;
        transition: all .2s;
    }

    .prev:hover,
    .next:hover {
        color: rgba(255, 255, 255, 1) !important;
    }

    .prev {
        left: -25%;
    }

    .next {
        right: -25%;
    }

    .active .prev {
        left: 0;
    }

    .active .next {
        right: 0;
    }

    .overflow {
        overflow: hidden;
    }

    .lightbox-wrapper {
        --repeat: auto-fill;
        --row-height: 250px;
    }

    @media (min-width:1040px) {
        .lightbox-wrapper {
            --repeat: 3;
            --row-height: 250px;
        }
    }



    @media (min-width:2040px) {
        .lightbox-wrapper {
            --repeat: 3;
            --row-height: 450px;
        }
    }

    @media (max-width:1040px) {
        .lightbox-wrapper {
            --repeat: 2;
            --row-height: 250px;
        }
    }

    .lightbox-wrapper {
        margin: 10vh auto;
        max-width: 65%;
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(var(--repeat, auto-fill), minmax(250px, 1fr)) !important;
        /* grid-auto-rows: var(--row-height); */
        grid-auto-flow: dense;
    }

    .lightbox-wrapper div {
        text-align: center;
        padding: 1rem 0;
        color: white;
        font-size: 3rem;
        text-transform: uppercase;
        background: rgba(0, 0, 0, .2);
        overflow: hidden;
        padding: 0;
        margin: 5px;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: stretch;
        align-items: stretch;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
    }

    .lightbox-wrapper div img {
        width: 100%;
        height: 100%;
        display: block;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        -webkit-transition: all .5s;
        transition: all .5s;
    }



    .lightbox-wrapper div.show::before {
        content: '';
        display: block;
        position: fixed;
        z-index: 555;
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .5);
    }


    main.lightbox-wrapper div.show img {
        position: fixed;
        top: 0;
        left: 0;
        margin: 30px;
        align-self: center;
        -o-object-fit: contain;
        object-fit: contain;
        z-index: 666;
        width: calc(100% - 60px);
        height: calc(100% - 60px);
        -webkit-filter: drop-shadow(0 3px 15px black);
        filter: drop-shadow(0 3px 15px black);
        -webkit-cursor: url('../assets/close-button.png'), -webkit-no-drop;
        cursor: url('../assets/close-button.png'), no-drop;
        /* custom cursor to signal close on click */
    }

    main.lightbox-wrapper div:not(.show):hover img {
        cursor: pointer;
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }

    .left {
        grid-column-start: 1;
    }

    .center {
        grid-column-start: 2;
        /* grid-column-end: span 2;
        grid-row-end: span 2; */
    }

    .right {
        grid-column-start: -2;
    }



    .lightbox-wrapper .active div:not(.show) img {
        -webkit-filter: blur(3px);
        filter: blur(3px);
    }
	
	 @media screen and (min-width:1124px) {
        .horizontal {
            grid-column-end: span 2;
        }

        .vertical {
            grid-row-end: span 2;
        }

        .big {
            grid-column-end: span 2;
            grid-row-end: span 2;
        }

        .big.right {
            grid-column-start: -3;
            grid-column-end: span 2;
            grid-row-end: span 2;
        }
    }

    @media screen and (max-width : 800px) {
        main.lightbox-wrapper {
            max-width: 100% !important;
        }

    }


    @media screen and (max-width: 600px) {
        .lightbox-wrapper {
		    max-width: 100% !important;
            display: flex;
            flex-wrap: wrap;
             }

        .lightbox-wrapper div {
            margin: 10px;
        }
    }

/********************************************/

		body {
			background-color: #fcf7ff;
			margin: 0;
			padding: 0;
		}

		.post-part {
			font-family: 'playfair display', serif;
		}

		.date {
			font-family: 'FuturaLig', sans-serif;
			color: #3d3d3d;
			font-size: 15px;
		}

		.date p {
			margin: 1%;
		}

		.date a {
			text-decoration: none;
			color: #3d3d3d;
		}

		.name {
			font-size: 32px;
		}

		.name p {
			margin: 1% 0;
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
			margin: 1% 0;
		}

		.text a {
			text-decoration: none;
			color: #3d3d3d;
		}

		.container {
			margin: 10px auto;
			padding: 10px;
			width: 65%;
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
			margin:0 2%;
		}

		/*    login signup      */
		.login {
			height: 36px;
		}
		
		.login p{
		  padding: 5px;
		}
		.login p a{
		  color: #b28f5e;
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
		.post-part button {
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

		.post-part .signupbtn {
			margin-bottom: 20px;
		}

		.post-part .firstbtn {
			background-color: #fcf7ff;
			border: 1px solid;
			color: #bba45b;
			float: right;
		}

		.post-part button:hover {
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
			overflow: auto;
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
			border: 0px solid;
			height:100%;
		}

		.modal-content .head-s {
			//font-family: sans-serif;
			text-align: center;
			font-size: 32px;
			color: #2f2e2e;
		}

		.modal-content .head-s h1 {
			color: #2f2e2e;
			margin: 5px;
		}

		.modal-content .p-text p {
			text-align: center;
			font-size: 18px;
			margin: 0 color: #2f2e2e;
		}

		.modal-content .p-text a {
			text-decoration: none;
			color: #bba45b;
		}

		.modal-content a {
			color: #2f2e2e;
		}
		
		.modal-content .other-signup .links 
		{
            display: flex;
            justify-content: space-around;
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
			margin: 10px 25% 0 2%;
		}

		.modal-content .other-signup .ggl {
			float: left;
			margin: 10px 2% 0 25%;
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 15px;
			top: 5px;
			font-size: 40px;
			z-index: 10;
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
		.modal-content2 {
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			width: 400px;
			text-align: center;
		}
		
		.modal-content2 img {
			margin: 20px;
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


		/* Change styles for  small screens */
		@media screen and (max-width: 800px) {
			.modal-content {
				margin-top: 0;
			}
			.container {
				width: 100%;
			}
		}


		@media screen and (max-width : 600px) {

			
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
				text-align:center;
				font-size:25px;
			}

			.text p {
				margin: 8px;
				font-size:17px;
			}

			.date p {
				margin: 8px;
				font-size: 12px;
			}

			hr {
				width: 100%;
			}

			.kebab {
				margin: 1%;
			}


			.modal-content {
				width: 90%;
				margin-top: 0;
			}
			
			.modal-content label{
			  font-size: 13px;
			}
			
			.modal-content .head-s {
			  font-size:20px;
			}
			
			.modal-content .p-text p{
			  font-size:14px;
			}
			
			.modal-content .other-signup{
			  font-size:13px;
			}
			
			.modal-content2 {
				width: 90%;
			}
			
			.modal-content2 h3{
			  font-size:20px;
			}

			.login {
				background-color: #bba45b;
				height: 36px;
			}
			
		   .login p a{
		       color: #fff;
		   }

			.post-part .firstbtn {
				background-color: #bba45b;
				border: 1px solid #bba45b;
				color: white;
				float: right;
			}




		}
	</style>
</head>

<body>

	<div class="post-part">

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
												src="https://image.flaticon.com/icons/svg/1384/1384053.svg"
												alt="facebook" width="40" height="40"></a>
									</div>
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

								
							</div>
					</div>
					</form>



				</div>
				<p><a href="#">All posts</a></p>
			</div>



			<div class="posts">
				<pre>    </pre>
			</div>
			<div class="kebab">
				<img id="myBtn" src="https://image.flaticon.com/icons/svg/126/126469.svg" width="15" height="15" />

				<div id="myModal" class="modal2">

					<!-- Modal content -->
					<div class="modal-content2">
						<span class="close2">&times;</span>

						<div id="content1">
							<h3>Share Post</h3>
							<br>
							<a href="#"><img src="https://image.flaticon.com/icons/svg/179/179319.svg" width="40"
									height="40" /></a>
							<a href="#"><img src="https://image.flaticon.com/icons/svg/179/179342.svg" width="40"
									height="40" /></a>
							<a href="#"><img src="https://image.flaticon.com/icons/svg/179/179330.svg" width="40"
									height="40" /></a>
							<a id="link" href="#"><img src="https://image.flaticon.com/icons/svg/181/181531.svg"
									width="40" height="40" /></a>
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
				<p>Jul 29, 2018</p>
			</div>
			<div class="name">
				<p><a href="#">Deepak & Nikita</a></p>
			</div>

			<div class="image">
				<img id="my-img1"
						src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
						alt="deepak-nikita" />
			</div>

			
			<div class="text">
				<p> Deepak & Nikita are an adorable couple. They shied away from the usual spotlight (and sometimes the camera) that is always on the bride & groom, and seemed to enjoy the fact that all their family & 
				friends were having so much fun the wedding. They strictly didn't want to do any posed shots, so we had to be super alert to steal glances of love they exchanged with each other through their wedding.</p>
				<br>
				<hr style="height:1px;border-width:0;background-color:#cccccc">
			</div>
			
			<div class="date">
				<p>275 views &ensp; &ensp; <a href="#">Write comment</a></p>
			</div>
		</div>

		<br>
		<br>
		<br>

	</div>

<a href="#" class="lightboxNav prev">&lt;</a>
<a href="#" class="lightboxNav next">&gt;</a>

<main class="lightbox-wrapper">
    <div class="">

        <img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp"
            data-footer=alt="">
    </div>
    <div class="vertical center">
        <img src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
            alt="">
    </div>
    <div class="horizontal center">
        <img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.jpg/v1/crop/x_69,y_0,w_885,h_683/fill/w_885,h_683,al_c,q_85/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp"
            alt="">
    </div>
    <div class="big">
        <img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_65aa4c3e04044753b53e31340e9b1ba6~mv2.jpg/v1/crop/x_170,y_0,w_1260,h_1066/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_65aa4c3e04044753b53e31340e9b1ba6~mv2.webp"
            alt="">
    </div>
    <div class="vertical">
        <img src="https://static.wixstatic.com/media/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.jpg/v1/crop/x_0,y_12,w_900,h_575/fill/w_732,h_468,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp"
            alt="">
    </div>
    <div class="horizontal">
        <img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://picsum.photos/id/11/800" alt="">
    </div>
    <div class="big">
        <img src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://picsum.photos/id/13/800" alt="">
    </div>
    <div class="horizontal">
        <img src="https://static.wixstatic.com/media/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.jpg/v1/crop/x_0,y_12,w_900,h_575/fill/w_732,h_468,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp"
            alt="">
    </div>
    <div class="big right">
        <img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp"
            alt="">
    </div>
    <div>
        <img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp"
            alt="">
    </div>

    <div class="vertical">
        <img src="https://static.wixstatic.com/media/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.jpg/v1/crop/x_69,y_0,w_885,h_683/fill/w_885,h_683,al_c,q_85/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.webp"
            alt="">
    </div>
</main>

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
	
<script>
    const divs = document.querySelectorAll('main.lightbox-wrapper div');
    const body = document.body;
    const prev = document.querySelector('.lightboxNav.prev');
    const next = document.querySelector('.lightboxNav.next');

    function checkPrev() {
        if (document.querySelector('.lightbox-wrapper div:first-child').classList.contains('show')) {
            prev.style.display = 'none';
            // body.classList.toggle('overflow');

        } else {
            prev.style.display = 'flex';
        }
    }

    function checkNext() {
        if (document.querySelector('.lightbox-wrapper div:last-child').classList.contains('show')) {
            next.style.display = 'none';
            // body.classList.toggle('overflow');
        } else {
            next.style.display = 'flex';
        }
    }

    Array.prototype.slice.call(divs).forEach(function (el) {
        el.addEventListener('click', function () {
            this.classList.toggle('show');
            // body.classList.toggle('overflow');
            body.classList.toggle('active');
            checkNext();
            checkPrev();
        });
    });

    prev.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);

        show.previousElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkNext();
    });

    next.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);

        show.nextElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkPrev();
    });
</script>

</body>

</html>