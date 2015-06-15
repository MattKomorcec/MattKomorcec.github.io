<?php
include("includes/header.php");
	echo '
		<form action="/" method="post">
                <label for="name">Name:</label>
                <br />
                <input type="text" id ="name"checked placeholder="Your name..."/>
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
	';
include("includes/footer.php");
?>