<?php get_header();?>
<style>

.content{
    width:80%;
    margin:0 auto;
}
        .block-image{
            height:90%;
            width:100%;
            position:relative;
        }
        .block-image img{
            height:100%;
            width:100%;            
        }
        .my_block{
            position:relative;
            box-sizing:border-box;            
            /* border:1px solid purple; */
            padding-top:30px;            
        }
        .my_block .title{
            min-height:10%;
            margin:0px;
            font-size:23px;   
            padding-top:10px;         
            /* border:1px solid; */
        }
        .block_content{            
            box-sizing:border-box;
            /* border:1px solid red;             */
            position:absolute;
            bottom:0%;           
            opacity:0;            
            visibility:hidden;
            transition:1s;
            background-color:#000000aa;
            color:white;
            font-size:19px;
            display:grid;
            place-items:center;            
            max-height:0;
            height:100%;
            width:100%;            
            padding:20px;
        }
        .my_block:hover .block_content{                                               
                opacity:1;
                visibility:visible;                
                max-height:100%;
            }   
            @media screen and (max-width:1100px)     {
                    .block_content{ 
                        font-size:1.7vw;
                    }
                    .content{
                        width:90%;
                    }
            }
            @media screen and (max-width:768px)     {
                    .block_content{ 
                        font-size:4.4vw;
                    }
                    .content{
                        width:100%;
                    }
            }
            @media screen and (max-width:340px)     {
                    .my_block .title{
                        font-size:23px;
                    }
            }

</style>
 <div class="service-part">
    <h1  style="font-family:Playfair Display;text-align:center;margin-bottom:40px;">Services</h1>
        
        <div class="d-flex flex-wrap justify-content-center content">
            <div class="col-md-6 col-12 text-center">
                <div class="my_block">
                    <div  class="block-image">
                         <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Budget planning is essential as it cuts off the extra spending and utilize the money in a planned way. But, we  can actually help you out to achieve your dreams and have a perfect wedding just according to your choice and most importantly providing you with the best according to your budget. 
                        </div>
                    </div>
                    <div class="title">Budget Management</div>
                </div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                                  Planning the destination is a specialization of Humsafar weddings. Is it a traditional palace like or a beach with picturesque sceneries you like, we've got you covered. We provide Pan India and foreign destination services with tip to top organization. 
                        </div>
                    </div>
                <div class="title">Venues & Destination</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                         Food stations are the most important thing in any and every wedding. Selecting the right menu with respect to the season is essential to have a perfect amiable wedding.
 We help you out with a proper planning and management of food by providing the best seasonal and traditional food according to the theme. Thus, we work to achieve perfection and to help you out in the best way we can. 

                        </div>
                    </div>
                <div class="title">Catering & Menu Planning</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Artist & Vendor Management</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                       <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                          Is Haldi possible without turmeric? Is Sangeet possible without music?<br>
Of course not!<br> Only a proper plan as input will deliver entertainment as an output. We can guarantee you the level of your entertainment! Finally, your day is not only a memorable day for you alone but also for many! 

                        </div>
                    </div>
                <div class="title">Entertainment Design & Planning </div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                                                   Design your dreams and live in it!<br>
If designs are humans, all women will be taken-off by them. The matter is the visual attraction! Each place has its own beauty but decorations adore it. The Humsafar Weddings are best in it and will turn your place to a Disney World!
                        </div>
                    </div>
                <div class="title">Design & Decor</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                                 Every guest is a precious jewel until treated with hospitality!
But on your over occupied day will you be able to do that? Don’t worry. We do this with concern, because we know how special you are to us and the day is to you!

                        </div>
                    </div>
                <div class="title">Hospitality & Guest Management</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                             A form of love and greetings with a heartiest invite to our friends, family and relatives needs to be very special.
We help you out in designing a beautiful and attractive invitation card along with trending and exciting gifts and that too in your  budget price only. Thus, make sure that your gifts are bombarded with a bundle of excitement and thrill capturing their eyes. 

                        </div>
                    </div>
                <div class="title">Invitations & Gifting </div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                       <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                                       “You don’t take a photograph, you make it ” ~Ansel Adams<br>
The beauty of it is, it remains constant even after time changes! Videography will take you to the journey of the moments which you might have left unobserved. Chill, for we are here to carry out your day with perfection.

                        </div>
                    </div>
                <div class="title">Photography & Videography</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                         Planning a destination wedding is a great idea for couples but it comes with great deal of legal procedures. Humsafar weddings follows it’s legal responsibility by abiding to the rules and regulations. We have a team specializing in handling all the legal matters quickly.
                        </div>
                    </div>
                <div class="title">Permissions & Licenses</div>
            </div>
        </div>
    </div>    
<?php get_footer();?>