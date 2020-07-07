<?php get_header() ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');

    .service-part {
        text-align: center;
        font-family: 'playfair display', serif;
    }

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

    h1 {
        font-family: sans-serif;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

    }

    h1::before,
    h1::after {
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

    h1::before {
        left: 0;
        margin-left: 20%;
    }

    h1:after {
        right: 0;
        margin-right: 20%;
    }

    .flex-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        padding: 10px;
    }

    .flex-container>div {
        margin: 5px;
        margin-top: 30px;
        width: 200px;
        text-align: center;
        font-size: 20px;
        color: #b28f5e;
    }

    .flex-container p {
        margin: 5px;
    }

    .flex-container>div>img {
        background-color: white;
        width: 80px;
        height: 80px;
    }

    .flex-container>div>img:hover {
        background-color: white;
    }

    @media screen and (max-width : 700px) {

        .heading h1::before,
        .heading h1::after {
            width: 100px;
        }
    }

    @media screen and (max-width : 500px) {

        .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
    }
</style>

</head>

<body>
    <div class="service-part">
        <div class="heading">
            <p>Our Services</p>
            <h1><span>*</span></h1>
        </div>
        <div class="flex-container">

            <div>
                <img id="my-img1" src="https://image.flaticon.com/icons/svg/2149/2149124.svg" alt="venue"
                    onmouseover='hover1()' onmouseout='unhover1()' />
                <div>
                    <p><i>Venue</i></p>
                </div>
            </div>
            <div>
                <img id="my-img2" src="https://image.flaticon.com/icons/svg/3132/3132686.svg" alt="decoration"
                    onmouseover='hover2()' onmouseout='unhover2()' />
                <div>
                    <p><i>Decoration</i></p>
                </div>
            </div>
            <div>
                <img id="my-img3" src="https://image.flaticon.com/icons/svg/333/333367.svg" alt="catering"
                    onmouseover='hover3()' onmouseout='unhover3()' />
                <div>
                    <p><i>Catering</i></p>
                </div>
            </div>
            <div>
                <img id="my-img4" src="https://image.flaticon.com/icons/svg/3129/3129839.svg" alt="entertainment"
                    onmouseover='hover4()' onmouseout='unhover4()' />
                <div>
                    <p><i>Entertainments</i></p>
                </div>
            </div>
            <div>
                <img id="my-img5" src="https://image.flaticon.com/icons/svg/868/868039.svg" alt="photography"
                    onmouseover='hover5()' onmouseout='unhover5()' />
                <div>
                    <p><i>Photography</i></p>
                </div>
            </div>
            <div>
                <img id="my-img6" src="https://image.flaticon.com/icons/svg/706/706481.svg" alt="bride"
                    onmouseover='hover6()' onmouseout='unhover6()' />
                <div>
                    <p><i>Dress Designing</i></p>
                </div>
            </div>
            <div>
                <img id="my-img7" src="https://image.flaticon.com/icons/svg/2448/2448162.svg" alt="mehendi"
                    onmouseover='hover7()' onmouseout='unhover7()' />
                <div>
                    <p><i>Mehendi</i></p>
                </div>
            </div>
            <div>
                <img id="my-img8" src="https://image.flaticon.com/icons/svg/1987/1987581.svg" alt="makeup"
                    onmouseover='hover8()' onmouseout='unhover8()' />
                <div>
                    <p><i>Make Up Artist</i></p>
                </div>
            </div>
            <div>
                <img id="my-img9" src="https://image.flaticon.com/icons/svg/2269/2269086.svg" alt="fire-work"
                    onmouseover='hover9()' onmouseout='unhover9()' />
                <div>
                    <p><i>Fire Works</i></p>
                </div>
            </div>
            <div>
                <img id="my-img10" src="https://image.flaticon.com/icons/svg/2548/2548328.svg" alt="car"
                    onmouseover='hover10()' onmouseout='unhover10()' />
                <div>
                    <p><i>Transport</i></p>
                </div>
            </div>
            <div>
                <img id="my-img11" src="https://image.flaticon.com/icons/svg/3132/3132676.svg" alt="drum"
                    onmouseover='hover11()' onmouseout='unhover11()' />
                <div>
                    <p><i>Band / Dhol</i></p>
                </div>
            </div>
            <div>
                <img id="my-img12" src="https://image.flaticon.com/icons/svg/827/827249.svg" alt="horse"
                    onmouseover='hover12()' onmouseout='unhover12()' />
                <div>
                    <p><i>Horse / Elephant</i></p>
                </div>
            </div>
            <div>
                <img id="my-img13" src="https://image.flaticon.com/icons/svg/1034/1034068.svg" alt="priest"
                    onmouseover='hover13()' onmouseout='unhover13()' />
                <div>
                    <p><i>Priest</i></p>
                </div>
            </div>
            <div>
                <img id="my-img14" src="https://image.flaticon.com/icons/svg/868/868079.svg" alt="invitation"
                    onmouseover='hover14()' onmouseout='unhover14()' />
                <div>
                    <p><i>Stationary</i></p>
                </div>
            </div>
            <div>
                <img id="my-img15" src="https://image.flaticon.com/icons/svg/1139/1139931.svg" alt="gift"
                    onmouseover='hover15()' onmouseout='unhover15()' />
                <div>
                    <p><i>Gift Packing</i></p>
                </div>
            </div>
            <div>
                <img id="my-img16" src="https://image.flaticon.com/icons/svg/3094/3094107.svg" alt="spotlight"
                    onmouseover='hover16()' onmouseout='unhover16()' />
                <div>
                    <p><i>Light & Sound</i></p>
                </div>
            </div>
            <div>
                <img id="my-img17" src="https://image.flaticon.com/icons/svg/375/375177.svg" alt="care"
                    onmouseover='hover17()' onmouseout='unhover17()' />
                <div>
                    <p><i>Hospitality</i></p>
                </div>
            </div>
            <div>
                <img id="my-img18" src="https://image.flaticon.com/icons/svg/859/859259.svg" alt="vermala"
                    onmouseover='hover18()' onmouseout='unhover18()' />
                <div>
                    <p><i>Varmala Concept</i></p>
                </div>
            </div>
            <div>
                <img id="my-img19" src="https://image.flaticon.com/icons/svg/805/805952.svg" alt="bmw"
                    onmouseover='hover19()' onmouseout='unhover19()' />
                <div>
                    <p><i>Luxury Cars</i></p>
                </div>
            </div>
            <div>
                <img id="my-img20" src="https://image.flaticon.com/icons/svg/859/859937.svg" alt="couple"
                    onmouseover='hover20()' onmouseout='unhover20()' />
                <div>
                    <p><i>Grand Entry</i></p>
                </div>
            </div>

        </div>
    </div>
    <div><br><br><br><br><br></div>

    <script>
        /* *********************** */

        function hover1() {
            document.getElementById("my-img1").src = "https://image.flaticon.com/icons/svg/2149/2149414.svg";
        }

        function unhover1() {
            document.getElementById("my-img1").src = "https://image.flaticon.com/icons/svg/2149/2149124.svg";
        }

        /* *********************** */

        function hover2() {
            document.getElementById("my-img2").src = "https://image.flaticon.com/icons/svg/3132/3132735.svg";
        }

        function unhover2() {
            document.getElementById("my-img2").src = "https://image.flaticon.com/icons/svg/3132/3132686.svg";
        }

        /* *********************** */

        function hover3() {
            document.getElementById("my-img3").src = "https://image.flaticon.com/icons/svg/333/333316.svg";
        }

        function unhover3() {
            document.getElementById("my-img3").src = "https://image.flaticon.com/icons/svg/333/333367.svg";
        }

        /* *********************** */

        function hover4() {
            document.getElementById("my-img4").src = "https://image.flaticon.com/icons/svg/3129/3129863.svg";
        }

        function unhover4() {
            document.getElementById("my-img4").src = "https://image.flaticon.com/icons/svg/3129/3129839.svg";
        }

        /* *********************** */

        function hover5() {
            document.getElementById("my-img5").src = "https://image.flaticon.com/icons/svg/867/867988.svg";
        }

        function unhover5() {
            document.getElementById("my-img5").src = "https://image.flaticon.com/icons/svg/868/868039.svg";
        }

        /* *********************** */

        function hover6() {
            document.getElementById("my-img6").src = "https://image.flaticon.com/icons/svg/703/703306.svg";
        }

        function unhover6() {
            document.getElementById("my-img6").src = "https://image.flaticon.com/icons/svg/706/706481.svg";
        }

        /* *********************** */

        function hover7() {
            document.getElementById("my-img7").src = "https://image.flaticon.com/icons/svg/2448/2448159.svg";
        }

        function unhover7() {
            document.getElementById("my-img7").src = "https://image.flaticon.com/icons/svg/2448/2448162.svg";
        }

        /* *********************** */

        function hover8() {
            document.getElementById("my-img8").src = "https://image.flaticon.com/icons/svg/1987/1987718.svg";
        }

        function unhover8() {
            document.getElementById("my-img8").src = "https://image.flaticon.com/icons/svg/1987/1987581.svg";
        }

        /* *********************** */

        function hover9() {
            document.getElementById("my-img9").src = "https://image.flaticon.com/icons/svg/2269/2269061.svg";
        }

        function unhover9() {
            document.getElementById("my-img9").src = "https://image.flaticon.com/icons/svg/2269/2269086.svg";
        }

        /* *********************** */

        function hover10() {
            document.getElementById("my-img10").src = "https://image.flaticon.com/icons/svg/2548/2548360.svg";
        }

        function unhover10() {
            document.getElementById("my-img10").src = "https://image.flaticon.com/icons/svg/2548/2548328.svg";
        }

        /* *********************** */

        function hover11() {
            document.getElementById("my-img11").src = "https://image.flaticon.com/icons/svg/3132/3132720.svg";
        }

        function unhover11() {
            document.getElementById("my-img11").src = "https://image.flaticon.com/icons/svg/3132/3132676.svg";
        }

        /* *********************** */

        function hover12() {
            document.getElementById("my-img12").src = "https://image.flaticon.com/icons/svg/827/827300.svg";
        }

        function unhover12() {
            document.getElementById("my-img12").src = "https://image.flaticon.com/icons/svg/827/827249.svg";
        }

        /* *********************** */

        function hover13() {
            document.getElementById("my-img13").src = "https://image.flaticon.com/icons/svg/1034/1034017.svg";
        }

        function unhover13() {
            document.getElementById("my-img13").src = "https://image.flaticon.com/icons/svg/1034/1034068.svg";
        }

        /* *********************** */

        function hover14() {
            document.getElementById("my-img14").src = "https://image.flaticon.com/icons/svg/868/868028.svg";
        }

        function unhover14() {
            document.getElementById("my-img14").src = "https://image.flaticon.com/icons/svg/868/868079.svg";
        }

        /* *********************** */

        function hover15() {
            document.getElementById("my-img15").src = "https://image.flaticon.com/icons/svg/1139/1139982.svg";
        }

        function unhover15() {
            document.getElementById("my-img15").src = "https://image.flaticon.com/icons/svg/1139/1139931.svg";
        }

        /* *********************** */

        function hover16() {
            document.getElementById("my-img16").src = "https://image.flaticon.com/icons/svg/3126/3126805.svg";
        }

        function unhover16() {
            document.getElementById("my-img16").src = "https://image.flaticon.com/icons/svg/3094/3094107.svg";
        }

        /* *********************** */

        function hover17() {
            document.getElementById("my-img17").src = "https://image.flaticon.com/icons/svg/375/375279.svg";
        }

        function unhover17() {
            document.getElementById("my-img17").src = "https://image.flaticon.com/icons/svg/375/375177.svg";
        }

        /* *********************** */

        function hover18() {
            document.getElementById("my-img18").src = "https://image.flaticon.com/icons/svg/706/706509.svg";
        }

        function unhover18() {
            document.getElementById("my-img18").src = "https://image.flaticon.com/icons/svg/859/859259.svg";
        }

        /* *********************** */

        function hover19() {
            document.getElementById("my-img19").src = "https://image.flaticon.com/icons/svg/806/806033.svg";
        }

        function unhover19() {
            document.getElementById("my-img19").src = "https://image.flaticon.com/icons/svg/805/805952.svg";
        }

        /* *********************** */

        function hover20() {
            document.getElementById("my-img20").src = "https://image.flaticon.com/icons/svg/860/860039.svg";
        }

        function unhover20() {
            document.getElementById("my-img20").src = "https://image.flaticon.com/icons/svg/859/859937.svg";
        }
    </script>
    <?php get_footer() ?>