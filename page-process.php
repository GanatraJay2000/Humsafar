<?php get_header(); ?>
<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Process</title>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #fcf7ff;
		}

		.heading {
			margin-top: 30px;
			margin-bottom: 30px;
			text-align: center;			
            font-size: 45px;
            font-family:"Batang", serif !important;
		}

	
		.quote {
			background-color: #d0f2e1;
			font-size: 40px;
			line-height: 60px;
			//padding: 10px;
			height: 30vw;
			display: flex;
			//flex-wrap: wrap;
			//flex-direction: column-reverse;
		}

		.qtext {
            font-family:'Batang', serif !important;
			width: 30%;
			height: 15vw;			
			text-align: right;
			padding: 10px;
			margin: 7.5% 0;
			margin-left: 10%;
		}

		.image {
			width: 50vw;
			height: 30vw;
			margin-left: 1.9%;
			margin-top: 5%;
			//background-color: yellow;
		}

		.image img {
			width: 100%;
			height: 100%;
			display: block;
		}

		.process-part {
			width:90%;
			margin: 100px auto;			
		}

		.process-text {			
			padding: 20px;
			margin: 20px auto;
			line-height: 25px;
			font-size: 17px;		
		}

		.process-text p {
			padding-bottom: 20px;
			margin: 0;
		}

		.title {
            font-size: 25px;
            position:relative;
        }
        .title::after{
            content:"";
            display:block;
            background-color:#000;
            width:30px;
            height:2px;
        }

		.buttons {
			width: 100%;
			margin: 20px auto;
			text-align: center;
		}

		.button {
			width: 200px;
            padding: 15px 0;
			text-align: center;
			border: 2px solid #215a54;
			color: white !important;
			font-size: 17px;
			cursor: pointer;
			text-decoration: none;
			margin: 10px 20px;
			background-color: #215a54;
			transition:0.2s ease-in;
		}
		.button:hover {
			border: 2px solid #215a54;
			color: #215a54 !important;
			background-color: white;
			text-decoration:none;
		}

		@media screen and (max-width: 1000px) {

			.qtext {
				font-size: 4vw;
				line-height: 6vw;
			}

		}

		@media screen and (max-width: 700px) {

			.quote {
				//background-color: #fcf7ff;
				line-height: 60px;
				height: 40vw;
				display: flex;
				flex-wrap: wrap;
				flex-direction: row;
			}

			.qtext {
				width: 90%;
				font-size: 4.5vw;
				height: 10vw;
				text-align: center;
				padding: 10px 0;
				margin: 0 auto;
			}

			.image {
				width: 90%;
				height: 45vw;
				float: left;
				margin: 0 auto;
			}

			.process-part {
				margin-top: 100px;				
			}

			.process-text {
				width: 40vw;
			}

			.button {
				width: 40%;
				//display:block;
				margin: 20px 20px;
			}
		}

		@media screen and (max-width: 400px) {

			.process-part {
				margin-top: 20vw;
			}

			.process-text {
				width: 70vw;
				padding: 15px;
				margin: 10px auto;
			}

			.process-text p {
				padding-bottom: 10px;
			}

			.button {
				width: 100%;
				display: block;
				margin: 10px auto;
			}

			.heading {
				font-size: 30px;
			}
		}
		.contact_us{
			color:#80d291 !important;
		}
	</style>

</head>

<body>
	<div class="heading">Our Process</div>

	<div class="quote">
		<div class="qtext">
			<p>"Simplicity is the keynote of all true elegance."
			</p>
		</div>
		<div class="image">
			<img
				src="https://images.squarespace-cdn.com/content/v1/5e8734078136f513e25d34c4/1587400261143-X4ICLQCW8N70J8PQ2FWQ/ke17ZwdGBToddI8pDm48kApm4bZ6Mn3TiUWou3kA3bp7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UWZaykogqWzieOupsqeSuBYug-y5Ut2InYZT1FrJD3yL-rj95DA1mjJIBxXFGHkuyQ/Beach+Wedding+Crim+Barefoot+Beach+Bride.jpg?format=2500w" />
		</div>
	</div>

	<div class="process-part d-flex flex-wrap">

		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Reach Out</p>
			<p>We will set up a Google Hangout or phone call and gush over all of your wedding details, vision, and learn more about you as a couple.
			</p>
		</div>
		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Chat</p>
			<p>If you like what you see, I'd love to hear from you. To start, contact me here. Fill out the contact form
				and I'll be in touch within 48 hours.
			</p>
		</div>
		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Proposal</p>
			<p>Before we hang up, we’ll set up a second meeting, preferably in person, at my studio. I’ll present the proposal and go over any questions you may have.
			</p>
		</div>
		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Booking</p>
			<p>A signed contract and 50% non-refundable retainer will hold your date.<br>
			<a class="contact_us" href="<?php echo site_url('/contact-us'); ?>">Book a consult</a>
			</p>
		</div>
		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Planning</p>
			<p>For event design and full-service floral design, we’ll work together to create the final design plan. We’ll meet at the venue for a walk-through and have a final design meeting four to six weeks before your date. For a la carte floral clients, you should expect an email for final counts and order details about four weeks prior to your wedding day.
			</p>
		</div>
		<div class="process-text col-lg-4 col-md-4 col-sm-6 col-12">
			<p class="title">Wedding Week</p>
			<p>During wedding week, my team and I will be prepping candles, making sure final details are in place, and creating beautiful florals. On your wedding day, I’ll deliver your personal flowers while my team gets started on transforming your event space. Once the candles are lit, it's time to celebrate your new marriage and life together!
			</p>
		</div>

	</div>

	<div class="buttons">
		<a class="button" href="<?php echo site_url('/contact-us'); ?>" type="button">Want to chat?</a>
		<a class="button" href="<?php echo site_url('/services'); ?>" type="button">See Our Service</a>
		<a class="button" href="<?php echo site_url('/blog'); ?>" type="button">Blogs</a>
	</div>

</body>

</html>
<?php get_footer(); ?>