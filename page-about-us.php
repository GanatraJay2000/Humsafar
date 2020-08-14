<?php get_header(); ?>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		.about-top {
			position: relative;
			height: 100%;
		}

		.fixed-bg {			
			height: 100%;
			width: 100%;
			text-align: center;
			display: table;
			position:relative;
			background-repeat:no-repeat;
			background-size:cover;
			background-position:center;
		}

		.scroll-bg-1 {
			background-color: #d0f2e1;
			padding: 10px 70px;
		}
		.scroll-bg-2 {
			background-color: #fff;
			padding: 10px 70px;
		}

		.bg-1 {
			background-image: url('https://images.unsplash.com/photo-1543157145-f78c636d023d?ixlib=rb-1.2.1&w=1000&q=80');
		}

		.image {
			width: 35vw;
			height: 45vw;
			border: 0vw solid #004b44;
			margin: 2.5vw 0;
			margin-left: 20%;
		}

		.image img {
			width: 35vw;
			height: 45vw;
		}

		.quote {
			position: absolute;
			height: 25vw;
			width: 25vw;
			top: 160px;
			left:50%;						
			font-size: 200%;
			font-family: "Batang", serif;
			display:grid;			
			place-items:center;
            background-color: #fff;
            box-shadow:0px 0px 10px #00000033;
		}

		.text {
			width: 80%;
			margin: 60px auto;
			line-height: 30px;
			text-align:center;
			font-size:18px;
		}
		.text p{
			margin:40px auto;
		}
		    .statistics .card, .planning .card, .how-diff .card{
        border:0;
        /* box-shadow:0 0 10px #00000012; */
        background-color:transparent;        
    }

	.director{
		width:70%;
		margin:50px auto;
		font-family:"Myriad Pro", sans-serif;
	}
	.director p{
		line-height:30px;
		font-size:18px;
		color:#444;
		margin:20px 0;		
	}
	.director h1,.director h4{
		font-family:"Batang", serif;
	}
	.director img{
		width:100%;
		
	}
	.meet-team{
		width:80%;
		margin:0 auto;
	}
	.meet-team .card{
        border:0;                
    }
    .meet-team .card-img-top{
        width:150px;
        margin: 20px auto;
    }
		@media screen and (max-width: 700px) {

			.image {
				margin-left: 0%;
				width: 100vw;
				height: 100vh;
				margin-bottom: 15%;
			}

			.image img {
				width: 100%;
				height: 100%;
			}

			.quote{
				width:100%;
				left:0;
				height:fit-content;
				top:auto;
				bottom:0px;
			}

				.scroll-bg-1 {
			background-color: #d0f2e1;
			padding: 10px;
		}
		.meet-team{
		width:100%;		
	}
	.director{
		width:100%;		
	}

		}
		.content.wrapper{
			margin:0 !important;
			width:100% !important;
			padding:0 !important;
		}
	</style>
	<div class="about-top">
		<div class="fixed-bg bg-1">
			<div class="image">			
				<img src="<?php echo get_template_directory_uri() . '/assets_inside/about_us_page_img.jpg' ?>"
                alt="Humsafar Weddings" />
			</div>
			<div class="quote">
				<p>Our story to make yours beautiful!
				</p>
			</div>
		</div>
		<div class="scroll-bg-1">
			<div class="text">
				<p>Based in the bustling capital of Chattisgarh, Raipur which is known for its stunning lakes and
					ancient temples, Humsafar
					is a household name to all those couples planning their perfect day. We have been enthusiastically
					working to carve out the
					happy moments for you for past 7 years now. The smile on your face while working backdoors gives us
					relief. Going by its name,
					Humsafar has planned & organized more than 500 weddings with majestic themes customized by your
					choice.
				</p>
				<p>Humsafar has built quite a name in India starting from 2012. From a hotel to a beach, from a hall to a riverside and from a hilltop building to a lush green garden, we have got you covered. Decoration with various themes, planning, budgeting, designing, photography, hospitality, etc. We plan your wedding according to your liking based on your ideas and our resources. Our Raipur team has In-house production house with services like vendors for decoration, photographers, warehouse facilities which are pretty much everything one needs for a wedding to organize. Humsafar weddings have opened the branches in Mumbai and Delhi in 2016 and 2017 respectively making our Indian network stronger and expanded. A destination wedding is one other specialization of ours in places like Greece, Mauritius, Dubai, Singapore, Malaysia, Thailand, Italy, Rome, etc. with professionalism.</p>				
			</div>
		</div>
	</div>
<div class=" p-5">
        <div class="card-deck statistics">
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/experience.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">4<br>YEARS</p>
                </div>
            </div>
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/wedding.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">50+ <br>WEDDINGS</p>
                </div>
            </div>
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/travel.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">12<br>DESTINATION WEDDINGS</p>
                </div>
            </div>
        </div>    
	</div>
	<div class="scroll-bg-1">
			<div class="text">
				<p>Making your dream come reality is the ultimate motto of Humsafar weddings. Conceptualizing each and every aspect of it is necessary by not only professionally planning but also executing those. We believe in bringing plans to action for you to live the happiest moments. While the bride and groom play the main role and the other supporting them, it is the Humsafar wedding planners who keep on interlocking those strands of happiness in them. Relax, you have got our back for everything.</p>
	</div>
	</div>
	<div class="d-flex flex-wrap flex-row-reverse director">
		<div class="col-md-5 col-12">
			<img src="https://images.pexels.com/photos/412840/pexels-photo-412840.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
		</div>
		<div class="col-md-7 col-12">
			<h4>Our Prime Mover</h4>
			<h1>Mr. Arman Sharma</h1>
			<p>
It feels pleasurable to see a couple setting goals at a higher-end but there are people who work backdoors operating those ropes of emotions and blessings. It is our founder who keeps us united and tied up with the responsibility of full filling the dreams. He started working in the industry way back in 2009 managing many events in Mumbai. When he founded Humsafar weddings in 2014, it was his expertise that kept us going and spirited. He has been out driving force since then with an enthusiasm never seen before.
</p>
		</div>
		
	</div>
	
	 <div class="meet-team">
    <div class="heading">
        <p>Meet the team</p>
        <h1><span>*</span></h1>
    </div>
    <div class="card-deck text-center">
  <div class="card">
    <!-- <img src="<?php echo get_template_directory_uri() . '/assets_inside/armaan.png'; ?>" class="card-img-top" alt="..."> -->
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAC6CAMAAAAu0KfDAAAAA1BMVEWcnpvbbJEWAAAAOElEQVR4nO3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALwZh94AAaYbEC4AAAAASUVORK5CYII=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lorem</h5>
      <h5 class="card-sub-title">lorem ipsum</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci fugiat eligendi nam unde laboriosam sapiente ea quo ullam minus!</p>
        <a href="#" class="text-dark">
            <i class="fab fa-facebook fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-linkedin fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-instagram fa-2x px-1" aria-hidden="true"></i>
        </a>
    </div>
  </div>
  <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
  <div class="card">
  <!-- <img src="<?php echo get_template_directory_uri() . '/assets_inside/ritika.png'; ?>" class="card-img-top" alt="..."> -->
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAC6CAMAAAAu0KfDAAAAA1BMVEWcnpvbbJEWAAAAOElEQVR4nO3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALwZh94AAaYbEC4AAAAASUVORK5CYII=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lorem</h5>
      <h5 class="card-sub-title">Lorem Ipsum</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nihil. Molestiae nulla incidunt commodi eos?</p>
      <a href="#" class="text-dark">
            <i class="fab fa-facebook fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-linkedin fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-instagram fa-2x px-1" aria-hidden="true"></i>
        </a>
    </div>
  </div>
  <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
  <div class="card">
  <!-- <img src="<?php echo get_template_directory_uri() . '/assets_inside/chetan.png'; ?>" class="card-img-top" alt="..."> -->
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAC6CAMAAAAu0KfDAAAAA1BMVEWcnpvbbJEWAAAAOElEQVR4nO3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALwZh94AAaYbEC4AAAAASUVORK5CYII=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lorem</h5>
      <h5 class="card-sub-title">Lorem Ipsum</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique quisquam cum quae, possimus et, veritatis necessitatibus dolores sapiente excepturi voluptates distinctio iste ipsum inventore quod sint pariatur modi incidunt.</p>
      <a href="#" class="text-dark">
            <i class="fab fa-facebook fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-linkedin fa-2x px-1" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-dark">
            <i class="fab fa-instagram fa-2x px-1" aria-hidden="true"></i>
        </a>
    </div>
  </div>
</div>
    </div>
	
    
<?php get_footer(); ?>