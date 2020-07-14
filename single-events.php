<?php get_header(); ?>
    <style>
        .prev,
        .next {
            position: fixed !important;
            top: 0;
            width: 15%;
            height: 100%;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            text-decoration: none !important;
            z-index: 999;
            color: rgba(255, 255, 255, .5) !important;
            font-size: 5rem;
            font-family: monospace;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .prev:hover,
        .next:hover {
            color: rgba(255, 255, 255, 1) !important;
        }

        .prev {
            left: -25%;
        }

        .next {
            right: -25%;
        }

        .active .prev {
            left: 0;
        }

        .active .next {
            right: 0;
        }

        .overflow {
            overflow: hidden;
        }

        .lightbox-wrapper {
            --repeat: auto-fill;
            --row-height: 250px;
        }

        @media (min-width:1040px) {
            .lightbox-wrapper {
                --repeat: 3;
                --row-height: 250px;
            }
        }



        @media (min-width:2040px) {
            .lightbox-wrapper {
                --repeat: 3;
                --row-height: 450px;
            }
        }

        @media (max-width:1040px) {
            .lightbox-wrapper {
                --repeat: 2;
                --row-height: 250px;
            }
        }

        .lightbox-wrapper {
            /* margin: 10vh auto;
            max-width: 65%; */
            display: grid;
            grid-gap: 5px;
            grid-template-columns: repeat(var(--repeat, auto-fill), minmax(250px, 1fr)) !important;
            /* grid-auto-rows: var(--row-height); */
            grid-auto-flow: dense;
        }

        .lightbox-wrapper div {
            text-align: center;
            padding: 1rem 0;
            color: white;
            font-size: 3rem;
            text-transform: uppercase;
            background: rgba(0, 0, 0, .2);
            overflow: hidden;
            padding: 0;
            margin: 5px;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: stretch;
            align-items: stretch;
            -webkit-box-pack: center;
            justify-content: center;
            position: relative;
        }

        .lightbox-wrapper div img {
            width: 100%;
            height: 100%;
            display: block;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            -webkit-transition: all .5s;
            transition: all .5s;
        }



        .lightbox-wrapper div.show::before {
            content: '';
            display: block;
            position: fixed;
            z-index: 555;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .5);
        }


        main.lightbox-wrapper div.show img {
            position: fixed;
            top: 0;
            left: 0;
            margin: 30px;
            align-self: center;
            -o-object-fit: contain;
            object-fit: contain;
            z-index: 666;
            width: calc(100% - 60px);
            height: calc(100% - 60px);
            -webkit-filter: drop-shadow(0 3px 15px black);
            filter: drop-shadow(0 3px 15px black);
            -webkit-cursor: url('/humsafar/assets/close-button.png'), -webkit-no-drop;
            cursor: url('/humsafar/assets/close-button.png'), no-drop;
            /* custom cursor to signal close on click */
        }

        main.lightbox-wrapper div:not(.show):hover img {
            cursor: pointer;
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .left {
            grid-column-start: 1;
        }

        .center {
            grid-column-start: 2;
            /* grid-column-end: span 2;
        grid-row-end: span 2; */
        }

        .right {
            grid-column-start: -2;
        }



        .lightbox-wrapper .active div:not(.show) img {
            -webkit-filter: blur(3px);
            filter: blur(3px);
        }

        @media screen and (min-width:1000px) {
            .horizontal {
                grid-column-end: span 2;
            }

            .vertical {
                grid-row-end: span 2;
            }

            .big {
                grid-column-end: span 2;
                grid-row-end: span 2;
            }

            .big.right {
                grid-column-start: -3;
                grid-column-end: span 2;
                grid-row-end: span 2;
            }
            .full{
                grid-column-start:1;
                grid-column-end:-1;
            }
        }

        @media screen and (max-width : 800px) {
            main.lightbox-wrapper {
                max-width: 100% !important;
            }

        }


        @media screen and (max-width: 600px) {
            .lightbox-wrapper {
                max-width: 100% !important;
                display: flex;
                flex-wrap: wrap;
            }

            .lightbox-wrapper div {
                margin: 10px;
            }
        }

        /********************************************/

        body {
            background-color: #fcf7ff;
            margin: 0;
            padding: 0;
        }

        .post-part {
            font-family: 'playfair display', serif;
        }

        .date {
            font-family: 'FuturaLig', sans-serif;
            color: #3d3d3d;
            font-size: 12px;
        }

        .date p {
            margin: 1% 0;
        }

        .date a {
            text-decoration: none;
            color: #3d3d3d;
        }

        .name {
            font-size: 28px;
        }

        .name p {
            margin: 1% 0;
        }

        .name a {
            text-decoration: none;
            color: #2f2e2e;
        }

        .name:hover a {
            color: #b28f5e;
        }

        .text {
            font-family: 'FuturaLig', sans-serif;
            font-size: 20px;
            color: #3d3d3d;
        }

        .text p {
            margin: 1% 0;
        }

        .text a {
            text-decoration: none;
            color: #3d3d3d;
        }

        .my-my-container {
            margin: 10px 10px;
            padding: 10px;            
            //background-color:#bababa;
        }

        .image {
            margin: 20px auto;
            //background-color: red;
            height: 400px;
            overflow: hidden;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .kebab {
            float: right;
            margin: 0 2%;
        }



        .title{
            text-align:center;
            font-size:72px;
        }


        /* Change styles for  small screens */
        @media screen and (max-width: 800px) {
            .modal-content {
                margin-top: 0;
            }

            .my-container {
                width: 100%;
            }
            .title{                
                font-size:48px;
            }
        }


        @media screen and (max-width : 600px) {


            .my-container {
                width: 100%;
            }

            .image {
                text-align: center;
                height: 250px;
            }

            .image img {
                object-fit: fill;
            }

            .name p {
                margin: 8px;
            }

            .text p {
                margin: 8px;
            }

            .date p {
                margin: 8px;
            }

            hr {
                width: 100%;
            }
            .title{                
                font-size:36px;
            }


            .post-part .firstbtn {
                background-color: #bba45b;
                border: 1px solid #bba45b;
                color: white;
                float: right;
            }
            .content.wrapper{
                padding:0 !important;
            }
        }
    </style>

    <div class="post-part mx-lg-5 mx-0">

        <div class="my-container">
            <p><a href="<?php echo site_url('/weddings/clients'); ?>">Go back to all posts</a></p>
            <?php
            while(have_posts())
            {
                the_post();
                $location = rwmb_meta('location');
                $event_date = rwmb_meta('event_date');                
                $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
                $gallery = rwmb_meta('gallery', array( 'size' => 'large' ) ); 
                
                $eventDate = new DateTime($event_date);                
                ?>

            
            <div class="name">
                <p class="title"><?php the_title(); ?></p>
            </div>

            <div class="image">
                <?php foreach ( $thumbnail_image as $image ) {?>             
                    <img id="my_img_1" src="<?php echo $image['url'] ?>" alt="">
                <?php } ?>
            </div>


            <div class="text">
                <p> <?php the_content(); ?>
                </p>
                <br>
                <hr style="height:1px;border-width:0;background-color:#cccccc">
            </div>

            <div class="date">
                <p><?php echo $location; ?> &nbsp;&nbsp;<?php echo $eventDate->format('M').' '.$eventDate->format('dS').', '.$eventDate->format('Y'); ?></p>             
            </div>
        </div>
    </div>


    <a href="#" class="lightboxNav prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
    <a href="#" class="lightboxNav next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<div class="mx-lg-5 mx-0">
    <main class="lightbox-wrapper">
        <!-- <div class="">
            <img src="<?php echo $thumbnail[107]['url'] ?>" alt="">
                </div> -->
        <?php foreach($gallery as $image){ ?>
            <div class="<?php echo $image['description'] ?>">
            <img src="<?php echo $image['url'] ?>" alt="">
            </div>
            
        <?php } ?>        
    </main>
</div>

<?php //if(is_single()) comments_template(); ?>
            <?php } ?>

   
    <script>
        const divs = document.querySelectorAll('main.lightbox-wrapper div');
        const body = document.body;
        const prev = document.querySelector('.lightboxNav.prev');
        const next = document.querySelector('.lightboxNav.next');

        function checkPrev() {
            if (document.querySelector('.lightbox-wrapper div:first-child').classList.contains('show')) {
                prev.style.display = 'none';
                // body.classList.toggle('overflow');

            } else {
                prev.style.display = 'flex';
            }
        }

        function checkNext() {
            if (document.querySelector('.lightbox-wrapper div:last-child').classList.contains('show')) {
                next.style.display = 'none';
                // body.classList.toggle('overflow');
            } else {
                next.style.display = 'flex';
            }
        }

        Array.prototype.slice.call(divs).forEach(function (el) {
            el.addEventListener('click', function () {
                this.classList.toggle('show');
                // body.classList.toggle('overflow');
                body.classList.toggle('active');
                checkNext();
                checkPrev();
            });
        });

        prev.addEventListener('click', function () {
            const show = document.querySelector('.show');
            const event = document.createEvent('HTMLEvents');
            event.initEvent('click', true, false);

            show.previousElementSibling.dispatchEvent(event);
            show.classList.remove('show');
            body.classList.toggle('active');
            checkNext();
        });

        next.addEventListener('click', function () {
            const show = document.querySelector('.show');
            const event = document.createEvent('HTMLEvents');
            event.initEvent('click', true, false);

            show.nextElementSibling.dispatchEvent(event);
            show.classList.remove('show');
            body.classList.toggle('active');
            checkPrev();
        });
    </script>
