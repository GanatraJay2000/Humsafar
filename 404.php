<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        *{
            font-family:"Raleway", sans-serif;
            color:#fafafa;
        }
        body{
            background-color:#1f1f1f;
        }
        .contact-us{
            color:#fafafa !important;
            background-color:#1f1f1f;                       
            padding:0.4em 4em;
            font-size:24px;        
            text-decoration:none !important    ;   
            
            position:relative;       
        }
        .contact-us::after{
            display:block;
            content:"";
            width:0;
            height:2px;
            position:absolute;
            background-color:#fafafa;
            transition:0.3s;  
            bottom:-5px;
            left:50%;
        }
        .contact-us:hover::after{
            left:20%;
            width:60%;
        }
        .title{
            margin:30px;
            font-size:100px;
            font-family: "Great Vibes", cursive; 
        }

    </style>
</head>
<body>
    <div class="d-flex justify-content-center pt-5">
    <div class="text-center mt-5">
        <div class="a404">
    <h1>404</h1>
    <h4 >Page Not Found</h4>
    </div>
    <h1 class="title">Humsafar Weddings</h1>
    <h4 class="sub-title">Creating legendary events and unforgettable weddings across the world</h4>
    <div class="m-5">
    <a href="<?php echo site_url('/weddings/contact-us'); ?>" class="contact-us">Contact Us</a></div>
    </div>
    </div>
</body>
</html>
<?php wp_footer(); ?>