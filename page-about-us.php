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
        background-color:#dbc5be99;        
    }
    .planning .card-title{
        background-color:#dbc5be;
        color:white;
    }
    @media screen and (max-width:768px){
        .how-diff-text{        
        width:90%;
    }    
    }
</style>

<div class="about-part">
    <div class="heading">
        <p>Get to know about us</p>
        <h1><span>*</span></h1>
    </div>
    <div class="flex-container">

        <div class="image ">
            <div class="on-desk">
                <p>We would love to share a little bit about us.</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets_inside/about_us_page_img.jpg' ?>"
                alt="Humsafar Weddings" />
            <div class="on-mobile">
                <p>We would love to share a bit about us.</p>
            </div>
        </div>
        <div class="text-justify">
        <p>HUMSAFAR WEDDINGS is your one stop destination for all your wedding related tasks. We are your ULTIMATE humsafars in turning your dreams into reality.</p>
        <p>With over 7 years of experience in the field of wedding planning, HUMSAFAR has successfully planned over 500 weddings. We work hard to satisfy our clients and to fulfill all their desires.</p> 
        <p>Our team has over 50 young and passionate individuals, who put in all their heart and hard work to make your wedding the most memorable moment for you and your entire guest list. </p>
        <p>Humsafar Weddings is gaining its reputation across the country for wedding management. We excel at providing our couples with the best and most beautiful DESTINATION WEDDINGS. We are specialized in planning and managing weddings in the most exotic locations of the country including Udaipur, Agra, Jaipur, Kerala and substantially more. Our services extend to the global market as well. We plan weddings in the dreamiest locations which include: Greece, Mauritius, Thailand, Italy and appreciably more. </p>
        <p>We got you all covered from choosing your wedding locations, beautiful wedding attires, wedding themes, wedding feast, grand entries to taking care of your guests.</p>
        </div>
    </div>  
    <div class=" p-5" style="width:100%;background-color:#c5d7be44">
        <div class="card-deck statistics">
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/crown.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">4<br>YEARS</p>
                </div>
            </div>
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/crown.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">50+ <br>WEDDINGS</p>
                </div>
            </div>
            <div class="card">    
            <img class="card-img-top" style="width:100px;margin:0px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/crown.png' ?>" alt="Card image cap"> 
                <div class="card-body text-center">      
                <p class="card-text">12<br>DESTINATION WEDDINGS</p>
                </div>
            </div>
        </div>    
    </div>
    <div class="heading">
        <p>How We are Different</p>
        <h1><span>*</span></h1>
    </div>
    <div class="how-diff">
    <div class="how-diff-text">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dignissimos aperiam labore consectetur quaerat non magnam voluptas, perferendis ea libero veniam facilis autem impedit dolor. Accusantium quia optio et aliquid?
    </div>
    <div class="card-deck my-5">
  <div class="card">
    <img class="card-img-top" style="width:100px;margin:30px auto;" src="<?php echo get_template_directory_uri() . '/assets_inside/crown.png' ?>" alt="Card image cap">    
    <div class="card-body  text-center">
      <h5 class="card-title">Fairytale</h5>
      <p class="card-text">Bringing your wedding vision to life!<br><br>

We love weaving your emotions and personality into a wedding.<br><br>

The fairytale that you’ve always dreamt of, no matter how crazy or simple, has to be designed and put into a viable plan. We make sure everything about your fairytale screams you!</p>      
    </div>
  </div>
  <div class="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body  text-center">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>      
    </div>
  </div>
  <div class="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body  text-center">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>      
    </div>
  </div>
</div>
    </div>

    <div class="planning">
    <div class="heading">
        <p>Phases</p>
        <h1><span>*</span></h1>
    </div>
    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" style="width:160px;margin:20px auto;"  src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1558377875221-39W4PF09WKNKL0OH8INA/ke17ZwdGBToddI8pDm48kPmrXPVZ9IZXdToIOIR3bYpZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7coMdWJheMWZGj8ZBPnfUaPSgvGrwmH9g7Am67QkkDgnFR0Pz3fYPXtHzuPoZ7T36Q/smallicons-11.png?format=300w" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">Planning Phase</h5>
      <p class="card-text">During this phase we meet, greet and get to know the style and vibe of our bride and groom. We get down-to-details like the budget and guest list to make sure we’re aligned for the requirements of your big day. Then, we collaborate, concept and start creating a vision. Have you always dreamed of a small, intimate backyard party or are you more of a ballroom, fairytale, where’s-my-glass slipper kind of a girl? Deciding on your dream direction allows us to choose vendors and plot key milestones to make your wedding day a reality. </p>      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" style="width:160px;margin:20px auto;"  src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1558377805267-2QR1PJ7QRQI9WOS7A52N/ke17ZwdGBToddI8pDm48kPmrXPVZ9IZXdToIOIR3bYpZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7coMdWJheMWZGj8ZBPnfUaPSgvGrwmH9g7Am67QkkDgnFR0Pz3fYPXtHzuPoZ7T36Q/smallicons-10.png?format=300w" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">Design Phase</h5>
      <p class="card-text">TWith the big picture nailed down in phase one, now’s the time we bring your style to life. We create a custom design proposal encompassing everything from your cake to invitations to unexpected centerpieces that will have your guests Instagramming every last thoughtfully curated detail. We’ll handle sourcing and vendor communication so you can enjoy the surprise of “reveal day” when we share mockups of your entire design suite.

</p>      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" style="width:160px;margin:20px auto;"  src="https://images.squarespace-cdn.com/content/v1/5c4111e5b98a78c514801cef/1558377895913-ET0QUOVDVBWTB9GZZSK8/ke17ZwdGBToddI8pDm48kPmrXPVZ9IZXdToIOIR3bYpZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7coMdWJheMWZGj8ZBPnfUaPSgvGrwmH9g7Am67QkkDgnFR0Pz3fYPXtHzuPoZ7T36Q/smallicons-12.png?format=300w" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">Action Phase</h5>
      <p class="card-text">Now, the planning pays off and your vision comes to life. Your joy takes center stage while our team carefully nuances every detail and manages any obstacle. From red wine stains to sick officiants, we take over so you and your family can embrace every moment of your big day.</p>      
    </div>
  </div>
</div>
    </div>
    
</div>
<?php get_footer(); ?>