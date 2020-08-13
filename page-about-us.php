<?php get_header(); ?>

<style>

    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    h1 {
        font-family: "Myriad Pro",sans-serif !important;
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

    .about-part {
        text-align: left;
        font-family: "Myriad Pro",sans-serif !important;
    }

    .flex-container {
        display: flex;
        flex-direction: row-reverse;
        flex-wrap: wrap;
        justify-content: space-evenly;        
    }

    .flex-container>div {
        margin: 1px;
        padding: 1px;
        font-size: 16px;
        max-width: 500px;
        flex-basis: 45%;
    }
    @media screen and (min-width: 1440px){
        .flex-container {
        justify-content: center;        
    }
        .flex-container>div {
        margin: 1px 30px;       
    }
    }

    .flex-container .image {
        overflow: hidden;        
    }
    .flex-container .image img{
        width:100%;
        border-radius:3px;
    }

    .flex-container .image div p {
        font-size: 27px;
        line-height:1em;
        padding:0;
        font-style:italic;
        color: #2f2e2e;
        letter-spacing: .1px;
    }

    @media screen and (min-width : 906px) {
        .on-mobile {
            visibility: hidden;
        }
    }

    @media screen and (max-width : 906px) {
        .flex-container>div {
            flex-basis: 100% !important;
        }

        .on-mobile {
            visibility: visible;
        }

        .on-desk {
            visibility: hidden;
            display: none;
        }

        .flex-container>div {
            text-align: center;
        }

        .flex-container .image {
            text-align: center;            
        }
        .flex-container .image div p{
            text-align: center;
            margin:20px auto;
        }
		
		.flex-container .image img{
            width:100%;
            
        }
		
    }

    @media screen and (max-width : 700px) {

        .heading h1::before,
        .heading h1::after {
            width: 100px;
        }
		
		.flex-container>div {
			font-size: 12px;
        }
		
    }

    @media screen and (max-width : 500px) {

        .heading{
		    font-size:30px;
		}
		
		.heading p{
		    margin:0;
		}
		
		.heading h1::before,
        .heading h1::after {
            width: 60px;
        }
		
		.flex-container .image div p {
            font-size: 25px;
       }
       .flex-container .image img{
           min-height:300px !important;
       }
    }

    .how-diff-text{
        margin:10px auto;
        width:60%;
        text-align:center;
        font-size:17px;
        letter-spacing:0.6px;
        word-spacing:6px;
    }    
    .how-diff{
        font-family:"Myriad Pro",sans-serif;
    }
    .card-text{
        font-size:15px;
        letter-spacing:0.6px;
        word-spacing:6px;
    }
    .card-title{
        font-size:32px !important;
        letter-spacing:0.6px;
        word-spacing:6px;
    }
    .statistics .card, .planning .card, .how-diff .card{
        border:0;
        /* box-shadow:0 0 10px #00000012; */
        background-color:transparent;        
    }
    .how-diff .card{
        background-color:#c5d7be44;             
    }
    .planning .card-title{
        background-color:#fcd2d5;
        color:white;
    }

    .meet-team .card{
        border:0;                
    }
    .meet-team .card-img-top{
        width:150px;
        margin: 20px auto;
    }
    @media screen and (max-width:768px){
        .how-diff-text{        
        width:90%;
    }    
    }
</style>

<div class="about-part">
    <div class="heading">
        <p>Get To Know Our Story</p>
        <h1><span>*</span></h1>
    </div>
    <div class="flex-container">

        <div class="image ">
            <div class="on-desk">
                <p>Our story to make yours beautiful!</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets_inside/about_us_page_img.jpg' ?>"
                alt="Humsafar Weddings" />
            <div class="on-mobile">
                <p>Our story to make yours beautiful!</p>
            </div>
        </div>
        <div class="text-justify">
        <p>Based in the bustling capital of Chattisgarh, Raipur which is known for its stunning lakes and ancient temples, Humsafar is a household name to all those couples planning their perfect day. We have been enthusiastically working to carve out the happy moments for you for past 7 years now. The smile on your face while working backdoors gives us relief. Going by its name, Humsafar has planned & organized more than 500 weddings with majestic themes customized by your choice.<br>
Humsafar has built quite a name in India starting from 2012. From a hotel to a beach, from a hall to a riverside and from a hilltop building to a lush green garden, we have got you covered. Decoration with various themes, planning, budgeting, designing, photography, hospitality, etc. We plan your wedding according to your liking based on your ideas and our resources. Our Raipur team has In-house production house with services like vendors for decoration, photographers, warehouse facilities which are pretty much everything one needs for a wedding to organize. Humsafar weddings have opened the branches in Mumbai and Delhi in 2016 and 2017 respectively making our Indian network stronger and expanded. A destination wedding is one other specialization of ours in places like Greece, Mauritius, Dubai, Singapore, Malaysia, Thailand, Italy, Rome, etc. with professionalism.<br>
Making your dream come reality is the ultimate motto of Humsafar weddings. Conceptualizing each and every aspect of it is necessary by not only professionally planning but also executing those. We believe in bringing plans to action for you to live the happiest moments. While the bride and groom play the main role and the other supporting them, it is the Humsafar wedding planners who keep on interlocking those strands of happiness in them.  Relax, you have got our back for everything.

        </div>
    </div>  
    <div class=" p-5" style="width:100%;background-color:#c5d7be44;">
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
    
</div>
<?php get_footer(); ?>

