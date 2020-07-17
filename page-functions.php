<?php get_header(); ?>
<style>
    .content.wrapper{
        padding:0 !important;
        margin:10px;
    }
.functions h3{
    font-family: Playfair Display, serif;
    font-family: Livvic, serif;
    /* font-family: "EB Garamond", serif; */
    font-size:39px;
    /* font-style: italic; */
    letter-spacing:2px;
    font-weight:500;
}
.function-card {
    margin: 0 120px;
}

.function-card .layout .image{    
    position:relative;
    min-height:300px !important;
    max-height:300px !important;
    overflow:hidden;
}
.function-card .layout .image .quote{   
    position: absolute;
    bottom:0px;
    left:0px;
    max-width:90%;
    background-color:#000000bb;
    color:#fff;
    padding:2px 20px; 
    font-size:20px;
        font-family:Playfair Display, serif;
    margin-bottom:10px;
}
.function-card .layout{
    display:flex;
    justify-content:center;
    flex-wrap: wrap;
    flex-direction:row;
}
.reverse{
    flex-direction:row-reverse !important;
}
.function-card .layout .text{
    display:flex;
    margin-bottom:15px;
    flex-direction:column;
    
}
.function-card .layout .text .title{
    font-family: "EB Garamond", serif;
    font-family: "EB Garamond", serif;
}

.function-card .layout .text .content{    
    font-size:16px;
    font-family: "EB Garamond", serif;
}
.list-group-item-action{   
    color:#333 !important; 
    text-decoration:none !important;   
    position:relative; 
}
.list-group-item-action.active{
    color: #b28f5e !important;
}
.list-group-item-action.active::after{
    display:block;
    content:'';
    position:absolute;
    left:17.5%;
    bottom:15px;
    border-radius:10px;
    background-color:#b28f5e;
    height:2px;
    width:65%;
 }

</style>
<div class="functions mb-5">
<div class="heading my-4">
    <p><?php the_title(); ?></p>
    <h1><span>*</span></h1>
</div>


    <div class="list-group d-flex flex-row mb-5" id="list-tab" role="tablist">
      <a class="list-group-item-action active" id="list-home-list" data-toggle="list" href="#indian" role="tab" aria-controls="home"><center><h3 class="mb-4">Indian Functions</h3></center></a>
      <a class=" list-group-item-action" id="list-profile-list" data-toggle="list" href="#western" role="tab" aria-controls="profile"><center><h3 class="mb-4">Western Functions</h3></center></a>     
    </div>
  
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="indian" role="tabpanel" aria-labelledby="list-home-list">
          
     <?php
$functions = new WP_Query(array(    
    'post_type'=>'functions',
    'meta_key' => 'order',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'type',
            'compare' => '==',
            'value' => 'Indian',            
        ),
    ),
));
$i=0;
while($functions->have_posts())
{
    $functions->the_post();         
    $type = rwmb_meta('type');
    $quote = rwmb_meta('quote');
    $thumbnail_image = rwmb_meta('functions_thumbnail', array( 'size' => 'large' ) );
?>

<div class="function-card">
        <div class="layout <?php 
        if($i%2==0){echo "reverse";}
        ?>">
            <div class="image col-lg-6 col-12 pl-0">           
            <?php foreach ( $thumbnail_image as $image ) {?>
           <img class="col-12 pl-0" src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
            <div class="quote"><?php echo $quote ?></div>
            </div>
            <div class="text col-lg-6 col-12">
                <h3 class="title"><?php the_title(); ?></h3>
            <div class="content">
              <?php the_content(); ?>
            </div>
        </div>
        </div>
    </div>


<?php $i++; } ?>
</div>


      <div class="tab-pane fade" id="western" role="tabpanel" aria-labelledby="list-profile-list">
          
     <?php
$functions = new WP_Query(array(    
    'post_type'=>'functions',
    'meta_key' => 'order',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'type',
            'compare' => '==',
            'value' => 'Western',            
        ),
    ),
));
$i=0;
while($functions->have_posts())
{
    $functions->the_post();         
    $type = rwmb_meta('type');
    $quote = rwmb_meta('quote');
    $thumbnail_image = rwmb_meta('functions_thumbnail', array( 'size' => 'large' ) );
?>

<div class="function-card">
        <div class="layout <?php 
        if($i%2==0){echo "reverse";}
        ?>">
            <div class="image col-lg-6 col-12 pl-0">           
            <?php foreach ( $thumbnail_image as $image ) {?>
           <img class="col-12 pl-0" src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
            <div class="quote"><?php echo $quote ?></div>
            </div>
            <div class="text col-lg-6 col-12">
                <h3 class="title"><?php the_title(); ?></h3>
            <div class="content">
              <?php the_content(); ?>
            </div>
        </div>
        </div>
    </div>


<?php $i++; } ?>

           
    </div>
  </div>
</div>
    
    
    
    
   


    
</div>

<?php get_footer(); ?>