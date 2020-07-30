<?php get_header(); ?>
<style>
	
    
/********************************************/

		body {
			background-color: #fcf7ff;
			margin: 0;
			padding: 0;
		}
		
    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
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

    h1::before,
    h1::after {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    h1::before {
        left: 0;
        margin-left: 20%;
    }

    h1:after {
        right: 0;
        margin-right: 20%;
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
			margin: 30px auto;
			padding: 20px; 10px;
			width: 65%;
			border: 0.5px solid #c4c4c4;
			border-radius: 5px;
			//background-color:#bababa;
		}
		
		.container:hover{
		    border: 0.5px solid #b28f5e;
		}
		.container:hover .name a{
		    color: #b28f5e;
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


		/* Change styles for  small screens */
		@media screen and (max-width: 800px) {
			
			.container {
				width: 100%;
			}
			
			.heading h1::before,
            .heading h1::after {
                width: 100px;
            }
		}


		@media screen and (max-width : 600px) {

			
			.container {
				width: 99%;
			}
			
			.heading{
		        font-size:30px;
		    }
		
		    .heading p{
		        margin:0;
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

		}
	</style>

	<div class="post-part">
	<div class="heading">
        <p>Wedding Planning and Decoration Ideas</p>
        <h1><span>*</span></h1>
    </div>

    <center><h1>Blog</h1></center>
<?php while(have_posts()) {
    the_post(); ?>
<article class="post my-5">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>   
</article>
<?php
}
?>

		<div class="container">
			<div class="date">
				<p>Jul 27, 2020</p>
			</div>
			<div class="name">
				<p><a href="#">Planning a Dream Marrage</a></p>
			</div>

			<div class="image">
				<a href="#">
				<img id="my-img1"
						src="https://a57.foxnews.com/static.foxbusiness.com/foxbusiness.com/content/uploads/2020/04/0/0/couple-wedding-iStock.jpg?ve=1&tl=1"
						alt="deepak-nikita" />
				</a>
			</div>			
			<div class="text">
				<p>Donec  euismod, augue in sagittis tincidunt, neque nisi commodo purus, non sollicitudin elit sapien vel sapien. Ut eget urna nisl. Mauris non nisi purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae
				</p><br>
				<hr style="height:1px;border-width:0;background-color:#cccccc">
			</div>
			
			<div class="date">
				<p>275 views &ensp; &ensp; <a href="#">Write comment</a></p>
			</div>
		</div>
		
		<div class="container">

			

			<div class="date">
				<p>Jul 29, 2020</p>
			</div>
			<div class="name">
				<p><a href="#">10 Popular Wedding Venues in Rajasthan</a></p>
			</div>

			<div class="image">
				<a href="#"><img id="my-img1"
						src="https://ihplb.b-cdn.net/wp-content/uploads/2011/02/Forts.jpg"
						alt="deepak-nikita" /></a>
			</div>

			
			<div class="text">
				<p>Donec  euismod, augue in sagittis tincidunt, neque nisi commodo purus, non sollicitudin elit sapien vel sapien. Ut eget urna nisl. Mauris non nisi purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae
				</p><br>
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
    <?php get_footer(); ?>
