<?php get_header(); ?>

<style>

    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    h1 {
        font-family: "Myriad Pro",sans-serif !important;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

    }

    h1::before,
    h1::after {
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

    h1::before {
        left: 0;
        margin-left: 20%;
    }

    h1:after {
        right: 0;
        margin-right: 20%;
    }

    .about-part {
        text-align: left;
        font-family: "Myriad Pro",sans-serif !important;
    }

    .flex-container {
        display: flex;
        flex-direction: row-reverse;
        flex-wrap: wrap;
        justify-content: space-evenly;        
    }

    .flex-container>div {
        margin: 1px;
        padding: 1px;
        font-size: 16px;
        max-width: 500px;
        flex-basis: 45%;
    }

    .flex-container .image {
        overflow: hidden;
        padding: 10px;
        text-align: right;
    }

    .flex-container .image div p {
        font-size: 35px;
        color: #2f2e2e;
    }

    @media screen and (min-width : 906px) {
        .on-mobile {
            visibility: hidden;
        }
    }

    @media screen and (max-width : 906px) {
        .flex-container>div {
            flex-basis: 100% !important;
        }

        .on-mobile {
            visibility: visible;
        }

        .on-desk {
            visibility: hidden;
            display: none;
        }

        .flex-container>div {
            text-align: center;
        }

        .flex-container .image {
            text-align: center;
        }
		
		.flex-container .image img{
            width:100%;
        }
		
    }

    @media screen and (max-width : 700px) {

        .heading h1::before,
        .heading h1::after {
            width: 100px;
        }
		
		.flex-container>div {
			font-size: 12px;
        }
		
    }

    @media screen and (max-width : 500px) {

        .heading{
		    font-size:30px;
		}
		
		.heading p{
		    margin:0;
		}
		
		.heading h1::before,
        .heading h1::after {
            width: 60px;
        }
		
		.flex-container .image div p {
            font-size: 25px;
       }
    }
</style>

<div class="about-part">
    <div class="heading">
        <p>Get to know about us</p>
        <h1><span>*</span></h1>
    </div>
    <div class="flex-container">

        <div class="image">
            <div class="on-desk">
                <p><i>We just love to share a little bit about us.</i></p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets_inside/about_us_page_img.jpg' ?>"
                alt="Humsafar Weddings" width="450" height="500" />
            <div class="on-mobile">
                <p><i>We just love to share a little bit about us.</i></p>
            </div>
        </div>
        <div class="text-justify">
        <p>HUMSAFAR WEDDINGS is your one stop destination for all your wedding related tasks. We are your ULTIMATE humsafars in turning your dreams into reality.</p>
        <p>With over 7 years of experience in the field of wedding planning, HUMSAFAR has successfully planned over 500 weddings. We work hard to satisfy our clients and to fulfill all their desires.</p> 
        <p>Our team has over 50 young and passionate individuals, who put in all their heart and hard work to make your wedding the most memorable moment for you and your entire guest list. </p>
 <p>Humsafar Weddings is gaining its reputation across the country for wedding management. We excel at providing our couples with the best and most beautiful DESTINATION WEDDINGS. We are specialized in planning and managing weddings in the most exotic locations of the country including Udaipur, Agra, Jaipur, Kerala and substantially more. Our services extend to the global market as well. We plan weddings in the dreamiest locations which include: Greece, Mauritius, Thailand, Italy and appreciably more. </p>
<p>We got you all covered from choosing your wedding locations, beautiful wedding attires, wedding themes, wedding feast, grand entries to taking care of your guests.</p>


        </div>



    </div>
    <div class="heading">
        <h1><span>*</span></h1>
    </div>
    <br>
    <br>
    <br>
</div>
<?php get_footer(); ?>