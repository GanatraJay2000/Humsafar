<?php get_header(); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');

    body {
        background-color: #fcf7ff;
    }

    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    h1 {
        font-family: sans-serif;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

    }

    h1:before {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        left: 0;
        margin-left: 20%;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    h1:after {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        right: 0;
        margin-right: 20%;
        top: 30%;
        z-index: -2;
        background-color: #b28f5e;
    }

    .about-part {
        text-align: left;
        font-family: 'playfair display', serif;
    }

    .flex-container {
        display: flex;
        flex-direction: row-reverse;
        flex-wrap: wrap;
        justify-content: space-evenly;
        //background-color: DodgerBlue;
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
            <img src="https://images.pexels.com/photos/3699360/pexels-photo-3699360.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="Humsafar Weddings" width="450" height="500" />
            <div class="on-mobile">
                <p><i>We just love to share a little bit about us.</i></p>
            </div>
        </div>
        <div>
            <p>As the name suggests we are your ultimate Humsafars in planning the new journey of your life you
                could have dreamt of. We at Humsafar Weddings make sure to consider preciseness for every little
                piece of requirement & expectation to the celebration that will be always a memorable highlight in
                your & everybody's long lives.</p>

            <p>NEVER TIRE, With over 7 years of experience, Humsafar Weddings has successfully managed, styled &
                plan more than 500 weddings with incredible themes, all-time priority Satisfied Clients and Happiest
                & Smiling Guests. Our team has over 50 young & passionate members who believe in delivering
                outstanding work performance with their ever new ideas as they are precisely experienced in their
                respective fields. Our experienced Stylists and Planners are trained & groomed to study the needs
                that match the best outcome.</p>

            <p>Humsafar Weddings gains its reputation day by day across the country for our wedding management. As
                our priority is always to deliver beyond expectations, we are growing rapidly in Management &
                planning your most special days. Another highlight at Humsafar's wedding is our Luxurious
                Destination Wedding management. We are specialized in planning a perfect destination wedding at
                places like Udaipur, Jaipur, Agra, Lucknow, Kerala, Mumbai, etc.</p>

            <p>Global extensions in our services for Luxurious and Dream Destination Weddings include Greece,
                Mauritius, Dubai, Singapore, Malaysia, Thailand, Bahrain, Italy, Rome, etc. Our wedding planner
                experts are especially focused on planning a wedding like never before. Our services include a wide
                array of Wedding Themes, Decorations, Planning, Dress Design, Photography, Fireworks,
                Transportation, Hospitality, etc. We always provide end-to-end service with guaranteed satisfaction
                as we know "Client satisfaction is the main and only asset of any service."</p>
        </div>

    </div>
    <h1><span>*</span></h1>
    <br>
    <br>
    <br>
</div>
<?php get_footer(); ?>