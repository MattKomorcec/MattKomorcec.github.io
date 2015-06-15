<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Matija Komorcec - Web Developer, photographer and an optimist!</title>
        <link rel="stylesheet" href="CSS/reset.css" />
        <link rel="stylesheet" href="CSS/style.css" />
        <link href="http://fonts.googleapis.com/css?family=Clicker+Script|Oldenburg|Comfortaa|Baumans|Prosto+One" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="JS/app.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT-1IqrcfKimr3XkJNUMrPu8tnrbbQQqk"></script>
        <script src="js/gmaps.js"></script>
        <link rel="stylesheet" href="CSS/mediaqueries.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="container">
            <div id="siteHeader">
                <div id="nav" class="clear">
                    <div id="info">

                        <h1><img src="img/logo2.svg" class="logo" /><span class="blue">M</span>atija<span class="blue">K</span>omorcec</h1>
                    </div>
                    <div id="links" >
                        <a href="#siteBody">Home</a>
                        <a href="#skills">My Skills</a>
                        <a href="#work">My Work</a>
                        <a href="#contact">Contact</a>
                    </div>             
                </div>               
            </div>
        <div id="hero">
            <h1>Hello! My name is <span class="name">Matija Komorčec.</span></h1>
            <h2>And I'm a web developer, photographer and an <span class="name">optimist.</span></h2>
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
<div id="siteFooter">
            <h4>Handmade by Matija Komorcec &copy; 2015.</h4>
            <div>Beard Icon made by 
                <a href="http://www.freepik.com" title="Freepik">Freepik</a> from 
                <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under 
                <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>
            </div>
        </div>
    </div>
</body>
</html>
