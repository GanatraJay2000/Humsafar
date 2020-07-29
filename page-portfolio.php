<?php get_header() ?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Playfair Display', serif;

        background-color: #fcf7ff;
    }

    .prev,
    .next {
        position: fixed;
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
        margin: 10vh auto;
        max-width: 70%;
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
        -webkit-cursor: url('<?php echo get_template_directory_uri().'/assets_inside/close-button.png'?>'), -webkit-no-drop;
        cursor: url('<?php echo get_template_directory_uri().'/assets_inside/close-button.png'?>'), no-drop;
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


    .heading {
        margin-top: 20px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    .heading p {
        margin: 0;
    }

    .heading h1 {
        font-family: sans-serif;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

    }

    .heading h1::before,
    .heading h1::after {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    .heading h1::before {
        left: 0;
        margin-left: 20%;
    }

    .heading h1:after {
        right: 0;
        margin-right: 20%;
    }

    @media screen and (min-width:1124px) {
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

    @media screen and (max-width : 700px) {
        main.lightbox-wrapper {
            max-width: 100% !important;
        }

        .heading h1::before,
        .heading h1::after {
            width: 100px;
        }
    }

    @media screen and (max-width : 500px) {

        .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
    }

    @media screen and (max-width: 600px) {
        .lightbox-wrapper {
            display: flex;
            flex-wrap: wrap;
            /* margin: 10px;
                width: 100vw !important; */
        }

        .lightbox-wrapper div {
            margin: 10px auto;
        }
    }
</style>

<section class="heading">
    <p>Have a look at our work</p>
    <h1><span>*</span></h1>
</section>


<a href="#" class="lightboxNav prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
<a href="#" class="lightboxNav next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
<?php while(have_posts()){
    the_post();
    $portfolio = rwmb_meta('portfolio', array( 'size' => 'large' ) ); 
    ?>
    <main class="lightbox-wrapper">
        <?php foreach($portfolio as $image){ ?>
            <div class="<?php echo $image['description'] ?>">
            <img src="<?php echo $image['url'] ?>" alt="">
            </div>
        <?php } ?>        
    </main>
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


<?php get_footer() ?>