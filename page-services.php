<?php get_header();?>
<style>
    
        .heading {
            padding-top: 10px;
            margin-bottom: 0;
            text-align: center;
            color: #2f2e2e;
            font-size: 45px;
        }

        .heading p {
            margin: 0;
        }

        .heading h1 {
            font-family: "Myriad Pro", sans-serif;
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
            margin-bottom:20px;
        }
        .my_block .title{
            height:10%;
            font-size:23px;
        }
        .block_content{            
            box-sizing:border-box;
            border:0px;            
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
</style>
 <div class="service-part">
        <div class="heading">
            <p>Our Services</p>
            <h1><span>*</span></h1>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="col-md-6 col-12 text-center">
                <div class="my_block">
                    <div  class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                    <div class="title">Title 1</div>
                </div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
            <div class="col-md-6 col-12 text-center my_block">
                <div class="block-image">
                        <img alt="venue"
                        src="https://www.phillymag.com/wp-content/uploads/sites/3/2019/03/monet-malatino-wedding-thumb.jpg" />
                        <div class="block_content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam error obcaecati culpa rerum blanditiis laboriosam? Nam ratione vel magni eligendi quia voluptates. Quis non numquam quod reprehenderit iusto doloribus modi impedit consectetur recusandae explicabo. Inventore eaque libero quas suscipit debitis ratione nemo, veritatis id ab assumenda quos cupiditate sit molestias!
                        </div>
                    </div>
                <div class="title">Title 2</div>
            </div>
        </div>
    </div>    
<?php get_footer();?>