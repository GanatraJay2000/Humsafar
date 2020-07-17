<?php get_header('new'); ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
    @import url('https://db.onlinewebfonts.com/c/39a2c7f346d5cfae7045aeb2fb50d9ad?family=LuloCleanW01-OneBold');

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
      /* //background-color: yellow; */
    }

    .image-container figure {
      margin: 0;
      background: #101010;
    }

    .image-container div#captioned-gallery {
      width: 100%;
      overflow: hidden;
    }

    .image-container figure.slider {
      position: relative;
      width: 500%;
      font-size: 0;
    }

    .image-container figure#slider1 {
      animation: 12s slidy1 infinite;
    }

    .image-container figure#slider1:hover {
      animation-play-state: paused;
    }

    .image-container figure#slider2 {
      animation: 15s slidy2 infinite;
    }

    .image-container figure.slider figure {
      width: 20%;
      height: auto;
      display: inline-block;
      position: inherit;
    }

    .image-container figure.slider img {
      width: 100%;
      height: 28.5vw;
    }

    .image-container figure.slider figure figcaption {
      position: absolute;
      top: 40%;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      width: 80%;
      font-size: 28px;
      padding: .6rem;
      font-family: "LuloCleanW01-OneBold", sans-serif;
    }

    .image-container figure#slider2 figure figcaption {
      right: 0;
    }

    #image1 {
      float: left;
    }

    #image2 {
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

    <div class="corp-container">
      <div id="image1" class="image-container">

        <div id="captioned-gallery">
          <figure id="slider1" class="slider">
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/paris-gallery-3-1024x683.jpg" alt>
              <figcaption>Image Caption 1</figcaption>
            </figure>
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/assets/p03kbhkd.jpg" alt>
              <figcaption>Image Caption 2</figcaption>
            </figure>
            <figure>
              <img
                src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/photo-1522143296900-b2c450f80fa7-1024x683.jpg"
                alt>
              <figcaption>Image Caption 3</figcaption>
            </figure>
            <figure>
              <img
                src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/98d8c3_b8c4e38230de42a0934cec0f94800607_mv2.jpg"
                alt>
              <figcaption>Image Caption 4</figcaption>
            </figure>
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/paris-gallery-3-1024x683.jpg" alt>
              <figcaption>Image Caption 1</figcaption>
            </figure>
          </figure>
        </div>

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
      <div id="image2" class="image-container">
        <div id="captioned-gallery">
          <figure id="slider2" class="slider">
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/paris-gallery-1-1024x576.jpg" alt>
              <figcaption>Image Caption 1</figcaption>
            </figure>
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/Jaybhanusahli.jpg" alt>
              <figcaption>Image Caption 2</figcaption>
            </figure>
            <figure>
              <img
                src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/98d8c3_6d19ecc5f1094b598808b1e848410b42_mv2-1.jpg"
                alt>
              <figcaption>Image Caption 3</figcaption>
            </figure>
            <figure>
              <img
                src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/photo-1490006017569-465ccb897ba1-1024x683.jpg"
                alt>
              <figcaption>Image Caption 4</figcaption>
            </figure>
            <figure>
              <img src="https://humsafar.mcubeinfosys.com/wp-content/uploads/2020/07/paris-gallery-1-1024x576.jpg" alt>
              <figcaption>Image Caption 1</figcaption>
            </figure>
          </figure>
        </div>
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