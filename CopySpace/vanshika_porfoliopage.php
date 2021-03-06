<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	

<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
		


* {
	margin: 0;
	padding: 0;
}
body {
	font-family:'playfair display', serif;
	font-size: 2rem;
	background-color: #fcf7ff;
	}
.prev,
.next {
	position: fixed;
	top: 0;
	width: 15%;
	height: 100%;
	display: -webkit-box;
	display: flex;
	-webkit-box-align: center;
	        align-items: center;
	-webkit-box-pack: center;
	        justify-content: center;
	text-decoration: none;
	z-index: 999;
	color: rgba(255,255,255,.5);
	font-size: 5rem;
	font-family: monospace;
	-webkit-transition: all .2s;
	transition: all .2s;
}

.prev:hover,
.next:hover {
	color: rgba(255,255,255,.8);
}

.prev {left: -25%;}
.next {right: -25%;}

.active .prev {left: 0;}
.active .next {right: 0;}

.container {
	margin: 10vh auto;
	max-width: 70%;
	display: grid;
	grid-gap: 5px;
	grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
	grid-auto-rows: 250px;
	grid-auto-flow: dense;
}

div {
	text-align: center;
	padding: 1rem 0;
	color: white;
	font-size: 3rem;
	text-transform: uppercase;
	background: rgba(0,0,0,.2);
	overflow: hidden;
	padding: 0;
	margin:5px;
	display: -webkit-box;
	display: flex;
	-webkit-box-align: stretch;
	        align-items: stretch;
	-webkit-box-pack: center;
	        justify-content: center;
}

div img {
	width: 100%;
	height: 100%;
	display: block;
	-o-object-fit: cover;
	   object-fit: cover;
	-o-object-position: center;
	   object-position: center;
	-webkit-transition: all .5s;
	transition: all .5s;
}

div.show::before {
	content: '';
	display: block;
	position: fixed;
	z-index: 555;
	width: 100vw;
	height: 100vh;
	top: 0; left: 0;
	background: rgba(0,0,0,.6);
}

main div.show img {
	position: fixed;
	top: 0; left: 0;
	margin: 30px;
	align-self: center;
	-o-object-fit: contain;
	   object-fit: contain;
	z-index: 666;
	width: calc(100% - 60px);
	height: calc(100% - 60px);
	-webkit-filter: drop-shadow(0 3px 15px black);
	        filter: drop-shadow(0 3px 15px black);
	cursor: url(close-button.png), -webkit-grab;
	cursor: url(close-button.png), grab; /* custom cursor to signal close on click */
}

main div:not(.show):hover img {
	cursor: pointer;
	-webkit-transform: scale(1.3);
	        transform: scale(1.3);
}


.horizontal {
	grid-column: span 2;
}

.vertical {
	grid-row: span 2;
}

.big {
	grid-column: span 2;
	grid-row: span 2;
}

.active div:not(.show) img {
	-webkit-filter: blur(3px);
	        filter: blur(3px);
}


            .heading{
			  padding-top:10px;
			  margin-bottom:0;
			  text-align:center;
			  color:#2f2e2e;
			  font-size: 45px;
			}
			.heading p{
			  margin:0;
			}
			.heading h1{
              font-family: sans-serif;
              margin:auto;
              text-align: center;
              font-size: 40px;
              max-width: 600px;
              position:relative;
			  color:#b28f5e;
            }
            .heading h1:before{
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
            .heading h1:after{
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

@media screen and (max-width: 600px){
  .container{
    display:flex;
	flex-wrap: wrap;
  }
  div{
    margin:10px auto;
  }
}

</style>
	
	
</head>

<body>
   

    <section class="heading">
		    <p>Have a look at our work</p>
			<h1><span>*</span></h1>
	</section>
   	

  <a href="#" class="prev">&lt;</a>
	<a href="#" class="next">&gt;</a>

	<main class="container">
		<div><img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp" alt=""></div>
		<div class="vertical"><img src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp" alt=""></div>
		<div class="horizontal"><img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.jpg/v1/crop/x_69,y_0,w_885,h_683/fill/w_885,h_683,al_c,q_85/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp" alt=""></div>
		<div class="big"><img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_65aa4c3e04044753b53e31340e9b1ba6~mv2.jpg/v1/crop/x_170,y_0,w_1260,h_1066/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_65aa4c3e04044753b53e31340e9b1ba6~mv2.webp" alt=""></div>
		<div class="vertical"><img src="https://static.wixstatic.com/media/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.jpg/v1/crop/x_0,y_12,w_900,h_575/fill/w_732,h_468,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp" alt=""></div>
		<div class="horizontal"><img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp" alt=""></div>
		<div><img src="https://picsum.photos/id/11/800" alt=""></div>
		<div class="big"><img src="https://static.wixstatic.com/media/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.jpg/v1/fill/w_960,h_641,al_c,q_90/98d8c3_2568e6c7c84e41cc804ccaf554873fab~mv2.webp" alt=""></div>
		<div><img src="https://picsum.photos/id/13/800" alt=""></div>
		<div class="horizontal"><img src="https://static.wixstatic.com/media/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.jpg/v1/crop/x_0,y_12,w_900,h_575/fill/w_732,h_468,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_656c3b96d3984770b9201d87a1d35e13~mv2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.jpg/v1/crop/x_116,y_0,w_869,h_735/fill/w_731,h_618,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_265d174e99be4b1aa1bd4aaa663a41e7~mv2.webp" alt=""></div>
		<div class="big"><img src="https://static.wixstatic.com/media/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.jpg/v1/fill/w_1110,h_740,al_c,q_90,usm_0.66_1.00_0.01/98d8c3_9dd3dfa2d7484c92bbf6980d1b7473f2~mv2.webp" alt=""></div>
		<div><img src="https://static.wixstatic.com/media/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.jpg/v1/crop/x_0,y_127,w_1247,h_1412/fill/w_555,h_629,al_c,q_80,usm_0.66_1.00_0.01/98d8c3_16c0634fb5bb4e10b5e4a73b188ec701~mv2_d_1247_1666_s_2.webp" alt=""></div>
		<div class="vertical"><img src="https://static.wixstatic.com/media/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.jpg/v1/crop/x_69,y_0,w_885,h_683/fill/w_885,h_683,al_c,q_85/98d8c3_f3d46d278dcb455a9e7143da9f7c3eb1~mv2.webp" alt=""></div>
	</main>
	
	<script>
		

const divs = document.querySelectorAll('div');
const body = document.body;
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

checkPrev = () => document.querySelector('div:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';

checkNext = () => document.querySelector('div:last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';
			
Array.prototype.slice.call(divs).forEach(function (el) {
			el.addEventListener('click', function () {
				this.classList.toggle('show');
				body.classList.toggle('active');
				checkNext();
				checkPrev();
			});
});

prev.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.previousElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkNext();
});

next.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.nextElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkPrev();
});
	
	
	</script>



	
</body>

</html>
