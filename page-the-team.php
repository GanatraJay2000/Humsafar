<?php get_header(); ?>
<style>
    body{
        background-color:white;        
    }
    .card{
        border:0;
        font-family:"Myriad Pro", sans-serif;
    }
    .card *{
        font-family:"Myriad Pro", sans-serif;
    }
    .card img{
        width:200px;
    }
    @media screen and (max-width:600px){
        .card-body{
            padding: 0;
            margin-top:20px;
        }
    }
</style>
<center>
        <div class="container">
            <center><h1 class="mb-5">The Team</h1></center>
            <div class="row">
                <div class="col-md-4">
                        <div class="card">
                            <center><img src="https://humsafar.mcubeinfosys.com/assets/armaan.png"></center>
                            <div class="card-body">
                                <h5>ARMAAN SHARMA</h5><h6>CREATIVE DIRECTOR</h6>
                                <br />
                                <p class="">Our Founder & Director at Humsafar.Co has founded the company in 2010 after his amazing skills in Event Management & Wedding Planning. He has designed over 200 Weddings in Luxury & Destination Theme though out his Wedding Career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ">
                            <center><img src="https://humsafar.mcubeinfosys.com/assets/ritika.png"></center>
                            <div class="card-body">
                                <h5>RITIKA KAUL</h5><h6>ARTIST MANAGER</h6>
                                <br/>
                                <p class="">Managing an artist is a job not less an being an artist itself. Ritika Kaul our experienced and talented Artist Manager knows the importance of properly handling the schedule of Artist (of any field) to make your event a grand success.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ">
                           <center><img src="https://humsafar.mcubeinfosys.com/assets/chetan.png"></center>
                            <div class="card-body">
                                <h5>CHETAN MEWARA</h5><h6>HOSPITALITY & LOGISTICS HEAD</h6>
                                <br/>
                                <p class="">We know what is the importance of Hospitality & Logistics in any wedding. Our Hospitality & Logistics Head Chetan Mewara keeps his keen observation in finding the right kind of management and hospitality to look after the guests into any type of Wedding.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </center>
<?php get_footer(); ?>