<?php get_header('new'); ?>
<!-- <link rel="stylesheet" href="ent_styles.css"> -->
<style>


.thumbee{
  margin:0px;
   padding:0px;
   position:relative;
}
.thumbee .term_title{
  position:absolute;
  font-family: Josefin, serif;
    pointer-events: none;
  font-weight:600;
  color:white;
  font-size:32px;
  font-weight:500;
  bottom:10%;
  z-index:1;
  margin: 0 auto;
  text-shadow: 0px 0px 10px #000000;
  width:100%;  
}
.thumbee .term_title i{
  font-size:10px;
}
.img-thumbnailee
{
 border:0px;
 padding: .25rem;
    background-color: #fff;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}

#ccee{
justify-content:center;
}



@media only screen and (max-width: 765px) {
.thumbee{
width:49%;
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

}


</style>
<body>



<h1 style="font-family:'Playfair Display', serif;"><center>All Artists</center></h1>
<hr></hr></br>
<center>

<div class="container">
	<div class="row" id="ccee">

 <?php

$terms = get_terms( 'artist_type');

    foreach($terms as $key=>$term){
        
        $term_link = get_term_link($term); 
        $term_id = $term->term_id;        
        $term_name = $term->name;        
?>

    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 thumbee ">
    <div class="term_title">
    <?php echo $term_name ?>
    <div>
   <small> <i class="fa fa-arrow-right" aria-hidden="true"></i></small>    </div>
    </div>
        <a class="thumbnail" href="<?php echo $term_link; ?>">
           <img class="img-thumbnailee" id="ddee" src="<?php echo z_taxonomy_image_url($term_id); ?>" />
        </a>
    </div>

<?php
     }

?>          
      </div>
    </div>
  </center>

<?php get_footer('new'); ?>