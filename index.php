<?php
include("includes/header.php");
echo'
        <div id="hero">
            <h1>Hello! My name is <span class="name">Matija Komorčec.</span></h1>
            <h2>And Im a web developer, photographer and an <span class="name">optimist.</span></h2>
			<h3>Get to know me</h3>
			<img class="arrow" src="img/arrow.png" />
        </div>
	<div id="skills">
		<img src="img/matija.jpg" class="myPic" />
		<h3>These are some of my skills</h3>
        <div class="hr"></div>
    	<div id="skillsCenter" class="clear">
        	<div class="threeBoxes">
    		  <h3>Web Development</h3>
              <img src="img/web.png" />
              <p>
                I love front-end development, and most of all love writing clean and well structured code.
                My weapons of choice are HTML, CSS, JavaScript and PHP, although I am constantly learning and expanding my arsenal.
              </p>
    		</div>
            <div class="threeBoxes">
              <h3>SEO</h3>
              <img src="img/seo.png" />
              <p>
                If you want your new website to be noticed on Google and search engines, you have to pay attention to SEO.
                That"s why I make sure all my work is SEO (Search Engine Optimization) ready. 
              </p>
            </div>
            <div class="threeBoxes">
              <h3>Responsive Web Design</h3>
              <img src="img/rwd.png" />
              <p>
                A few years ago, Responsive websites were a new concept and just an option. Much has changed since then, 
                and responsive website today is a must. I keep that in mind while developing.
              </p>
            </div>
        </div>
        <div class="hr"></div>
        <p>
            In case you want to check out my CV, you can do so by clicking the button below.
            <br/><button>Download CV</button> 
        </p>

	</div>

    <div id="work">
        <h2>Some of the things I love doing</h2>
        <button id="photo">Photography</button>
        <button id="development">Development</button> <br />
        <div id="Holder"></div>

    </div>

    <div id="contact" class="clear">
        <form action="/" method="post">
                    <label for="name">Name:</label>
                    <br />
                    <input type="text" id ="name" placeholder="Your name..."/>
                    <br/>
                    <label for="subject">Subject:</label>
                    <br />
                    <input type="text" id ="subject" placeholder="Subject..."/>
                    <br/>
                    <label for="email">Email:</label>
                    <br />
                    <input type="email" id="email" placeholder="name@email.com"/>
                    <br />
                    <label for="message">Message:</label>
                    <br />
                    <textarea id="message" placeholder="Write a nice message here..."></textarea>
                    <br />
                    <input type="submit" value="Send" id="button"/>
        </form>
        <div id="map">

        </div>
    </div>
';
include("includes/footer.php");
?>