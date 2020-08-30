<?php get_header('new'); ?>
<style>
    body {
        overflow-x: hidden;
        background-color: #fff;
        font-family: "Myriad Pro", "Times New Roman", Times, serif;

    }


    .heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        font-size: 45px;
    }

    .heading p {
        margin: 0;
    }



    .heading h1::before {
        left: 0;
        margin-left: 20%;
    }

    .heading h1:after {
        right: 0;
        margin-right: 20%;
    }

    .caldera-grid {
        width: 70%;
        margin: auto;
        align: center;
    }

    .frm_forms {
        width: 60% !important;
        margin: 0 auto;
    }

    .frm_button_submit {
        background-color: #6ea6e7 !important;
        color: white !important;
        border: 0 !important;


    }

    @media screen and (max-width:600px) {
        .frm_forms {
            width: 100% !important;
        }
    }

    img {
        border: 0 !important;
    }
</style>



<div class="heading">
    <p>Become a Partner</p>
    <h1><span>*</span></h1>
</div>
<br>
<div class="container mb-5">

    <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


            <?php echo do_shortcode('[formidable id=8]'); ?>




        </div>
    </div>
</div>

<?php get_footer('new'); ?>