<!-- First Complete the tasks on this page -->
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singers</title>
	<style>

@import url('https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig');
	
*{
margin: 0;
padding: 0;
}

.singer-part{
  font-family: serif;
  text-align:center;
}

.heading{
  color: #292929;
  font-size: 36px;
  margin: 10px;
}

.flex-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  //background-color: DodgerBlue;
  padding: 20px;
  margin: 10px 8%;
}

.img-container {
  position: relative;
  width: 230px;
  margin:8px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  transition: .5s ease;
  background-color: rgb(0,0,0,0);
}

.img-container:hover .overlay {
  background-color: rgb(0,0,0,0.7);
}

.text {
  color: white;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  opacity:0;
  transition: .5s ease;
}

.img-container:hover .overlay .text{
  opacity:1;
}

.text p{
  font-family: 'FuturaLig', sans-serif;
  margin-top: 5px;
}

@media screen and (max-width: 1100px){
  
  .text{
    font-size: 12px;
  }
  
}

.second-div p{
  font-size: 20px;
  color: #414141;
}

    .second-container {
        text-align: center;
        margin: 10px 0;
        font-size: 20px;
        margin-bottom: 15px;
		font-family: 'FuturaLig', sans-serif;
    }

    ul.title {
        padding: 0;
        margin: 0;
        text-align: center;
    }

    ul.title li {
        display: inline-block;
        margin: 0;
    }
	
	ul.title li a{
	  color: #999997;
	}

    ul.title li::after {
        content: '|';
        margin: 0px 10px;

    }

    ul.title li:last-of-type::after {
        content: '';
        margin: 0;
    }



@media screen and (max-width: 700px){
  
  .flex-container {
    margin:0;
  }
  
  .img-container{
    width:190px;
  }
  
  .text{
    font-size: 14px;
  }
}

@media screen and (max-width: 500px){

  .img-container{
    width:130px;
	margin:4px;
  }

}
	
	</style>
    </head>	
    <body>
	
	    <div class="singer-part">
		
		    <div class="heading">
			    <p>Singers</p>
				<hr style="margin:5px auto;width:60px;height:2px;border-width:0;background-color:#292929">
			</div>
			<div class="flex-container">
			
                <div class="img-container">
                    <a href="#"><img src="https://static.wixstatic.com/media/98d8c3_8fa1649d6abe4a8294a9b01ed485cee2~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_8fa1649d6abe4a8294a9b01ed485cee2~mv2.webp" alt="Mohit Gaur" class="image"/>
					<div class="overlay">
                        <div class="text">Mohit Gaur
						  <p>Singers</p>
						</div>
                    </div>
					</a>
                </div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_b0601e7e87e945509cdb1f629ce3a0fb~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Tanya%20Gupta%2001.webp" alt="Tanya Gupta"/>
				    <div class="overlay">
                        <div class="text">Tanya Gupta
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
			    <div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_6aed9d0500fc4f8cb2e28555a36e8f22~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Meet%20Bros%2002.webp" alt="Meet Bros"/>
				    <div class="overlay">
                        <div class="text">Meet Bros
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
			    <div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_098d00b98a204e14b246118c939d5c26~mv2.jpg/v1/fill/w_720,h_670,al_c,q_85/98d8c3_098d00b98a204e14b246118c939d5c26~mv2.webp" alt="Sukhwinder Singh"/>
				    <div class="overlay">
                        <div class="text">Sukhwinder Singh
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_77933cff386d48c88b379b98929117e6~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_77933cff386d48c88b379b98929117e6~mv2.webp" alt="Badshah"/>
				    <div class="overlay">
                        <div class="text">Badshah
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_a43052577c394a5a9bd52a70853a9453~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_a43052577c394a5a9bd52a70853a9453~mv2.webp" alt="Arjit Singh"/>
				    <div class="overlay">
                        <div class="text">Arjit Singh
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_179b94afa74c46bf89a4f719f1aa3034~mv2.jpg/v1/fill/w_645,h_600,al_c,lg_1,q_85/Sonu%20Nigam%2002.webp" alt="Sonu Nigam"/>
				    <div class="overlay">
                        <div class="text">Sonu Nigam
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_b0daf6ce4aaf4dc68fd4ce1d9bbfaa0d~mv2.jpg/v1/fill/w_639,h_595,al_c,q_85/Neha%20Kakkar.webp" alt="Neha Kakkar"/>
				    <div class="overlay">
                        <div class="text">Neha Kakkar
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_7541c586536f44509b7fdfacfc4ce247~mv2_d_1900_1200_s_2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Sunidhi%20Chauhan.webp" alt="Sunidhi Chauhan"/>
				    <div class="overlay">
                        <div class="text">Sunidhi Chauhan
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_db756b2b0ee94000a89cbc141d29c9d5~mv2_d_2048_1364_s_2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Shirley%20Setia%2001.webp" alt="Shirley Setia"/>
				    <div class="overlay">
                        <div class="text">Shirley Setia
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_fd41d55f64464f0eb0fbe8ddc18771d6~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Neeti%20Mohan%2002.webp" alt="Neeti Mohan"/>
				    <div class="overlay">
                        <div class="text">Neeti Mohan
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_98a076c493e9473fb871ef4ebc656dfa~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Sona%20Mahapatra%2001.webp" alt="Sona Mohapatra"/>
				    <div class="overlay">
                        <div class="text">Sona Mohapatra
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_d269f9c6e7404b718fc090eac0c2092b~mv2.jpg/v1/fill/w_622,h_579,al_c,q_85/Sumedha%20Karmahe%2004.webp" alt="Sumedha Karmahe"/>
				    <div class="overlay">
                        <div class="text">Sumedha Karmahe
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_bd0e6c13de4c43a9b42afe18d0900a7a~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Sujata%20Singh%2003.webp" alt="Sujata Singh"/>
				    <div class="overlay">
                        <div class="text">Sujata Singh
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_ce4bc1a43a5147d3a2a2148389963fd3~mv2_d_1364_1365_s_2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/madhuri.webp" alt="Madhuri Pandey"/>
				    <div class="overlay">
                        <div class="text">Madhuri Pandey
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_65a8c220a27048c7b8968ec78884b263~mv2.jpg/v1/fill/w_619,h_576,al_c,q_80/Vishal%20Kothari%2003.webp" alt="Vishal Kothari"/>
				    <div class="overlay">
                        <div class="text">Vishal Kothari
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_3e87b82d69e248a5ad073f9e28062db0~mv2.jpg/v1/fill/w_640,h_596,al_c,q_85/Aakansha%20Sharma%2001.webp" alt="Akanksha Sharma"/>
				    <div class="overlay">
                        <div class="text">Akanksha Sharma
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_471104a83e7840c0aba90887d49ceeb6~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/Harshida%20Madhaparia%2004.webp" alt="Harshida Madhaparia"/>
				    <div class="overlay">
                        <div class="text">Harshida Madhaparia
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_3eaaf59945a141d3b21592d8ac97f0ea~mv2.jpg/v1/fill/w_734,h_683,al_c,q_85,usm_0.66_1.00_0.01/98d8c3_3eaaf59945a141d3b21592d8ac97f0ea~mv2.webp" alt="Suraj Biswas"/>
				    <div class="overlay">
                        <div class="text">Suraj Biswas
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
				<div class="img-container">
				    <a href="#"><img class="image" src="https://static.wixstatic.com/media/98d8c3_ce9c04d80a3548d0af5c539bb03a961d~mv2.jpg/v1/fill/w_718,h_668,al_c,q_85/98d8c3_ce9c04d80a3548d0af5c539bb03a961d~mv2.webp" alt="Benny Dayal"/>
				    <div class="overlay">
                        <div class="text">Benny Dayal
						  <p>Singers</p>
						</div>
                    </div>
					</a>
				</div>
			
			</div>
			<div class="second-div">
			    <p>FIND ALL</p>
			    <div class="second-container">
                    <ul class="title">
                        <li><a href="#">Anchors</a></li>
                        <li><a href="#">Singers</a></li>
                        <li><a href="#">Dancers</a></li>
                        <li><a href="#">Comedians</a></li>
                        <li><a href="#">TV Stars</a></li>
                        <li><a href="#">Celebrities</a></li>
                    </ul>
                </div>
			</div>
		<br>
		<br>
		</div>
		
    </body>
</html>
