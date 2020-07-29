
<?php get_header('new'); ?>
<style>
  body {
    overflow-x: hidden;
background-color:white;
    font-family: "Myriad Pro",  "Times New Roman", Times, serif;

  }

a{
    text-decoration:none !important;
 }/*
.modal.show {
    display: block;
    padding-right: 17px;
    overflow: hidden;
}

.modal.show .modal-dialog {    
    height: 100%;
    display: flex;    
    align-items: center;
} */
.img-responsive{
    max-height:500px;
}

  hr {
    width: 60px;
    background-color: black;
    height: 1px;
    margin:10px auto;
  }

.row{
    justify-content:center;
}


  .thumbaa {
    margin: 0px;
    padding: 0px;
  }

  .img-thumbnailaa {
    border: 0px;
    padding: 2px;
    margin-top: 5px;
    background-color: #fff;

    border-radius: 0;
    max-width: 100%;
    height: auto;
    cursor:pointer;

  }


  #buttonaa {

    color: black;
    background-color: white;
    border: 1px solid black;
    padding: 2px 20px 2px 20px;
    transition: background-color .2s, color .2s;
    font-size: 19px;
  }



   #ddaa {
      padding:2px;
       max-height:500px;      
       max-width:500px;      
  } 

  #ssaa:hover {
    opacity: 0.9
  }

  #buttonaa:hover {

    color: white;
    background-color: black;    
  }

  #ccaa {
    justify-content: center;
    margin: 0;    
  }


  #iaa {
    padding: 10px;
  }

 .second-container {
        text-align: center;
        margin: 0px 0 15px 0px;
        font-size: 14px;
        /* margin-bottom: 15px; */
		font-family: "Myriad Pro",  'FuturaLig', sans-serif;
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
        color: #999997;
        margin: 0px 10px;

    }

      .second-container  ul.title li:last-of-type::after {
        content: '';
        margin: 0;
    }


.second-div p{
  font-size: 20px;
  color: #414141;
  margin:0;
}



  @media only screen and (max-width: 350px) {
    #buttonaa {

      color: black;
      background-color: white;
      border: 1px solid black;
      padding: 2px 10px 2px 10px;
      transition: transform .2s;
      font-size: 19px;
    }

    #ccaa {
      display: none;
    }

  }




  @media only screen and (max-width: 765px) {
    .thumbaa {
      width: 30%;
    }

    #ccaa {
      display: none;
    }
  }

  @media only screen and (max-width: 800px) and (min-width: 700px) {
    #ddaa {
      width: 60%;
      height: auto;
    }
  }
</style>


  <div class="container">
    <div class="row">
        <?php
 while(have_posts())
{
    the_post();        
    $artist_thumbnail = rwmb_meta('artist_thumbnail', array( 'size' => 'large' ));
    $gallery = rwmb_meta('artist_gallery', array( 'size' => 'large' ) );         
    ?>
<?php foreach ( $artist_thumbnail as $image ) {?>       
     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="margin-top:auto; margin-bottom:auto; margin-left:0px;">
        <center> <img src="<?php echo $image['url'] ?>" id="ddaa"  alt="Badhshah" width="100%"></center>
      </div>
<?php } ?>


      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-top:auto; margin-bottom:auto; margin-left:0px;">
        <h1>
          <center><?php the_title(); ?></center>
        </h1>
        <h5>
          <center>
               <?php $terms_list = wp_get_post_terms( $post->ID, 'artist_type');
    foreach($terms_list as $key=>$term){
        if($key > 0) {echo ', '; } 
        ?>       
        <?php echo '<a href="'.get_term_link($term).'" alt="">'.$term->name.'</a>'; ?>
    <?php } ?>
          </center>
        </h5>

        <hr>
        </hr>
        <h5 style="color:#9999A8;">
          <center>Know the Artist</center>
        </h5>
        <center><p style="text-align: justify;"><?php the_content(); ?></p></center>
        </br>
        <center>

          <button class="m-1" data-toggle="modal" data-target="#myModal" id="buttonaa">BOOK ARTIST</button>
           
                        <a class="" href="<?php echo site_url('/entertainments/artists'); ?>"><button class="m-1" id="buttonaa">ALL ARTISTS</button></a></center> </br>
        <center>
            
       
            <a target="_blank" href="<?php echo rwmb_meta('facebook'); ?>"> <i class="fab fa-facebook fa-2x text-dark" id="iaa"></i> </a>
            <a target="_blank" href="<?php echo rwmb_meta('youtube'); ?>"><i class="fab fa-youtube fa-2x text-dark" id="iaa"></i></a>
            <a target="_blank" href=" <?php echo rwmb_meta('instagram');     ?>"><i class="fab fa-instagram fa-2x text-dark" id="iaa"></i></a>
        </center>
            <center>
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
              </center>

      </div>
    </div>
    <center>
      <div class="row" id="ccaa">
 <?php $i=1; foreach ( $gallery as $key=>$image ) {?>             
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbaa">

          <img class="img-thumbnailaa" id="ssaa" src="<?php echo $image['url'] ?>" alt="Another alt text" data-toggle="modal"
            data-target="#myModal<?php echo $i; ?>">
        </div>
    
<?php $i++; } ?>
       
      </div>
  </div>
  </br>
 <?php $i=1; foreach ( $gallery as $key=>$image ) {?>             


        <div id="myModal<?php echo $i; ?>" class="modal">
    <div class="modal-dialog">


      <div class="close"><span aria-hidden="true">&times;</span>
      </div>
      <img src="<?php echo $image['url'] ?>" width="100%" class="img-responsive animate__animated animate__fadeIn">
    </div>
  </div>
    
<?php $i++; } ?>
  

  <?php
}
?> 
  <script>
    function centerModal() {
      $(this).css('display', 'block');
      var $dialog = $(this).find(".modal-dialog");
      var offset = ($(window).height() - $dialog.height()) / 2;
      // Center modal vertically in window
      $dialog.css("margin-top", offset);
    }

    $('.modal').on('show.bs.modal', centerModal);
    $(window).on("resize", function () {
      $('.modal:visible').each(centerModal);
    });
  </script>

<?php get_footer('new'); ?>





