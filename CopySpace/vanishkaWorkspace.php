<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
/* if use SSL (https://) >>> set the URL Source to https://fonts.googleapis.com/... to load google web-fonts */

/* SHOWROOM CSS */

* {font-family:'Open Sans', sans-serif, Segoe UI light;font-weight:100}
html, body {margin:0px;padding:0px;width:100%;height:100%}
body {background:#d9d9d9 url("icons/background.jpg") repeat-y center top}

body.light, body.light {background:#d9d9d9 url("icons/background.jpg") repeat-y center top!important}

.container {padding:50px;width:990px;margin:0 auto}

h1, h2, h3 {font-weight:300;width:100%;text-align:center;color:#646464;float:left}
h3 {color:#1787d6}

.color.blue {font-weight:600;color:#1787d6;background:none!important}
.color.grey {font-weight:600;color:#b5b5b5;background:none!important}
.color.green {font-weight:600;color:#509b07;background:none!important}
.color.orange {font-weight:600;color:#d18117;background:none!important}
.color.yellow {font-weight:600;color:#c8a208;background:none!important}
.color.red {font-weight:600;color:#d30100;background:none!important}
.color.purple {font-weight:600;color:#9a0fb8;background:none!important}
.color.pink {font-weight:600;color:#b4039d;background:none!important}

.center {margin:0 auto;width:990px}

ul {margin:0px;padding:0px;list-style:none;width:330px;float:left}
li {display:inline-block;width:100%;height:200px;padding:40px 0px 40px 0px;position:relative;overflow:hidden;border-left:1px dashed #777777}
li.li-title {display:inline-block;width:100%;height:auto;padding:0px 0px 0px 0px;position:relative;overflow:visible;border:0px}
li.li-title h2, li.li-title h3 {text-align:left}

/* DOCUMENTATION CSS */


code {font-family:"Courier New", monospace, Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco;color:#27BB0A;font-size:12px}

pre code {
font-family:"Courier New", monospace, Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco;
display:block;
clear:both;
background:#000;
padding:20px 0px 20px 0px;
color:#fff;
font-size:12px;
overflow:auto;
line-height:16px;
margin:0px 0px 0px 0px;
white-space:pre;
width:100%
}

.comp td {padding:5px}
.yes {display:block;background:url("icons/yes.png") no-repeat center center}
.no {display:block;background:url("icons/no.png") no-repeat center center}
.att {display:block;background:url("icons/att.png") no-repeat center center}
.sep {width:100%;text-align:center;margin:20px;}
.sep .image-hover {margin:20px 20px 20px 0px}

/****** image hover ******/

.image-hover * {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
.image-hover {position:relative;width:450px;height:200px;display:inline-block;overflow:hidden;background:#fff;border:2px solid #fff;
box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);-moz-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);-webkit-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3)}
.image-hover a {text-decoration:none}

.image-hover img {margin:-100px 0px 0px -100px}

/*** effect zoom in ***/

.img-zoom-in img 
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-zoom-in:hover img 
{
transform:scale(1.1);
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1)
}

/*** effect zoom out ***/

.img-zoom-out img 
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-zoom-out:hover img 
{
transform:scale(0.9);
-webkit-transform:scale(0.9);
-moz-transform:scale(0.9);
-ms-transform:scale(0.9);
-o-transform:scale(0.9)
}


/*** effect layer hover - black ***/

.img-layer-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;background:#000;opacity:0}
.img-layer-hover:hover .layer {opacity:0.7}

.img-layer-hover .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-hover:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-image hover - black ***/

.img-layer-image-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;background-image:url("icons/lupe.png");background-repeat:no-repeat;background-position:center center}
.img-layer-image-hover:hover .layer {opacity:0.7;background-color:#000;background-image:url("icons/lupe.png");background-repeat:no-repeat;background-position:center center}

.img-layer-image-hover .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-image-hover:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-text hover - black ***/

.img-layer-text-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;color:#fff;font-size:13px}
.img-layer-text-hover:hover .layer {opacity:0.7}
.img-layer-text-hover .layer-text {padding:20px}

.img-layer-text-hover.overflow .layer {overflow:auto}

.img-layer-text-hover .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-text-hover:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer hover - white ***/

.img-layer-hover-2 .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;background:#fff;opacity:0}
.img-layer-hover-2:hover .layer {opacity:0.7}

.img-layer-hover-2 .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-hover-2:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-image hover - white ***/

.img-layer-image-hover-2 .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#fff;background-image:url("icons/lupe-2.png");background-repeat:no-repeat;background-position:center center}
.img-layer-image-hover-2:hover .layer {opacity:0.7;background-color:#fff;background-image:url("icons/lupe-2.png");background-repeat:no-repeat;background-position:center center}

.img-layer-image-hover-2 .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-image-hover-2:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer slide - top to bottom ***/

.img-layer-slide-top-bottom .layer {position:absolute;top:0px;right:0px;bottom:100%;left:0px;background:#000;opacity:0}
.img-layer-slide-top-bottom:hover .layer {opacity:0.7;bottom:0%}

.img-layer-slide-top-bottom .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-slide-top-bottom:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer slide - bottom to top ***/

.img-layer-slide-bottom-top .layer {position:absolute;top:100%;right:0px;bottom:0px;left:0px;background:#000;opacity:0}
.img-layer-slide-bottom-top:hover .layer {opacity:0.7;top:0%}

.img-layer-slide-bottom-top .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-slide-bottom-top:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer slide - left to right ***/

.img-layer-slide-left-right .layer {position:absolute;top:0px;right:100%;bottom:0px;left:0px;background:#000;opacity:0}
.img-layer-slide-left-right:hover .layer {opacity:0.7;right:0%}

.img-layer-slide-left-right .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-slide-left-right:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer slide - right to left ***/

.img-layer-slide-right-left .layer {position:absolute;top:0px;right:0px;bottom:0px;left:100%;background:#000;opacity:0}
.img-layer-slide-right-left:hover .layer {opacity:0.7;left:0%}

.img-layer-slide-right-left .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-slide-right-left:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}


/*** effect square to ellipse ***/

.img-square-ellipse {width:300px;height:200px}
.img-square-ellipse:hover {-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;border-radius:50%}

.img-square-ellipse
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-square-ellipse:hover
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

/*** effect ellipse to square ***/

.img-ellipse-square {width:300px;height:200px}
.img-ellipse-square {-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;border-radius:50%}
.img-ellipse-square:hover {-moz-border-radius:0%;-webkit-border-radius:0%;-o-border-radius:0%;border-radius:0%}

.img-ellipse-square
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-ellipse-square:hover
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}


/*** effect square to round ***/

.img-square-round {width:200px;height:200px}
.img-square-round:hover {-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;border-radius:50%}

.img-square-round
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-square-round:hover
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

/*** effect round to square ***/

.img-round-square {width:200px;height:200px;-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;border-radius:50%}
.img-round-square:hover {-moz-border-radius:0%;-webkit-border-radius:0%;-o-border-radius:0%;border-radius:0%}

.img-round-square
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-round-square:hover
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

/*** effect layer-image hover - background change ***/

.img-layer-image-hover-backgroundchange .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0.6;background-color:#000;background-image:url("icons/lupe.png");background-repeat:no-repeat;background-position:center center}
.img-layer-image-hover-backgroundchange:hover .layer {opacity:0.2;background-color:#555763;background-image:url("icons/lupe-2.png");background-repeat:no-repeat;background-position:center center}

.img-layer-image-hover-backgroundchange .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-image-hover-backgroundchange:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect rotate-scale ***/

.img-rotate-scale
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;
}

.img-rotate-scale:hover
{
transform:rotate(720deg) scale(2,2);
-webkit-transform:rotate(720deg) scale(2,2);
-moz-transform:rotate(720deg) scale(2,2);
-ms-transform:rotate(720deg) scale(2,2);
-o-transform:rotate(720deg) scale(2,2);
}

/*** effect rotate-x ***/

.img-rotate-x
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;
}

.img-rotate-x:hover
{
transform:rotateX(180deg);
-webkit-transform:rotateX(180deg);
-moz-transform:rotateX(180deg);
-ms-transform:rotateX(180deg);
-o-transform:rotateX(180deg);
}

/*** effect rotate-y ***/

.img-rotate-y
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;
}

.img-rotate-y:hover
{
transform:rotateY(180deg);
-webkit-transform:rotateY(180deg);
-moz-transform:rotateY(180deg);
-ms-transform:rotateY(180deg);
-o-transform:rotateY(180deg);
}

/*** effect 3d image change ***/

.imagechange-3d-inner {position:absolute;top:0px;right:0px;bottom:0px;left:0px}

.imagechange-3d .imgchange-1 {opacity:1}
.imagechange-3d:hover .imgchange-1 {opacity:0}
.imagechange-3d .imgchange-2 {opacity:0}
.imagechange-3d:hover .imgchange-2 {opacity:1}

.imgchange-1 {position:absolute;top:0px;right:0px;bottom:0px;left:0px}
.imgchange-2 {position:absolute;top:0px;right:0px;bottom:0px;left:0px;padding:20px;color:#fff;background:#000;font-size:13px}

.imagechange-3d div 
{
transition:all 0.9s ease-in-out;
-webkit-transition:all 0.9s ease-in-out;
-moz-transition:all 0.9s ease-in-out;
-ms-transition:all 0.9s ease-in-out;
-o-transition:all 0.9s ease-in-out;
}

.imagechange-3d 
{
perspective:1000px;
-webkit-perspective:1000px;
-moz-perspective:1000px;
-ms-perspective:1000px;
-o-perspective:1000px;
}

.imagechange-3d-inner 
{
transform-style:preserve-3d;
transition:all 1.0s linear;
-webkit-transform-style:preserve-3d;
-webkit-transition:all 1.0s linear;
-moz-transform-style:preserve-3d;
-moz-transition:all 1.0s linear;
-ms-transform-style:preserve-3d;
-ms-transition:all 1.0s linear;
-o-transform-style:preserve-3d;
-o-transition:all 1.0s linear;
}

.imagechange-3d:hover .imagechange-3d-inner 
{
transform:rotateY(180deg);
-webkit-transform:rotateY(180deg);
-moz-transform:rotateY(180deg);
-ms-transform:rotateY(180deg);
-o-transform:rotateY(180deg);
}

.imgchange-2 
{
transform:rotateY(180deg);
-webkit-transform:rotateY(180deg);
-moz-transform:rotateY(180deg);
-ms-transform:rotateY(180deg);
-o-transform:rotateY(180deg);
}

/*** effect sharp to blur ***/

.img-sharp-blur img
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

.img-sharp-blur:hover img
{
-webkit-filter:blur(3px); 
-moz-filter:blur(3px); 
-o-filter:blur(3px); 
-ms-filter:blur(3px); 
filter:url(blur.svg#blur);
filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='3');
}

/*** effect color to grayscale ***/

.img-color-grayscale img
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

.img-color-grayscale:hover img
{
filter:grayscale(100%);
-webkit-filter:grayscale(100%);
-moz-filter:grayscale(100%);
-ms-filter:grayscale(100%);
-o-filter:grayscale(100%);
filter:url(greyscale.svg#greyscale);
filter:gray;
}

/*** effect inner-shadow ***/

.img-inner-shadow .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px}

.img-inner-shadow:hover .layer
{
box-shadow:inset 0px 0px 120px rgba(0, 0, 0, 0.9);
-moz-box-shadow:inset 0px 0px 120px rgba(0, 0, 0, 0.9);
-webkit-box-shadow:inset 0px 0px 120px rgba(0, 0, 0, 0.9)
}

.img-inner-shadow .layer
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

.img-inner-shadow:hover .layer
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

/*** effect inner-shadow 2 ***/

.img-inner-shadow-2 .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px}

.img-inner-shadow-2:hover .layer
{
box-shadow:inset 0px 0px 120px rgba(255, 255, 255, 0.9);
-moz-box-shadow:inset 0px 0px 120px rgba(255, 255, 255, 0.9);
-webkit-box-shadow:inset 0px 0px 120px rgba(255, 255, 255, 0.9)
}

.img-inner-shadow-2 .layer
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

.img-inner-shadow-2:hover .layer
{
transition:all 0.6s ease-in-out;
-webkit-transition:all 0.6s ease-in-out;
-moz-transition:all 0.6s ease-in-out;
-ms-transition:all 0.6s ease-in-out;
-o-transition:all 0.6s ease-in-out;
}

/*** effect layer-title slide-top hover ***/

.img-layer-title-slide-top-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;text-align:center}
.img-layer-title-slide-top-hover:hover .layer {opacity:0.7}

.img-layer-title-slide-top-hover .layer-text {position:absolute;top:-50px;right:0px;left:0px;padding:8px 15px;background:#fff;color:#000;font-size:16px}
.img-layer-title-slide-top-hover:hover .layer-text {position:absolute;top:0px}

.img-layer-title-slide-top-hover .layer, .img-layer-title-slide-top-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-title-slide-top-hover:hover .layer, .img-layer-title-slide-top-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-title slide-bottom hover ***/

.img-layer-title-slide-bottom-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;text-align:center}
.img-layer-title-slide-bottom-hover:hover .layer {opacity:0.7}

.img-layer-title-slide-bottom-hover .layer-text {position:absolute;bottom:-50px;right:0px;left:0px;padding:8px 15px;background:#fff;color:#000;font-size:16px}
.img-layer-title-slide-bottom-hover:hover .layer-text {position:absolute;bottom:0px}

.img-layer-title-slide-bottom-hover .layer, .img-layer-title-slide-bottom-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-title-slide-bottom-hover:hover .layer, .img-layer-title-slide-bottom-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-title slide-topbottom hover ***/

.img-layer-title-slide-topbottom-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;text-align:center}
.img-layer-title-slide-topbottom-hover:hover .layer {opacity:0.7}

.img-layer-title-slide-topbottom-hover .layer-text {position:absolute;bottom:100%;right:0px;left:0px;padding:8px 15px;background:#fff;color:#000;font-size:16px}
.img-layer-title-slide-topbottom-hover:hover .layer-text {position:absolute;bottom:0px}

.img-layer-title-slide-topbottom-hover .layer, .img-layer-title-slide-topbottom-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-title-slide-topbottom-hover:hover .layer, .img-layer-title-slide-topbottom-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-title slide-bottomtop hover ***/

.img-layer-title-slide-bottomtop-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;text-align:center}
.img-layer-title-slide-bottomtop-hover:hover .layer {opacity:0.7}

.img-layer-title-slide-bottomtop-hover .layer-text {position:absolute;top:100%;right:0px;left:0px;padding:8px 15px;background:#fff;color:#000;font-size:16px}
.img-layer-title-slide-bottomtop-hover:hover .layer-text {position:absolute;top:0px}

.img-layer-title-slide-bottomtop-hover .layer, .img-layer-title-slide-bottomtop-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-title-slide-bottomtop-hover:hover .layer, .img-layer-title-slide-bottomtop-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-title-center hover ***/

.img-layer-title-center-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;opacity:0;background-color:#000;text-align:center}
.img-layer-title-center-hover:hover .layer {opacity:0.7}
.img-layer-title-center-hover .layer-text {margin-top:30px;padding:8px 15px;background:#fff;color:#000;font-size:16px;display:inline-block;
-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px}

.img-layer-title-center-hover .layer
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-layer-title-center-hover:hover .layer
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-panel hover - bottom to top ***/

.img-panel-bottomtop-hover .layer-text {position:absolute;top:100%;right:0px;left:0px;opacity:0.7;background:#fff;color:#000;font-size:16px}
.img-panel-bottomtop-hover:hover .layer-text {position:absolute;top:0px}

.img-panel-bottomtop-hover .layer-text a {display:inline-block;width:50%;padding:8px 0px;text-align:center;font-size:13px;color:#4588da}
.img-panel-bottomtop-hover .layer-text a:hover {background:#4588da;color:#fff}

.img-panel-bottomtop-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-panel-bottomtop-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect layer-panel hover - top to bottom ***/

.img-panel-topbottom-hover .layer-text {position:absolute;bottom:100%;right:0px;left:0px;opacity:0.7;background:#fff;color:#000;font-size:16px}
.img-panel-topbottom-hover:hover .layer-text {position:absolute;bottom:0px}

.img-panel-topbottom-hover .layer-text a {display:inline-block;width:50%;padding:8px 0px;text-align:center;font-size:13px;color:#4588da}
.img-panel-topbottom-hover .layer-text a:hover {background:#4588da;color:#fff}

.img-panel-topbottom-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-panel-topbottom-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect left content hover - right to left ***/

.img-left-content-rightleft-hover .layer-text {position:absolute;left:100%;top:0px;bottom:0px;width:0%;padding:20px;opacity:0;background:#fff;color:#000;font-size:13px;text-align:left}
.img-left-content-rightleft-hover:hover .layer-text {position:absolute;left:0px;width:50%;opacity:0.7}

.img-left-content-rightleft-hover .layer-text h2 {font-size:20px;text-align:left;margin:0px;padding-bottom:10px;width:100%}

.img-left-content-rightleft-hover .layer-text a {display:inline-block;padding:8px 10px;margin-top:15px;text-align:center;font-size:13px;background:#4588da;color:#fff}
.img-left-content-rightleft-hover .layer-text a:hover {background:#8ac748;color:#fff}

.img-left-content-rightleft-hover .text-inner {padding:8px 0px}

.img-left-content-rightleft-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-left-content-rightleft-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect left content hover - left to right ***/

.img-left-content-leftright-hover .layer-text {position:absolute;right:120%;top:0px;bottom:0px;width:0%;padding:20px;opacity:0;background:#fff;color:#000;font-size:13px;text-align:left}
.img-left-content-leftright-hover:hover .layer-text {position:absolute;right:0px;width:50%;opacity:0.7}

.img-left-content-leftright-hover .layer-text h2 {font-size:20px;text-align:left;margin:0px;padding-bottom:10px;width:100%}

.img-left-content-leftright-hover .layer-text a {display:inline-block;padding:8px 10px;margin-top:15px;text-align:center;font-size:13px;background:#4588da;color:#fff}
.img-left-content-leftright-hover .layer-text a:hover {background:#8ac748;color:#fff}

.img-left-content-leftright-hover .text-inner {padding:8px 0px}

.img-left-content-leftright-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-left-content-leftright-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect left content hover - top to bottom ***/

.img-left-content-topbottom-hover .layer-text {position:absolute;bottom:100%;right:0px;left:0px;width:100%;padding:20px;opacity:0;background:#fff;color:#000;font-size:13px;text-align:left}
.img-left-content-topbottom-hover:hover .layer-text {position:absolute;bottom:0px;opacity:0.7}

.img-left-content-topbottom-hover .layer-text h2 {font-size:20px;text-align:left;margin:0px;padding-bottom:10px;width:100%}

.img-left-content-topbottom-hover .layer-text a {display:inline-block;padding:8px 10px;margin-top:15px;text-align:center;font-size:13px;background:#4588da;color:#fff}
.img-left-content-topbottom-hover .layer-text a:hover {background:#8ac748;color:#fff}

.img-left-content-topbottom-hover .text-inner {padding:8px 0px}

.img-left-content-topbottom-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-left-content-topbottom-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect left content hover - bottom top top ***/

.img-left-content-bottomtop-hover .layer-text {position:absolute;top:100%;right:0px;left:0px;width:100%;padding:20px;opacity:0;background:#fff;color:#000;font-size:13px;text-align:left}
.img-left-content-bottomtop-hover:hover .layer-text {position:absolute;top:0px;opacity:0.7}

.img-left-content-bottomtop-hover .layer-text h2 {font-size:20px;text-align:left;margin:0px;padding-bottom:10px;width:100%}

.img-left-content-bottomtop-hover .layer-text a {display:inline-block;padding:8px 10px;margin-top:15px;text-align:center;font-size:13px;background:#4588da;color:#fff}
.img-left-content-bottomtop-hover .layer-text a:hover {background:#8ac748;color:#fff}

.img-left-content-bottomtop-hover .text-inner {padding:8px 0px}

.img-left-content-bottomtop-hover .layer-text
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-left-content-bottomtop-hover:hover .layer-text
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect - image opacity ***/

.img-opacity img {position:absolute;top:0px;right:0px;bottom:0px;left:0px}

.img-opacity .img-1 {opacity:1}
.img-opacity .img-2 {opacity:0}
.img-opacity:hover .img-1 {opacity:0}
.img-opacity:hover .img-2 {opacity:1}

.img-opacity img
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}

.img-opacity:hover img
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;
}

/*** effect - image roll ***/

.img-roll {background:#000}
.img-roll img {position:absolute;top:0px;right:0px;bottom:0px;left:0px}

.img-roll .img-1 {left:0px}
.img-roll .img-2 {left:123%}
.img-roll:hover .img-1 {left:123%}
.img-roll:hover .img-2 {left:0px}

.img-roll img
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}

.img-roll:hover img
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;
}

/*** effect - shadow 1 ***/


.img-shadow-1
{
-webkit-box-shadow: 0 28px 16px -26px black;
-moz-box-shadow: 0 28px 16px -26px black;
box-shadow: 0 28px 16px -26px black;
}

.img-shadow-1:hover
{
transform:scale(1.1);
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1);

-webkit-box-shadow: 0 58px 36px -56px black;
-moz-box-shadow: 0 58px 36px -56px black;
box-shadow: 0 58px 36px -56px black;
}

.img-shadow-1
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}

.img-shadow-1:hover
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}

/*** button-hover ***/

.img-button-hover .layer {position:absolute;top:0px;right:0px;bottom:0px;left:0px;text-align:center}

.img-button-hover:hover a {opacity:0.7}

.img-button-hover a {display:inline-block;width:100px;height:100px;margin-top:12%;margin-left:2px;margin-right:2px;background:#e71a6e;color:#fff;font-weight:bold;opacity:0;padding-top:38px;
-moz-border-radius:50px;-webkit-border-radius:50px;-o-border-radius:50px;border-radius:50px;
box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);-moz-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);-webkit-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3)}
.img-button-hover a:hover {background:#f14d90}

.img-button-hover a
{
transition:all .4s ease-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
}

.img-button-hover:hover a
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

/*** effect round button 2 ***/

.button-effect-2.img-button-hover a {margin-top:0px}
.button-effect-2.img-button-hover:hover a {margin-top:12%}

/*** effect round button 3 ***/

.button-effect-3.img-button-hover a {width:100%;height:100%;margin-top:0px}
.button-effect-3.img-button-hover:hover a {margin-top:12%;width:100px;height:100px;-moz-border-radius:50px;-webkit-border-radius:50px;-o-border-radius:50px;border-radius:50px}

/*** effect round button 4 ***/

.button-effect-4.img-button-hover a {margin-top:0px}
.button-effect-4.img-button-hover:hover a {margin-top:12%}

.button-effect-4.img-button-hover:hover a:hover {width:100%;margin-left:0px;margin-right:0px;-moz-border-radius:0px;-webkit-border-radius:0px;-o-border-radius:0px;border-radius:0px}


/*** hover with text  ***/

figure.snip1477 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: auto;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: center;
  font-size: 16px;
  background-color: #000000;
}
figure.snip1477 *,
figure.snip1477 *:before,
figure.snip1477 *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.55s ease;
  transition: all 0.55s ease;
}
figure.snip1477 img {
  max-width: 100%;
  backface-visibility: hidden;
  vertical-align: top;
  opacity: 0.9;
}
figure.snip1477 .title {
  position: absolute;
  top: 58%;
  left: 25px;
  padding: 5px 10px 10px;
}
figure.snip1477 .title:before,
figure.snip1477 .title:after {
  height: 2px;
  width: 400px;
  position: absolute;
  content: '';
  background-color: #ffffff;
}
figure.snip1477 .title:before {
  top: 0;
  left: 10px;
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
figure.snip1477 .title:after {
  bottom: 0;
  right: 10px;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
figure.snip1477 .title div:before,
figure.snip1477 .title div:after {
  width: 2px;
  height: 300px;
  position: absolute;
  content: '';
  background-color: #ffffff;
}
figure.snip1477 .title div:before {
  top: 10px;
  right: 0;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
}
figure.snip1477 .title div:after {
  bottom: 10px;
  left: 0;
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
figure.snip1477 h2,
figure.snip1477 h4 {
  margin: 0;
  text-transform: uppercase;
}
figure.snip1477 h2 {
  font-weight: 400;
}
figure.snip1477 h4 {
  display: block;
  font-weight: 700;
  background-color: #ffffff;
  padding: 5px 10px;
  color: #000000;
}
figure.snip1477 figcaption {
  position: absolute;
  bottom: 42%;
  left: 25px;
  text-align: left;
  opacity: 0;
  padding: 5px 60px 5px 10px;
  font-size: 0.8em;
  font-weight: 500;
  letter-spacing: 1.5px;
}
figure.snip1477 figcaption p {
  margin: 0;
}
figure.snip1477 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
figure.snip1477:hover img,
figure.snip1477.hover img {
  zoom: 1;
  filter: alpha(opacity=35);
  -webkit-opacity: 0.35;
  opacity: 0.35;
}
figure.snip1477:hover .title:before,
figure.snip1477.hover .title:before,
figure.snip1477:hover .title:after,
figure.snip1477.hover .title:after,
figure.snip1477:hover .title div:before,
figure.snip1477.hover .title div:before,
figure.snip1477:hover .title div:after,
figure.snip1477.hover .title div:after {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}
figure.snip1477:hover .title:before,
figure.snip1477.hover .title:before,
figure.snip1477:hover .title:after,
figure.snip1477.hover .title:after {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}
figure.snip1477:hover figcaption,
figure.snip1477.hover figcaption {
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.title div p{
  font-size:30px;
  font-weight:600;
  padding:0px;
  margin:0px;
}
    </style>
</head>

<body>
    <html>

	<body>
    
    	<div class="container">
        
        	<h1>Some usefull fonts</h1>
                <div>
                    <a href = "https://fonts.google.com/specimen/Alex+Brush#standard-styles">Alex Brush</a><br>
		            <a href ="https://fonts.google.com/specimen/PT+Sans#standard-styles">PT Sans</a><br>
		            <a href ="https://fonts.google.com/specimen/Crimson+Text">Crimson Text</a><br>
                    <a href =" https://fonts.google.com/specimen/Overpass+Mono#standard-styles">Overpass Mono</a><br>
                </div>
    
            <h1>Image Hover Effects</h1>
                
                <div class="sep">
                    <figure class="snip1477">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample38.jpg" alt="sample38" />
                        <div class="title">
                          <div>
                            <p>Penny</p>
                            <h4>Tool</h4>
                          </div>
                        </div>
                        <figcaption>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
    
                <div class="sep">
      
                    <figure class="snip1477"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg" alt="sample35" />
                        <div class="title">
                          <div>
                            <p>Hans</p>
                            <h4>Down</h4>
                          </div>
                        </div>
                        <figcaption>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
    

    		    <div class="sep">

                <h2>Zoom In &amp; Zoom Out</h2>
            
                <div class="image-hover img-zoom-in">
                    <img src="http://www.plici.ro/images/1-1386110332.jpg">
                </div>
            
                <div class="image-hover img-zoom-out">
                    <img src="http://www.plici.ro/images/2-1386110350.jpg">
                </div>
                
           	</div>
            
            
            <div class="sep">
    
                <h2>Square &amp; Ellipse</h2>
            
                <div class="image-hover img-square-ellipse" style="background:#fff url(http://www.plici.ro/images/6-1386110415.jpg) no-repeat -100px -100px"></div>
            
                <div class="image-hover img-ellipse-square" style="background:#fff url(http://www.plici.ro/images/7-1386110428.jpg) no-repeat -100px -100px"></div>
                
          	</div>
            
            <div class="sep">
    
                <h2>Layer-Background-Change</h2>
            
                <div class="image-hover img-layer-image-hover-backgroundchange">
                    <img src="http://www.plici.ro/images/3-1386110366.jpg">
                    <div class="layer"></div>
                </div>
                
           	</div>
            
            
            <div class="sep">
    
                <h2>Rotate-x / -y </h2>
            
                <div class="image-hover img-rotate-x">
                    <img src="http://www.plici.ro/images/5-1386110395.jpg">
                </div>
            
                <div class="image-hover img-rotate-y">
                  <img src="http://www.plici.ro/images/6-1386110415.jpg">
                </div>
          
                
          	</div>
            
            <div class="sep">
    
                <h2>3D Image Change</h2>
            
                <div class="imagechange-3d image-hover hover">
                    <div class="imagechange-3d-inner">
                        <div class="imgchange-1">
                            <img src="http://www.plici.ro/images/1-1386110332.jpg">
                        </div>
                        <div class="imgchange-2">
                            <img src="http://www.plici.ro/images/2-1386110350.jpg">
                        </div>
                    </div>
                </div>
                
          	</div>
            
            
            <div class="sep">
    
                <h2>Inner Shadow</h2>
            
                <div class="image-hover img-inner-shadow">
                    <img src="http://www.plici.ro/images/5-1386110395.jpg">
                    <div class="layer"></div>
                </div>
            
                <div class="image-hover img-inner-shadow-2">
                    <img src="http://www.plici.ro/images/6-1386110415.jpg">
                    <div class="layer"></div>
                </div>
                
          	</div>
            
            <div class="sep">
    
                <h2>Image Opacity</h2>
            
                <div class="image-hover img-opacity">
                    <img src="http://www.plici.ro/images/7-1386110858.jpg" class="img-1">
                    <img src="http://www.plici.ro/images/1-1386110332.jpg" class="img-2">
                </div>
                
          	</div>
            
           
            <div class="sep">
    
                <h2>Shadow 1</h2>
            
                <div class="image-hover img-shadow-1">
                    <img src="http://www.plici.ro/images/4-1386110379.jpg">
                </div>
                
          	</div>
            
		</div>
    
    
    
	</body>
    
</html>
</body>

</html>