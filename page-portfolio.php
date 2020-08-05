<?php get_header() ?>

<style>

    body {
        font-family: "Myriad Pro",  'Playfair Display', serif;
        font-size: 2rem;
        background-color: #fcf7ff;
    }

    .prev,
    .next,
    .close	{
        position: fixed;
        top: 0;
        width: 15%;
        height: 40%;
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
        font-family: "Myriad Pro",  monospace;
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
	
   .close {
        right: -25%;
	    color: rgba(255,255,255,.9);
	    font-size: 30px;
	    transition: all 0s;
	    height:30px;
	    width:50px;
	    font-family:monospace;
	    border: 0px;
	    padding: 20px;
	    background-color: #000;
    }    

    .active .prev {
        left: 0;
		top: 30%;
    }

    .active .next {
        right: 0;
		top: 30%;
    }
	  
	.active .close {
        right: 5%;
	    top: 4%;
    }

    .overflow {
        overflow: hidden;
    }

    .lightbox-wrapper {
        margin: 5vh auto;
        max-width: 90%;
        display: grid;
        grid-gap: 5px;
		grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-auto-rows: 250px;
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
        margin: 1px;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: stretch;
        align-items: stretch;
        -webkit-box-pack: center;
        justify-content: center;
        //position: relative;
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
        background: rgba(0, 0, 0, .9);
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
	    tarnsition: 0.5s;
	    filter: brightness(50%);
    }
/**
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
	
	**/

    .horizontal {
    	grid-column: span 2;
    }
	
    .vertical {
    	grid-row: span 2;
    }
	
    .big {
    	grid-column: span 2;
    	grid-row: span 2;
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
        font-family: "Myriad Pro",  sans-serif;
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
	
	.heading div{
	    font-size: 21px;
		max-width:80%;
		margin: auto;
	}

    .heading .button {
        background-color: #fcf7ff;
        border: 1px solid #b28f5e;
		color: #b28f5e;
        padding: 5px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 10px 2px;
        cursor: pointer;
		transition: 0.5s;
    }
           
    .heading .button:hover{
		background-color: #b28f5e;
	    color: #fcf7ff;
		transition: 0.5s;
    }
/**
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
	
**/

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

        .lightbox-wrapper div{
            margin:0.1px auto;
        }
        .heading{
             font-size: 30px;
        }
        .heading div{
             font-size: 17px;
        }
        .heading .button {
             font-size: 17px;
        }
    }
	.content.wrapper{        
        width:100% !important;
    }
    .lightbox-wrapper div.show::after{        
        content:'\274C';
        font-size:28px;
        display:block;
        position:absolute;
        top:20px;
        right:20px;        
        z-index:1000;
    }
</style>

        <section class="heading">
		    <p>View our portfolio of events</p>
			<h1><span>*</span></h1>
			<div><p>We've organised many Parties & Events across the world - interested in discussing yours?
			</p>
			<button class="button">Let's Talk</button></div>
        </section>


<a href="#" class="lightboxNav prev"><i class="fas fa-chevron-left  "></i></a>
<a href="#" class="lightboxNav next"><i class="fas fa-chevron-right  "></a>

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

        } else {
            prev.style.display = 'flex';
        }
    }

    function checkNext() {
        if (document.querySelector('.lightbox-wrapper div:last-child').classList.contains('show')) {
            next.style.display = 'none';             
        } else {
            next.style.display = 'flex';
        }
    }


Array.prototype.slice.call(divs).forEach(function (el) {
			el.addEventListener('click', function () {
				this.classList.toggle('show');
				body.classList.toggle('active');
                body.classList.toggle('overflow');
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
        body.classList.add('active');
        
        checkNext();
    });

    next.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);

        show.nextElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.add('active');        
        checkPrev();
    });
	

</script>


<?php get_footer() ?>
