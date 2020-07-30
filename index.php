<?php get_header(); ?>
<style>
	
    
/********************************************/

		body {
			background-color: #fcf7ff;
			margin: 0;
            padding: 0;
            font-family: "Myriad Pro", sans-serif;
		}
		.content.wrapper{
            padding:0 !important;
        }
    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    h1 {
        font-family: "Myriad Pro",sans-serif;
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
			font-family: 'Myriad Pro', serif;
		}

		.date {
			font-family: 'Myriad Pro', sans-serif;
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
			font-family: 'Myriad Pro', sans-serif;
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
<?php while(have_posts()) {
    the_post(); 
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
    
    ?>


<div class="container">
			<div class="date">
				<p><?php the_time('M j, Y'); ?></p>
			</div>
			<div class="name">
				<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			</div>

			<div class="image">				
                <?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php the_permalink(); ?>"><img id="my-img1" src="<?php echo $image['url'] ?>" alt=""></a>
        <?php } ?>
				
			</div>			
			<div class="text">
				<p>
                <?php echo wp_trim_words(get_the_content(), 35); ?>
				</p><br>
				<a href="<?php the_permalink(); ?>" class="btn btn-dark text-white">Read More <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i></a>
			</div>
					
		</div>


<?php } ?>		
	</div>
    <?php get_footer(); ?>
