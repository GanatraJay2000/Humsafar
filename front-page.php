<?php wp_head(); ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Roboto+Slab:wght@200;300&display=swap"
    rel="stylesheet" />
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-color: #2a2a2a;
        /* background: linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
          linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
          linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
          linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
          linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
          linear-gradient(
            #1d1d1d 25%,
            #1a1a1a 25%,
            #1a1a1a 50%,
            transparent 50%,
            transparent 75%,
            #242424 75%,
            #242424
          );
        background-color: #131313;
        background-size: 20px 20px; */
        /* background: radial-gradient(black 15%, transparent 16%) 0 0,
          radial-gradient(black 15%, transparent 16%) 8px 8px,
          radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%) 0 1px,
          radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%) 8px 9px;
        background-color: #282828;
        background-size: 16px 16px; */
        /* background-image: url("./hotel-wallpaper-black.png"); */
        background-image: url("./assets/5-dots.png");
        background-attachment: fixed;
        /* background-image: url("./webb-dark.png"); */
        color: #aaa;
        padding: 0 !important;
        margin: 0 !important;
        width: 100vw;
        max-width: 100%;
    }


    .front-page-view {
        height: 100vh;
        width: 100%;
        padding: 0 !important;
        margin: 0 !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .front-page-view .content {
        width: 1000px;
        height: 400px;
        margin-top: 85px;
        display: flex;
    }

    .front-page-view .content .items {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 0;
        padding-top: 10px;
    }

    .front-page-view .content .entertainment.items {
        padding-top: 0;
    }

    /* .front-page-view .content .wedding { */
    /* } */
    .front-page-view .content .entertainment {
        border-left: 1.5px solid #ddd;
    }

    .front-page-view .content .items .link {
        height: 200px;
        width: 320px;
        /* border: 1px solid lightcyan; */
        text-align: center;
    }

    .front-page-view .content .items .link .image img {
        height: 100px;
    }

    .front-page-view .content .wedding.items .link .image img {
        height: 125px;
    }

    .front-page-view .content .items .link .title {
        font-size: 32px;
        color: white;
    }

    .front-page-view .content .wedding.items .link .title {
        color: rgb(255, 227, 117);
        font-weight: 100;
        font-family: "EB Garamond", serif;
        /* font-family: "Fondamento", cursive;
        font-family: "EB Garamond", serif;  font-style: italic;
        font-family: "Great Vibes", cursive; /* letter-spacing: 3px;
        font-family: "Lobster Two", cursive;
        font-family: "Lobster Two", cursive; /* font-style: italic;
        font-family: "Playfair Display", serif;
        font-family: "Playfair Display", serif; /* font-style: italic;
        font-family: "Prata", serif; */
    }

    .front-page-view .content .entertainment.items .link .title {
        margin-top: 5px;
        font-family: "Roboto Slab", serif;
        font-weight: 200;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .front-page-view .content .entertainment.items .link .title div {
        font-weight: 300;
        letter-spacing: 3px;
        font-size: 30px;
    }

    .permalink a {
        padding: 3px 30px;
        font-family: "EB Garamond", serif;
        font-size: 17px;
        cursor: pointer;
        border: 2px solid transparent;
        box-sizing: border-box;
        text-decoration: none;
    }

    .wedding .permalink a {
        background-color: #deb158;
        color: #ffffff;
    }

    .wedding .permalink a:hover {
        border: 2px solid #deb158;
        background-color: transparent;
        color: #deb158;
    }

    .entertainment .permalink a {
        background-color: white;
        color: black;
    }

    .entertainment .permalink a:hover {
        border: 2px solid white;
        background-color: transparent;
        color: white;
    }

    footer.connects {
        color: #aaa;
        margin: 0 150px;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    footer span {
        padding: 0 5px;
        font-size: 20px;
    }

    footer a {
        color: #aaa !important;
    }

    .front-page-view .content .items hr {
        margin: 20px 120px 20px 120px;
        border: 1px solid #aaa !important;
    }

    @media screen and (max-width: 768px) {
        .front-page-view .content .entertainment {
            border: 0;
        }

        .front-page-view .content {
            position: relative;
            flex-direction: column;
            margin-top: 20px;
            height: 100%;
        }

        .front-page-view .content .items .link .image img {
            height: 85px !important;
        }

        .front-page-view .content .items .link .title {
            font-size: 32px !important;
        }

        .front-page-view .content .entertainment.items .link .title {
            font-size: 22px !important;
        }

        .front-page-view .content .entertainment.items .link .title div {
            font-size: 22px !important;
        }

        footer.connects {
            flex-direction: column;
            margin: 10px 0;
            font-size: 16px;
            width: 100vw;
            text-align: center;
        }

        footer.connects div {
            margin: 10px 0;
        }
    }
</style>
</head>

<body>
    <div class="front-page-view">
        <div class="content">
            <div class="items wedding">
                <div class="link">
                    <div class="image">
                        <img src="./assets/icon.png" alt="" />
                    </div>
                    <div class="title">Humsafar Weddings</div>
                    <hr />
                    <div class="permalink"><a href="<?php echo site_url('/weddings'); ?>">Enter Site</a></div>
                </div>
            </div>
            <div class="items entertainment">
                <div class="link">
                    <div class="image">
                        <img src="./assets/white-logo.png" alt="" />
                    </div>
                    <div class="title">
                        <div>Humsafar</div>
                        Entertainments
                    </div>
                    <hr />
                    <div class="permalink"><a href="<?php echo site_url('/entertainments'); ?>">Enter Site</a></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="connects">
        <div>+91 83053 77774 &nbsp;<a href="mailto:weddings@humsafar.co">weddings@humsafar.co</a></div>
        <div class="text-lg-center">
            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
            <span><i class="fab fa-instagram" aria-hidden="true"></i></span>
            <span><i class="fab fa-twitter" aria-hidden="true"></i></span>
            <span><i class="fab fa-linkedin" aria-hidden="true"></i></span>
            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
        </div>
    </footer>