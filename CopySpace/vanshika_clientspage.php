
<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
	<style>
	        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
			@import url('https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig');
			
			body{
			  background-color:#fcf7ff;
			}
			.blog-part{
			  font-family:'playfair display', serif;
			}
			.date{
			  font-family: 'FuturaLig', sans-serif;
			  color: #3d3d3d;
			  font-size: 15px;
			}
			.date p{
			  margin:1% 10%;
			}
			.date a{
			  text-decoration: none;
			  color:#3d3d3d;
			}
			.name{
			  font-size: 28px;
			}
			.name p{
			  margin:1% 10%;
			}
			.name a{
			  text-decoration: none;
			  color:#b28f5e;
			}
			.text{
			  font-family: 'FuturaLig', sans-serif;
			  font-size: 20px;
			  color: #3d3d3d;
			}
			.text p{
			  margin:1% 10%;
			}
			.text a{
			  text-decoration: none;
			  color:#3d3d3d;
			}
			.heading{
			  padding-top:10px;
			  margin:auto;
			  margin-bottom:0;
			  text-align:center;
			  color:#2f2e2e;
			  font-size: 45px;
			  //background-color:rgba(0,0,0,0.5);
			  width:70%;
			}
			.heading p{
			  margin:0;
			}
			h1{
              font-family: sans-serif;
              margin:auto;
              text-align: center;
              font-size: 40px;
              max-width: 600px;
              position:relative;
			  color:#b28f5e;
 
            }
            h1:before{
              content: "";
              display:block;
              width: 150px;
              height:3px;
              background: #000;
              position: absolute;
              left: 0;
			  margin-left:20%;              
			  top: 30%;
              z-index: -2;
			  background-color:#b28f5e;
            }
            h1:after{
              content: "";
              display:block;
              width: 150px;
              height:3px;
              background: #000;
              position: absolute;
              right: 0;
			  margin-right:20%;
              top: 30%;
              z-index: -2;
			  background-color:#b28f5e;
            }
			.container{
			  margin:10px auto;
			  padding:10px;
			  width: 75%;
			  //background-color:#bababa;
			}
			.image{
			  margin:20px auto;
			  background-color: red;
			  height: 400px;
			  overflow:hidden;
			}
			.image img{
			  width:100%;
			  height:100%;
			  object-fit:cover;
			}
			.kebab{
			  float: right;
			  margin:0% 10% ;
			}
			.login{
			  float: right;
			  border: 1px solid;
			  padding:5px;
			  color: #bba45b;
			}
			.login p{
			  margin:0;
			}
			.login a{
			  text-decoration: none;
			  color:#bba45b;
			}
			@media screen and (max-width : 600px){
			  .heading{
			    font-size:28px;
			  }
			  .image{
			    text-align:center; 
				height: 250px;
			  }
			  .image img{
			    object-fit:fill ; 
			  }
			}
			
	</style>
    </head>	
    <body>
	    
        <div class="blog-part">
		
		<div class="heading">
		    <p>Find The Latest Updates Here</p>
			<h1><span>*</span></h1>
		</div>
		<div class="container">
		    <div class="login">
			    <p><a href="#">Login in / Sign up</a></p>
			</div>
			<div class="posts">
			    <pre>    </pre>
			</div>
		    <div class="image">
			    <a href="#"><img id="my-img1" src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp" alt="deepak-nikita"/></a>		
			</div>
			<div class="kebab">
			    <a href="#"><img src="https://image.flaticon.com/icons/svg/483/483345.svg" width="15" height="15"/></a>
			</div>
		    <div class="date"><p>Jul 29, 2018</p></div>
			<div class="name"><p><a href="#">Deepak & Nikita</a></p></div>
			<div class="text"><p><a href="#">Deepak & Nikita are an adorable couple. They shied away from the usual spotlight (and sometimes the camera) that is always on the bride & ...</a></p>
			    <br><hr style="width:80%; height:1px;border-width:0;color:gray;background-color:gray">
			</div>
			<div class="date"><p>275 views &ensp; &ensp; <a href="#">Write comment</a></p></div>
		</div>
		
		<div class="container">
		
		    <div class="image">
			    <a href="#"><img id="my-img1" src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp" alt="prem-varsha" /></a>		
			</div>
			<div class="kebab">
			    <a href="#"><img src="https://image.flaticon.com/icons/svg/483/483345.svg" width="15" height="15"/></a>
			</div>
		    <div class="date"><p>Jul 29, 2018</p></div>
			<div class="name"><p><a href="#">Prem & Varsha</a></p></div>
			<div class="text"><p><a href="#">A Grand venue with a decor that's larger than life, beautifully complemented by musical evenings of an absolutely in-love bride and groom...</a></p>
			    <br><hr style="width:80%; height:1px;border-width:0;color:gray;background-color:gray">
			</div>
			<div class="date"><p>208 views &ensp; &ensp; <a href="#">Write comment</a></p></div>
		</div>
		
		</div>
		
    </body>
</html>