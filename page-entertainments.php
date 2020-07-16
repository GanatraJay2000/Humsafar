<?php get_header('new'); ?>
<body>
<style>
  body{
	overflow-x:hidden;
  background-color:white;
  font-family: "Times New Roman", Times, serif;

}

a{
  text-decoration:none !important;
  padding:0;
}

hr{
width:60px;
background-color:black;
height:1px;
margin:10px auto;}




.thumbee{
  margin:0px;
   padding:0px;
  position:relative;
   padding: .25rem;

}
.thumbee .thumbee_title{  
  position:absolute;  
  font-family: Josefin, serif;
    pointer-events: none;
  font-weight:600;
  color:white;
  font-size:32px;
  font-weight:500;
  bottom:20%;
  z-index:1;
  margin: 0 auto;
  width:100%;  
}
.thumbee .term_title i{
  font-size:10px;
}
.img-thumbnailee
{
 border:0px;
    background-color: #fff;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}

p{
margin-right:5px;
margin-left:5px;

}

#buttonee{

color:black;
background-color:white;
border:1px solid black;
padding:2px 10px 2px 10px;
transition: transform .2s;
font-size:20px;
}

.card{
border:0px;
}

#ddee:hover {opacity: 0.88}

#buttonee:hover {

color:white;
background-color:black;
 -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 

}
.card-img-top{
height:200px;
width:auto;}


#ccee{
justify-content:center;
}



@media only screen and (max-width: 765px) {
.thumbee{
width:40%;
}


.content.wrapper{
  padding:0 !important;
  margin:0 !important;
}

#ccee.row{
  padding:0 !important;
  margin:0 !important;
}
.term_title{
  font-size:16px !important;
}
.thumbee-title{
  font-size:16px;
}
}

  </style>
<div class="container animate__animated animate__pulse m-0 p-0" width="100%">
<div class="row m-0 p-0">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <img src="../assets/p03kbhkd.jpg" alt="Arijit Singh" width="100%" id="ddee">
 
</div>
</div>
</div>
</br>


<h1 class=""><center>Featured Artists</center></h1>
<hr></hr></br>
<center>

<div class="container m-0 p-0">
	<div class="row m-0 p-0" id="ccee">

 <?php
 $artists = new WP_Query(array(                
    'post_type' => 'artists',
    'meta_key' => 'order_on_home_page',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',   
    'meta_query' => array(
        array(
            'key' => 'on_home_page',
            'compare' => '==',
            'value' => 'Yes',   
          ),),));

while($artists->have_posts())
{
$artists->the_post();
$thumbnail_image = rwmb_meta('image_on_home_page', array( 'size' => 'medium' ) );
?>
  <?php foreach ( $thumbnail_image as $image ) { ?>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 thumbee ">
      <div class="thumbee_title">
        <?php the_title(); ?>
      </div>
        <a class="thumbnail" href="<?php the_permalink(); ?>">
            <img class="img-thumbnailee" id="ddee"
                  src="<?php echo $image['url'] ?>"
                  alt="Another alt text">
        </a>
    </div>
  <?php } ?> 
  

<?php } ?>          
      </div>
    </div>
<center>
  <a class="" href="<?php echo site_url('/entertainments/artists'); ?>">
<button class="mt-lg-5 mt-2" id="buttonee"> VIEW ALL ARTISTS </button>
  </a>
</center>

</br></br>
<div class="container" width="100%">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h1 class=""><center>Get To Know About Us</center></h1>
<hr></br>
<p class="">Humsafar Entertainments is a Mumbai based Artist Management Company
 that specializes in managing artists including songwriters & DJs. HE has
 established as one of the reputated company from over 7 Years within artist 
 management in India. With over a 100 of talented artists in it's team, HE is providing an extra shine to your exciting events.
 </div>
 </div>
 </div>
 
</br></br>

<h1 class=""><center>Meet The Team</center></h1>
<center>
<div class="container">

	<div class="row">
	
		
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
			
<div class="card ">
  <img class="card-img-top" src="../assets/armaan.png">
  <div class="card-body">
    <h4 class="card-title">ARMAAN SHARMA</h4><h6>CREATIVE DIRECTOR<hr></hr></br></h6>
    <p class="card-text">Our Founder & Director at Humsafar.Co has founded the company in 2010 after his amazing skills in Event Management & Wedding Planning. He has designed over 200 Weddings in Luxury & Destination Theme though out his Wedding Career.</p>

  </div></div></div>
  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <div class="card " >
  <img class="card-img-top" src="../assets/ritika.png">
  <div class="card-body">
     <h4 class="card-title">RITIKA KAUL</h4><h6>ARTIST MANAGER<hr></hr></br></h6>
    <p class="card-text">Managing an artist is a job not less an being an artist itself. Ritika Kaul our experienced and talented Artist Manager knows the importance of properly handling the schedule of Artist (of any field) to make your event a grand success.</p>

  </div>
</div></div>
 <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
  <div class="card " >
  <img class="card-img-top" src="../assets/chetan.png">
  <div class="card-body">
      <h4 class="card-title">CHETAN MEWARA</h4><h6>HOSPITALITY & LOGISTICS HEAD<hr></hr></br></h6>
    <p class="card-text">We know what is the importance of Hospitality & Logistics in any wedding. Our Hospitality & Logistics Head Chetan Mewara keeps his keen observation in finding the right kind of management and hospitality to look after the guests into any type of Wedding.</p>

  </div>
</div></div></div></center>



<?php get_footer('new'); ?>













