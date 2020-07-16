<?php get_header('new'); ?>
	<style>

/* @import url('https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig'); */
	
*{
margin: 0;
padding: 0;
}
body{
  background-color:white;
}

.singer-part{
  font-family: serif;
  text-align:center;
}

.heading{
  color: #292929;
  font-size: 36px;
  margin: 10px;
}

.flex-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  //background-color: DodgerBlue;
  padding: 20px;
  margin: 10px 8%;
}

.img-container {
  position: relative;
  width: 230px;
  margin:8px;
}

.image {
  display: block;
  width: 100%;
  max-height: 214.01px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  transition: .5s ease;
  background-color: rgb(0,0,0,0);
}

.img-container:hover .overlay {
  background-color: rgb(0,0,0,0.7);
}

.text {
  color: white;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  opacity:0;
  transition: .5s ease;
}

.img-container:hover .overlay .text{
  opacity:1;
}

.text p{
  font-family: 'FuturaLig', sans-serif;
  margin-top: 5px;
}

@media screen and (max-width: 1100px){
  
  .text{
    font-size: 12px;
  }
  
}

.second-div p{
  font-size: 20px;
  color: #414141;
}

    .second-container {
        text-align: center;
        margin: 10px 0;
        font-size: 20px;
        margin-bottom: 15px;
		font-family: 'FuturaLig', sans-serif;
    }

        .second-container ul.title {
        padding: 0;
        margin: 0;
        text-align: center;
    }

     .second-container   ul.title li {
        display: inline-block;
        margin: 0;
    }
	
    .second-container	ul.title li a{
	  color: #999997;
	}

    .second-container    ul.title li::after {
        content: '|';
        margin: 0px 10px;

    }

      .second-container  ul.title li:last-of-type::after {
        content: '';
        margin: 0;
    }



@media screen and (max-width: 700px){
  
  .flex-container {
    margin:0;
  }
  
  .img-container{
    width:190px;
  }
  
  .text{
    font-size: 14px;
  }
}

@media screen and (max-width: 500px){

  .img-container{
    width:130px;
	margin:4px;
  }

}
	
	</style>
    </head>	
    <body>
	
	    <div class="singer-part">
		<?php $tax = $wp_query->get_queried_object(); ?>
		    <div class="heading">
			    <p><?php echo $tax->name; ?></p>
				<hr style="margin:5px auto;width:60px;height:2px;border-width:0;background-color:#292929">
			</div>
			<div class="flex-container">
              
        
        <?php

        while(have_posts()){      
            the_post();
            $thumbnail_image = rwmb_meta('artist_thumbnail', array( 'size' => 'medium' ) );
        ?>

        <div class="img-container">
          <?php foreach ( $thumbnail_image as $image ) { ?>
          <img class="image" src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>"> 
          <?php } ?>
          <a href="<?php the_permalink(); ?>">
            <div class="overlay">
              <div class="text">
                <?php the_title(); ?>
                <p>
                  <?php //echo $tax->name ?>  
                </p>
              </div>
            </div>
          </a>
        </div>

        <?php
            }

        ?>
			</div>
			<div class="second-div">
        <p>FIND ALL</p>
        <div class="second-container">
            <ul class="title">
              <?php
              $terms = get_terms( 'artist_type');
              foreach($terms as $key=>$term){
        
                $term_link = get_term_link($term); 
                $term_id = $term->term_id;        
                $term_name = $term->name;     
              ?>

              <li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></li>
              
              <?php } ?>           
            </ul>
          </div>
			</div>
		</div>
<?php get_footer('new'); ?>