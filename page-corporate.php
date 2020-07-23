<?php get_header('new'); ?>
  <style>

    * {
      margin: 0;
      padding: 0;
    }

    @keyframes slidy1 {
      0% {
        left: 0%;
      }

      20% {
        left: 0%;
      }

      25% {
        left: -100%;
      }

      45% {
        left: -100%;
      }

      50% {
        left: -200%;
      }

      70% {
        left: -200%;
      }

      75% {
        left: -300%;
      }

      95% {
        left: -300%;
      }

      100% {
        left: -400%;
      }
    }

    @keyframes slidy2 {
      0% {
        left: -400%;
      }

      20% {
        left: -400%;
      }

      25% {
        left: -300%;
      }

      45% {
        left: -300%;
      }

      50% {
        left: -200%;
      }

      70% {
        left: -200%;
      }

      75% {
        left: -100%;
      }

      95% {
        left: -100%;
      }

      100% {
        left: 0%;
      }
    }


    * {
      box-sizing: border-box;
    }

    .corp-part {
      font-family: serif;
      text-align: center;
      position: relative;
    }

    /*********************************/

    .heading {
      color: #292929;
      font-size: 36px;
      margin: 20px;
    }

    .corp-container {
      width: 90%;
      height: 30vw;
      /* //background-color: blue; */
      padding: 10px;
      margin: 10px auto;
    }

    .image-container {
      width: 65%;
      height: 100%;  
      background-color:#77777777;    
    }

    .image-container .image_block{
      height:100%;
      width:100%;      
      background-color:teal;
      position:relative;
    }
        .image-container .image_block .image{
          position:absolute;
          top:0;
          left:0;
          height:100%;
          width:100%;
        }
        .image-container .image_block .image img{          
          height:100%;
          width:100%;
        }
    .image-container .image_text{
      position:absolute;  
      top:45%;    
      width:60%;
      font-size:35px;  
      font-weight:700;
      font-family:sans-serif;
      color:white;
      padding:10px 0;    
      background-color:#333339cd;
    }

    .image-container.image1 .image_text{
      left:0;
    }
    .image-container.image2 .image_text{
      right:0;
    }

    .image1 {
      float: left;
    }

    .image2 {
      float: right;
    }

    .text-container {
      width: 34%;
      height: 100%;
      /* //background-color: yellow; */
      text-align: justify;
      font-family: verdana, geneva, sans-serif;
      line-height: 22px;
      font-size: 14px;
    }

    #text1 {
      float: right;
    }

    #text2 {
      float: left;
      margin-top: 40px;
      height: 90%;
    }

    .text-container p {
      padding: 20px;
    }

    .center-part {
      position: absolute;
      left: 25%;
      top: 48%;
      width: 50%;
      height: 110px;
      color: white;
      font-size: 28px;
      background-color: #000;
      text-align: center;
      font-family: 'playfair display', serif;
      z-index: 4;
    }

    .center-part p {
      margin: 15px auto;
      width: 70%;
    }

    @media screen and (max-width : 1200px) {

      .corp-container {
        width: 100%;
        height: 100%;
        padding: 10px;
        margin: 10px auto;
      }

      .image-container {
        width: 92%;
        height: 40vw;
        margin: auto;
      }

      .text-container {
        width: 100%;
        height: 100%;
        margin: auto;
        padding: 0px;
      }

      .image-container figure.slider img {
        height: 40vw;
      }

      .image-container figure.slider figure figcaption {
        font-size: 20px;
      }

      #image1,
      #image2,
      #text1,
      #text2 {
        float: none;
        margin-top: 10px;
      }

      .center-part {
        position: relative;
        left: 15%;
        width: 70%;
        height: 110px;
      }

      .center-part p {
        margin: 15px auto;
        padding: 15px;
        width: 90%;
      }

    }

    @media screen and (max-width : 700px) {

      .center-part {
          position:relative;
          margin:0 !important;
        font-size: 22px;
        height: fit-content;
      }
      .center-part p{
          margin:0  auto !important;
          padding:0 !important;
      }

    }

    @media screen and (max-width : 420px) {

      .center-part {
        font-size: 18px;
        /* height: 100%; */
      }

      .text-container {
        line-height: 18px;
        font-size: 12px;
      }

      .image-container figure.slider figure figcaption {
        font-size: 15px;
      }

      .corp-container {
        width: 100%;
      }

      .image-container figure.slider img {
        width: 100%;
        height: 42vw;
      }

    }


    /*********************************/
  </style>
</head>

<body>

  <div class="corp-part">

    <div class="heading">
      <p>Corporate Events</p>
      <hr style="margin:5px auto;width:60px;height:2px;border-width:0;background-color:#292929">
    </div>
    <?php $logos = new WP_Query(array(
    'post_type'=>'page',    
));
$i=0; 
$post_id = 108;
$slideshow = rwmb_meta('slide_images', array( 'size' => 'large' ) , $post_id);
$slideshow = array_values($slideshow);
$list_values = rwmb_meta('list', array() , $post_id);
?>

    <div class="corp-container">
      <div class="image-container image1 owl-carousel owl-theme">
      <?php foreach ( $slideshow as $key=>$image ) { if($key == 3){break;} ?>         
        <div class="image_block">
          <img src="<?php echo $image['url'] ?>"  class="image"  alt="">
          <div class="image_text">
            <?php echo $list_values[$key][0]; // Name    ?>
          </div>
        </div>              
      <?php } ?>                   
      </div>          
      <div id="text1" class="text-container">
        <p>Your corporate event is an important time to boost morale and get your business associates,
          partners, shareholders and contributors excited about your mission and where your company is
          headed. We will make the party planning fun and allow you to relax knowing that every detail
          is covered and your corporate event is in the hands of expert planners - whether you want us
          to plan every aspect of your event or provide needed support in presenting exciting options
          to your clients.
        </p>
      </div>
    </div>

    <div class="center-part">
      <p>Plan & Execute An Impressive Event That Makes You Shine</p>
    </div>

    <div class="corp-container">
      <div class="image-container image2 owl-carousel owl-theme">
      <?php foreach ( $slideshow as $key=>$image ) { if($key >= 3){ ?>            
        <div class="image_block">
          <img src="<?php echo $image['url'] ?>"  class="image"  alt="">
          <div class="image_text">
            <?php echo $list_values[$key][0]; // Name    ?>
          </div>
        </div>              
      <?php } } ?>
    </div>           
      <div id="text2" class="text-container">
        <p>Humsafar Entertainments is your corporate planning specialists who is possessed with all of
          the talent and connections needed to coordinate an unforgettable event of any size or scope while
          respecting your budget. Working with HE to plan your event, allows your team to focus on their
          core competency while placing the responsibility of planning and executing the event in the hands
          of a seasoned professional. He's event planners will ensure your ideas translate into a spectacular
          corporate function that will impress your guests.
        </p>
      </div>
    </div>

  </div>

<?php get_footer('new'); ?>