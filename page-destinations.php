 <?php get_header(); ?>





	<style>
section a{
	text-decoration:none !important;
	color:#333 !important;
}
section a:hover{
	color:#b28f5e !important;
}

.grid-flex {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    flex-wrap:wrap;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    flex-direction: row;
    -webkit-flex-direction: row;
    -webkit-flex-wrap: wrap;
    -webkit-justify-content: space-around;
}


.col {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

.col-left {
    -webkit-box-ordinal-group: -1;
    -webkit-order: -1;
    -ms-flex-order: -1;
    order: -1;
}

.col-text {
    display: flex;
    justify-content: center;
}

.Aligner-item {
    width: 70%;
}

.col-image {
    background-size: cover;
    background-position: center center;
}

.mybox{
    padding: 50px 50px 50px 50px;
}

.myheading{
    text-align:center;
    font-size:22px;
    font-family: "Batang",serif !important;
}

.playfair {
    font-family: "Batang",serif !important;
} 
.mypara{
    font-size:14px;
    color:dimgray;
    font-style:italic
}

.title {
    font-size: 45px;
    font-family: "Playfair Display",sans-serif !important;
}
.sideheading{
	padding-top:5px;
    font-size: 22px;
    font-family: "Batang",serif !important;
}
.sideheading2{
    text-align:center;
    font-size: 12px;
    font-family: "Batang",serif !important;
    color:dimgrey;
}
.sideheading3{
    text-align:center;
    font-size:20px;
    font-family: "Batang",serif !important;
    color:darkslategrey;
}
.sideheading.sideheading{
	font-size:38px;
}

.lastpara{
    font-family: "Myriad Pro",sans-serif !important;
font-size:16px;
letter-spacing:.75px;
}


@media (max-width: 1080px) {
	.Aligner-item {
    width: 100% !important;
    height:fit-content;
}
}
@media (max-width: 780px) {
    .grid-flex {
        /* min-height: 20em;         */
        display: -webkit-flex;
        -webkit-flex-direction: column;
        flex-direction: column !important;
    }
    .grid-flex *{
        text-align:center;
    }
    .sideheading.sideheading{
	font-size:28px;
}

    .col {
        order: vertical;
    }

    .col-left {
        -webkit-box-ordinal-group: 0;
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0;
    }

    .col-text div p {
        padding:0 !important;
    }

    .Aligner-item {
        width: 90%;
    }
}

@media (max-width: 650px) {
	.mybox{
    padding: 0px !important;
}
.myheading h1{
	font-size:22px;
}
.sideheading h2, .sideheading2 h2, .sideheading3 h2{
	font-size:22px;
}
}




 * {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            padding: 0;
            margin: 0;
        }

        .complex-element {
            margin: 50px auto;
            width: 1000px;
        }

        .dest {
            position: relative;
            display: flex;
        }

        .dest_1 {
            flex-direction: row;
            margin-bottom: 50px;
        }

        .dest_2 {
            flex-direction: row-reverse;
            margin-bottom: 50px;
        }

        .dest img {
            /* width: 665px; */
            height: 513px;
            padding: 0;
            margin: 0;
        }

        .dest .details {
            padding: 30px;
            /* padding-top: 10px; */
        }

        .dest .details .infotext {
            color: #777;
            /* font-size: 16px;
            letter-spacing: 0.6px; */

        }

        .dest .details .title {
            padding-top: 30px;
            position: relative;
            text-align: center;
            color: #555;
            font-size: 32px;
            font-weight: 400;
            font-family: "Playfair Display",sans-serif !important;
        }

        .dest .details .title::after {
            content: '';
            display: block;
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: black;
        }

        .dest .mssg {
            background-color: #333;
            color: white;
            position: absolute;
            height: 160px;
            width: 560px;
            z-index: 1;
            text-transform: uppercase;
            text-align: center;
            padding: 30px;
            box-sizing: border-box;
            font-size: 24px;
    font-family: "Playfair Display",serif !important;

        }

        .dest_1 .mssg {
            right: 0;
            bottom: -80px;
        }

        .dest_2 .mssg {
            left: 0;
            bottom: 10px;
        }
        

        @media screen and (max-width:1200px) {
            .complex-element{
                width:100% !important;
            }       
            .dest {
                display: block;
                margin-bottom: 100px;
            }

            .dest .mssg {
                display: block;
                position: relative !important;
                margin: 20px 0 !important;
                width: 100%;
                z-index: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;                
            }

            .dest img {
                width: 100%;
                height: 500px;
            }

            .dest .title {
                font-size: 44px !important;
                margin: 0 60px;
            }

            .dest .infotext {
                display: none !important;
            }
        }

        @media screen and (max-width:600px) {
                        .dest img {
                width: 100%;
                height: 300px;
            }
            .dest .title {
                font-size: 20px !important;
                margin: 0 auto;
            }
            .dest .mssg {
                padding:0;
                margin:0 auto;
                text-center;
                font-size:20px;
            }
        }







	</style>
</head>
<body>
    <div class="myheading">
        <h1>TIMELESS AND EXCLUSIVE</h1>
    </div>
    <div class="sideheading2">
        <h2>
            THE AESTHETIC OF HUMSAFAR WEDDINGS IS
            ONE GLAMOUR ELEGANCE.
        </h2>
    </div>




<div class="complex-element">
        <div class="dest dest_1">
            <img src="<?php echo get_template_directory_uri() . '/assets_inside/paris.webp' ?>" alt="Paris">
            <div class="details">
                <p class="infotext">A Spring wedding under the Eiffel Tower, with the Fragrance of Fresh Flowers in
                    the air, and colors galore all around, as Reality transcends the boundaries of your Dream
                    wedding.
                </p>
                <h1 class="title">BESPOKE LUX & PERFECT PLAN</h1>
            </div>
            <div class="mssg">WE TAKE YOUR DREAM WEDDING TO IT’S “DESTINATION”, FROM PARIS TO MAURITIUS, FROM DUBAI
                TO GREECE.</div>
        </div>
        <div class="dest dest_2">
            <img src="<?php echo get_template_directory_uri() . '/assets_inside/somehotel.webp' ?>" alt="">

            <div class="details">
                <p class="infotext">With our setup in India we have a huge clientele within India. We also deliver
                    weddings all over the world including some major locations like Paris, Dubai, Greece & Italy. We
                    work with an international clientele, travelling across the world to the finest hotels, resorts
                    and islands for our luxury weddings.
                </p>
                <h1 class="title">DEDICATED TO DESTINATIONS</h1>
            </div>
            <div class="mssg">WE WANT TO MAKE UNFORGETTABLE MEMORIES AND ENJOY EVERY LAST MINUTE OF YOUR EVENT.
            </div>
        </div>
    </div>













    <!-- Griglia alternata testo e immagine, resposive con flexbox.
    <div class="mybox">
<section>	

<a href="<?php //echo site_url('/weddings/destinations/india') ?>">
<div class="d-flex flex-wrap">
<div class="col-md-6 col-12 p-0 m-0" style="max-height:200px"><img style="width:100%;height:100%;" src='https://static.toiimg.com/photo/41522309.cms'>
</div>						
<div class="col-md-6 col-12 px-lg-5 px-0 text-lg-left text-center pt-2">
<h4 class="">Traditional Destinations</h4>

<p class="mypara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique odio velit voluptas omnis rerum accusamus architecto officia inventore non commodi?</p>
<button class="btn btn-dark mb-4">Know More</button>
</div>
</div>
</a>

<a href="<?php //echo site_url('/weddings/destinations/out-of-india') ?>">
<div class="d-flex flex-wrap">
<div class="col-md-6 col-12 p-0 m-0"style="max-height:200px"><img style="width:100%;height:100%;" src='https://www.iata.org/contentassets/4b8ec35d55dd4596a1ee21a75aaab835/paris-330x200.jpg?w=330&h=200&mode=crop&scale=both&v=20190829085556'>
</div>						
<div class="col-md-6 col-12 px-lg-5 px-0 text-lg-left text-center pt-2 col-left">

<h4 class="" >Modern Destinations</h4>

<p class="mypara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique odio velit voluptas omnis rerum accusamus architecto officia inventore non commodi?</p>
<button class="btn btn-dark mb-4">Know More</button>
</div>
</div>
</a>
</section>  -->
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 px-xs-0 text-center" style="margin:auto">
	
			<h2>Destination Weddings</h2>
			<p style="font-size:18px">Marriage laws vary from country to country and we can take the stress out of organising the paperwork. Our destination wedding planners will work with the local government to legalise your marriage in the location of your choice and organise a translator, whether in English, Chinese or other. Organising a wedding can be challenging for most couples and organising one abroad even more so. Scarlet has the experience in destination weddings and whatever the request, wherever the location, we are here to make it happen.
</p>
</div>

                
<div class="col-lg-10 col-12 text-center  mt-5" style="margin:auto">
	<div class=" col-9 mb-3"  style="margin:auto">
		<h2 style="    font-family: 'Playfair Display',serif !important;
"><i> You will never wish to forget an unforgettable memory of your wedding.</i></h2>
	</div>
	<div class="mt-lg-2">
	<p class="lastpara text-justify">
		Enjoying the benefit of located in India our clients engage us for perfect Indian and Traditional wedding plans along with international levels of service delivered at the destination of their choice. Working with local suppliers as well as importing those elements which cannot be reliably sourced locally is one of many things we are good at. Delivering a large destination wedding is a logistic challenge, not least because of the challenge of ensuring a flawless guest experience. We’ve built a highly experienced team of more than 50 Members, as well as a network of local partners in the most popular destinations and so are superbly well equipped to deliver the most complex multi-day destination weddings.
	</p>
</div>                            
</div>

</section>
        </div>


		<?php get_footer(); ?> 