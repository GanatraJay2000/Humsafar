<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style >

    	//Container Styles

    	.container{
  			padding: 1em 0;
  			float: left;
  			width: 50%;
			}

		.container .title{
		  color: #1a1a1a;
		  text-align: center;
		  margin-bottom: 10px;
		}

		.content {
		  position: relative;
		  width: 90%;
		  max-width: 400px;
		  margin: auto;
		  overflow: hidden;
		}

		.content .content-overlay {
		  background: rgba(0,0,0,0.7);
		  position: absolute;
		  height: 99%;
		  width: 100%;
		  left: 0;
		  top: 0;
		  bottom: 0;
		  right: 0;
		  opacity: 0;
		  -webkit-transition: all 0.4s ease-in-out 0s;
		  -moz-transition: all 0.4s ease-in-out 0s;
		  transition: all 0.4s ease-in-out 0s;
		}

		.content:hover .content-overlay{
		  opacity: 1;
		}

		.content-image{
		  width: 100%;
		}

		.content-details {
		  position: absolute;
		  text-align: center;
		  padding-left: 1em;
		  padding-right: 1em;
		  width: 100%;
		  top: 50%;
		  left: 50%;
		  opacity: 0;
		  -webkit-transform: translate(-50%, -50%);
		  -moz-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  -webkit-transition: all 0.3s ease-in-out 0s;
		  -moz-transition: all 0.3s ease-in-out 0s;
		  transition: all 0.3s ease-in-out 0s;
		}

		.content:hover .content-details{
		  top: 50%;
		  left: 50%;
		  opacity: 1;
		}

		.content-details h3{
		  color: #fff;
		  font-weight: 500;
		  letter-spacing: 0.15em;
		  margin-bottom: 0.5em;
		  text-transform: uppercase;
		}

		.content-details p{
		  color: #fff;
		  font-size: 0.8em;
		}

		.fadeIn-bottom{
		  top: 80%;
		}

		.fadeIn-top{
		  top: 20%;
		}

		.fadeIn-left{
		  left: 20%;
		}

		.fadeIn-right{
		  left: 80%;
		}

		h5{
 			font-family: 'Aclonica';font-size: 22px;
		}

		@import url('https://fonts.googleapis.com/css?family=Inconsolata|Source+Sans+Pro:200,300,400,600');
		

		h1 {
		  font-family: 'Source Sans Pro', sans-serif;
		  font-size: 22px;
		  color: #151E3F;
		  font-weight: 300;
		  letter-spacing: 2px;
		}

		.wrapper {
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  > * {
		    margin: 5px;
		  }
		}

		.media {
		  width: 300px;
		  height: 200px;
		  overflow: hidden;
		  position: relative;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  img {
		      max-width: 100%;
		      height: auto;
		    }
		}

		.layer {
		  opacity: 0;
		  position: absolute;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  width: 10px;
		  height: 90%;
		  background: #FFF;
		  color: #151E3F;
		  transition: all 0.9s ease;
		  p {
		    transition: all 0.9s ease;
		    transform: scale(0.1)
		  }
		}

		p {
		  font-family: 'Inconsolata', monospace;
		  text-align: center;
		  font-size: 15px;
		  letter-spacing:1px;
		}

		.media:hover .layer {
		  opacity: 0.8;
		  width: 90%;
		  transition: all 0.5s ease;
		  p {
		    transform: scale(1);
		    transition: all 0.9s ease;
		  }
		}

		@media (max-width: 800px){
		  body {
		    transform: scale(0.6);
		  }
		}

		@media (max-width: 600px) {
		    .wrapper {
		    display: block;
		    > * {
		      margin: 10px;
		    }
		  }
		}
	</style>
</head>

<body>
	
	<div class="container">
	  <h3 class="title">Text fadeIn bottom</h3>
	  <div class="content">
	    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
	      <div class="content-overlay"></div>
	      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
	      <div class="content-details fadeIn-bottom">
	        <h3 class="content-title">This is a title</h3>
	        <p class="content-text">This is a short description</p>
	      </div>
	    </a>
	  </div>
	</div>

		<h5> ABCDEFGHIJKLMNOPQRSTUVWXYZ</h5>
		<a href = "https://www.behance.net/gallery/62566503/Strain-Calligraphic-Typeface"> Font Style</a><br>
		<a href ="https://www.dafont.com/stay-classy-sldt.font">Font Style 1</a><br>
		<a href ="https://wildpicks.design/product/aloja-free-handwritting-font/">Font Style 2</a><br>


		<div class="wrapper">
		<div class="media">
		<div class="layer">
		    <p>+ Paul Gilmore</p>
		  </div>
		<img src="https://images.unsplash.com/photo-1431818563807-927945852ab6?dpr=1&auto=format&fit=crop&w=1199&h=899&q=80&cs=tinysrgb&crop=" alt="" />
		</div>
		 <div class="media">
		<div class="layer">
		    <p>+ M. O' Neil</p>
		  </div>
		<img src="https://images.unsplash.com/photo-1443397646383-16272048780e?dpr=1&auto=format&fit=crop&w=1199&h=899&q=80&cs=tinysrgb&crop=" alt="" />
		</div>
		   <div class="media">
		<div class="layer">
		    <p>+ N. Mehta</p>
		  </div>
		<img src="https://images.unsplash.com/photo-1442965416224-f6a7eca980fa?dpr=1&auto=format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=" alt="" />
		</div>
		</div>

</body>

</html>