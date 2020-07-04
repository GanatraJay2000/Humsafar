<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<title>Homepage</title>

		<style>
			body{
                top:0;
                left:0;
                padding: 0;
                margin: 0;
                bottom: 0;
				background-color:black;
            }
           
            #description_2_B{
                width:35%;
                height:30% auto;
                background-color: white;
                float: left;
                padding: 20px;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            #description_2_B a{
                color: black;
                text-decoration-line: none;
            }
            #description_2_B a:hover{
                color: #b14233;
            }
            
            #l_news{
				background-color: #f14e4e;
                width:45%;
                border: 0;
                height:4%;
                color: white;
                font-size: 1vw;
            }
            #l_news:hover{
                box-shadow: 0 60px 120px 0 rgba(0,0,0,0.2);
                -ms-transform: scale(1.5); /* IE 9 */
                -webkit-transform: scale(1.2); /* Safari 3-8 */
                transform: scale(1.2);
            }
            
            .v_more{
                width:30%;height:3%;font-size:1vw;
                background-color: #f14e4e;
                border: 0;
                color: white;
            }
            .v_more:hover{
                box-shadow: 0 60px 120px 0 rgba(0,0,0,0.2);
                -ms-transform: scale(1.5); /* IE 9 */
                -webkit-transform: scale(1.2); /* Safari 3-8 */
                transform: scale(1.2);
            }






        </style>
    </head>
    <body onload="displaynews()">
   
                <div id="description_2_B">
                    <button id="l_news">Latest Events</button>
                    <br>
                    <br>
                    <div id="newssection">
                    
                        
                    </div>
                    <button class="v_more" style="" onclick="">View more</button>
                </div>

             




      
        <script>
            var slideIndex = 0;
            showSlides();
            //Get the button
            var mybutton = document.getElementById("scrolltopBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 4000); // Change image every 2 seconds
            }

            function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                  } else {
                    mybutton.style.display = "none";
                  }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
            }



        </script>
    </body>
</html>





<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        

    });
    
        function displaynews(){
            
                $.ajax({
			
                url:"news_function.php",
                type:"POST",
                async:false,
                data:{
                    "displaynews":1
                },
                success:function(data){
                    $("#newssection").html(data);
                    
                }
            });
        }
</script>