
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
  
* {
	box-sizing: border-box;
	-webkit-touch-callout: none;
	-webkit-user-select: none; 
	-moz-user-select: none;   
	-ms-user-select: none;     
	-o-user-select: none;
	user-select: none;  
}

html {
	margin: 0;
	padding: 0;
}

body {
	margin: 0;
	background: black;
	padding: 0;

}

/***     Image Gallery 2     ***/
.aligner-hidden {
  	display: none;
}

.aligner {
	position: fixed;
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
  	z-index: 3;
  	display: flex;
	justify-content: center;
  	align-items: center;
}


#photo-frame {
	position: fixed;
	height: 92%;
	width: auto;
	max-width: 90%;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 12;
}

#feature-photo {
	max-width: 100%;
	max-height: 100%;
	height: auto;
	width: auto;
	z-index: 15;
}

#info {
	position: absolute;
	background: rgba(0,0,0,0.5);
	padding: 10px 12%;
	margin: auto;
	color: white;
	z-index: 17;
	bottom: 0px;
	width: 100%;
	height: auto;
	font-size: 19px;
	font-family: 'Lato', sans-serif;
	transition: 0.2s;
	display: none;
}

#photo-name {
	font-style: italic;
	font-size: 1.1em;
}

#photo-desc {
	padding-left: 5%;
}

#close-button {
	position: absolute;
	top: 2%;
	right: 5%;
	color: rgba(255,255,255,0.8);
	font-size: 3em;
	z-index: 16;
}

#close-button:hover {
	cursor: pointer;
}

#info-button {
	position: absolute;
	bottom: 2%;
	left: 5%;
	color: rgba(255,255,255,0.8);
	font-size: 3em;
	z-index: 16;
	opacity: 0.35;
	height: 40px;
}

#info-button > img {
	height: 40px;
}

#info-button:hover {
	cursor: pointer;
	opacity: 1;
	transition: 0.2s;
}

.row, .row-blur {
	min-width: 850px;
	margin: auto;
	padding-top: 12px;
	width: 50vw;
	display: flex;
	flex-wrap: wrap;
	transition: 0.2s;
	z-index: 1;
}

.row {
	filter: blur(0px);
	opacity: 1;
}

.row-blur {
	filter: blur(6px);
	opacity: 0.4;
}


.column {
	flex: 33.3%;
	padding-right: 1vh;
	padding-left: 1vh;
	text-align: center;
}

.thumb {
	max-width: 100%;
	width: 100%;
	margin: 0;
	margin-top: 1vh;
	margin-bottom: 1vh;
	z-index: 2;
}

footer {
	right: 0;
	bottom: 0;
	left: 0;
	position: sticky;
	padding-right: 10vw;
	min-height: 3.5vh;
	line-height: 3.5vh;
	margin: 0;
	background: rgba(0,0,0,0.5);
	width: 100%;
	color: white;
	font-family: times-new-roman;
	font-size: 12px;
	text-align: right;
	vertical-align: center;
}

/* Thank you @shshaw (Codepen) for inspiring the effects below */

@media (min-width: 600px) {
	.row { 
	  visibility: hidden; 
	}
	/* Prevents :hover from triggering in the gaps between items */

	.row > div > * { 
	  visibility: visible; 
	}
	/* Brings the child items back in, even though the parent is `hidden` */

	.row > div > * { 
	  transition: opacity 150ms linear 100ms; 
	}
	/* Makes the fades smooth */

	.row:hover > div > * { 
	  opacity: 0.4; 
	}

	.row > div > *:hover { 
 	 	opacity: 1; 
 	 	transition-delay: 0ms, 0ms; 
 	 	cursor: pointer;
	}
}
/* Thank you @shshaw (Codepen) for inspiring the effects above */


@media (max-width: 850px) {

	.row {
		min-width: 100%;
		width: 100%;
		margin: 0;
		text-align: center;
	}
	.column {
		flex: 50%;
		margin: 0;
	}
	#info {
		font-size: 14px;
	}
	.column {
		padding-right: 8px;
		padding-left: 8px;
	}
	.thumb {
		margin-top: 8px;
		margin-bottom: 8px;
	}
	.thumb:hover {
		cursor: pointer;
	}
} 


/***     Image Gallery 2     ***/

* {
    box-sizing: border-box;
}

.gallery-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #fff;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
    width: 80%;
    margin: 0 auto;
    padding: 10px;
}
.gallery-item {
    flex-basis: 32.7%;
    margin-bottom: 6px;
    opacity: .85;
    cursor: pointer;
}
.gallery-item:hover {
    opacity: 1;
}
.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.gallery-content {
    font-size: .8em;
}

.lightbox {
    position: fixed;
    display: none;
    background-color: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;              
    overflow: auto;
    top: 0;
    left: 0;
}
.lightbox-content {
    position: relative;
    width: 70%;
    height: 70%;
    margin: 5% auto;
}
.lightbox-content img {
    border-radius: 7px;
    box-shadow: 0 0 3px 0 rgba(225, 225, 225, .25);
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.lightbox-prev,
.lightbox-next {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 10px;
	width: auto;
    top: 45%;
    cursor: pointer;
	border:2px solid white;
}
.lightbox-prev {
    left: 0;
	border-radius: 15px;
}
.lightbox-next {
    right: 0;
	border-radius: 15px;
}
.lightbox-prev:hover,
.lightbox-next:hover {
    opacity: .8;
}




@media (max-width: 767px) {
    .gallery-container {
        width: 100%;
    }
    .gallery-item {
        flex-basis: 49.80%;
        margin-bottom: 3px;
    }
    .lightbox-content {
        width: 80%;
        height: 60%;
        margin: 15% auto;
    }
}
@media (max-width: 480px) {
    .gallery-item {
        flex-basis: 100%;
        margin-bottom: 1px;
    }
    .lightbox-content {
        width: 90%;
        margin: 20% auto;
    }
} 
  
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Photo Gallery</title>
	<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    <div>
	<div id="aligner" class="aligner-hidden">
		<div id="photo-frame">

			<span id="close-button" class="sensor">&times;</span>
			<span><img id="info-button" class="sensor" src="https://img.icons8.com/flat_round/64/000000/info.png"></span>
			<img id="feature-photo" class="sensor" src="">
			<div id="info" class="sensor">
				<p id="photo-name" class="sensor"></p>
				<p id="photo-desc" class="sensor"></p>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="column">
			<!-- each photo element is given a custom attribute of full containing the url for the full resolution version, and name/desc attributes for when the user clicks to see more info  -->
			<img id="test" class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/garden.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/garden_full.jpg" name="Kyotosoft XP" desc="A Japanese garden inside a series of shrines in Kyoto said to have been visited by Bill Gates himself. Sadly, these gardens were not chosen to become the desktop image for Windows XP.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/taipei.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/taipei_full.jpg" name="Shuhao's Secret Spot" desc="The view of Taipei from a secret, off-trail vantage point near the famous Elephant Mountain hiking trail.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/mtVernon.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/mtVernon_full.jpg" name="George Washington's Backyard" desc ="Literally. The OG POTUS’s backyard in Mt. Vernon, Virginia. A distant retreat from the nation’s then-capital of Philadelphia.">	
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/yangMingShan1.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/yangMingShan1_full.jpg" name="Yang Ming Shan Summit" desc="Surreal golden hour lighting from the top of a mountain overlooking Taipei. In December, it was still warm enough for short sleeves.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/zoey.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/zoey_full.jpg" name="Zoey" desc="When she’s not being photographed, she doesn’t do much.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/moreller.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/moreller_full.jpg" name="Moreller" desc="A farmer sells cherries at an unattended stand by the Hardanger Fjord in Norway. Transactions subject to the honor system.">
		</div>
		<div class="column">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/penny.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/penny_full.jpg" name="Penny" desc="A ferocious dachshund waiting for prey in the safari with ears peeled. Like a lion, she is awake for 3 hours a day on average.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/yangMingShan2.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/yangMingShan2_full.jpg" name="Yang Ming Shan" desc="The view from below as we hike up toward the summit.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/church.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/church_full.jpg" name="Straight Outta the Dark Ages" desc="The oldest church in Bergen, Norway.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/chineseRestaurant.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/chineseRestaurant_full.jpg" name="Chinese Restaurant" desc="A curious little restaurant across from my old apartment building in Kobe, Japan. One of the only restaurants on the block.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/sunset.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/sunset_full.jpg" name="Yang Ming Shan Sunset" desc="Do sunset photos really need a description?">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/dragonsBack.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/dragonsBack_full.jpg" name="Dragon's Back" desc="A mountainous hiking trail not far from central Hong Kong.">
		</div>
		<div class="column">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/trolltunga.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/trolltunga_full.jpg" name="Trolltunga" desc="In the morning hours during the Norwegian summer, fog and mist obscures the path through the mountains.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/sverd.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/sverd_full.jpg" name="Sverd i fjell" desc="Three swords commemorate the historic Battle of Hafrsfjord in the year 872, when King Harald Fairhair gathered all of Norway under one crown.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/graduation.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/graduation_full.jpg" name="Graduation" desc="My sister participates in the Class of 2017 cap toss.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/enico.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/enico_full.jpg" name="Enico" desc="A musician performs in the busy Dotonbori district of Osaka, Japan.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/stPete.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/stPete_full.jpg" name="Symphony" desc="The daily raising of the bridges in St. Petersburg is accompanied by a dramatic ceremony including symphonic music and a convoy of ships passing through the newly open brides.">
			<img class="thumb" src="https://jeremyg2112.github.io/myPhotoGallery/flowers.jpg" full="https://jeremyg2112.github.io/myPhotoGallery/flowers_full.jpg" name="Chrysanthemums" desc="Flowers in bloom at historic Gamle Stavanger in Norway.">
		</div>
	</div>
	</div>
	
<!--  Image Gallery 2    -->


<h1>Second</h2>
	
<div class="gallery-container">
    <div class="gallery-item" data-index="1">
        <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
    </div>
    <div class="gallery-item" data-index="2">
        <img src="https://images.pexels.com/photos/5969/wood-nature-forest-bridge.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
    </div>
    <div class="gallery-item" data-index="3">
        <img src="https://images.pexels.com/photos/531321/pexels-photo-531321.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
    </div>
    <div class="gallery-item" data-index="4">
        <img src="https://images.pexels.com/photos/373920/pexels-photo-373920.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="5">
        <img src="https://images.pexels.com/photos/164241/pexels-photo-164241.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="6">
        <img src="https://images.pexels.com/photos/417054/pexels-photo-417054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="7">
        <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="8">
        <img src="https://images.pexels.com/photos/38326/pexels-photo-38326.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="9">
        <img src="https://images.pexels.com/photos/266691/pexels-photo-266691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
</div>

	
	
	<footer>Footer</footer>
</body>
</html>
<!-- partial -->
  <script>
  
  
 // FUNCTIONS

// blurs out gallery rows when user opens lightbox
function galleryObscure() {
	$('.row').addClass('row-blur');
}

// restores gallery style to default
function galleryDefault() {
	$('.row').removeClass('row-blur');
}

// opens lightbox frame with full res version of image 
function openFrame(e) {
	galleryObscure();
	$('#feature-photo').attr('src', $(e.target).attr('full'));
	$('#photo-name').html(e.target.name);
	$('#photo-desc').text($(e.target).attr('desc'));
	// waits until image is loaded to open modal
	$('#feature-photo').on('load', function() {
		$('.aligner-hidden').addClass('aligner');
		addClickOutsideEventListener();
	})
}

// closes lightbox frame 
function closeFrame() {
	galleryDefault();
	$('.aligner-hidden').removeClass('aligner');
	hideInfo(); // hides info bar, sets info button to display for when next ligthbox is opened
	removeClickOutsideEventListener();
}


function showInfo() {
	 $('#info-button').hide();
	 $('#info').show();
}


function hideInfo() {
	$('#info').hide();
	$('#info-button').show();
}


function detectSensorClass(e) {
	if (e.target.className != "sensor") {
		closeFrame();
	}
}


function addClickOutsideEventListener() {
	document.addEventListener("click", detectSensorClass);
}


function removeClickOutsideEventListener() {
	document.removeEventListener("click", detectSensorClass);
}


// EVENT LISTENERS

$('.thumb').on("click", openFrame);

$('#close-button').on("click", closeFrame);

$('#info-button').on("click", showInfo);

$('#feature-photo').on("click", hideInfo) 
  
  
  </script>
  
  
<!-- Image Gallery 2 -->
	
	<script>
	
	const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);
	
	</script>  

</body>
</html>

