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
            height:300px;
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
            margin:0px 0 0px;
            font-size:23px;
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
            font-size:18px;
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
                        font-size:4vw;
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
                        src="https://catalystforbusiness.com/wp-content/uploads/2018/09/project-management-budget.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Venues & Destination</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Catering & Menu Planning</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/1616113/pexels-photo-1616113.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Design & Decor</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/3769150/pexels-photo-3769150.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Hospitality & Guest Management</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/360624/pexels-photo-360624.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Invitations & Gifting </div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/22185/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Photography & Videography</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://images.pexels.com/photos/3516911/pexels-photo-3516911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Permissions & Licenses</div>
            </div>
        </div>
    </div>    
<?php get_footer();?>