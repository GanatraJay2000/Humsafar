<?php get_header('new'); ?>
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
}
.thumbee .term_title{
  position:absolute;
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
 padding: .25rem;
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
padding:6px 20px 6px 20px;
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


}


</style>
<body>



<h1 class=""><center>All Artists</center></h1>
<hr></hr></br>
<center>

<div class="container">
	<div class="row" id="ccee">

 <?php

$terms = get_terms( 'artist_type');
// $value='singers';
// $terms = get_term_by('name',$value,'artist_type');
// print_r($terms);
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