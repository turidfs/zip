<script>
    burgerButton(){
        alert("I am an alert box!");
    }

</script>
        <a href="index.php">
            <svg height="100" width="150" class="logo">
            <defs>
                <radialGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:rgb(75,0,130);stop-opacity:1" />
                    <stop offset="100%" style="stop-color:rgb(255,182,193);stop-opacity:1" />
                </radialGradient>
            </defs>
            <ellipse cx="60" cy="50" rx="60" ry="50" fill="url(#grad1)" />
            <text fill="silver" font-size="45" font-family="Verdana" x="25" y="60">ZiP</text>
            Sorry, your browser does not support inline SVG.
            </svg>
        </a>
        <svg width="100" height="100" class="menu" id="burger-button" onclick="burgerButton();">
            <circle cx="50" cy="50" r="50" fill="purple" />
            <rect x="25" y="20" rx="5" ry="10" width="50" height="10" fill="deeppink" />
            <rect x="25" y="45" rx="5" ry="10" width="50" height="10" fill="deeppink" />
            <rect x="25" y="70" rx="5" ry="10" width="50" height="10" fill="deeppink" />
        </svg>
        
        <nav id="main-nav" class="isHidden">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="social.php">Social</a>
        	       <!--<ul class="dropdown-child isHidden">
                       <li><a href="blog.php">Blog</a></li>
                    </ul>-->
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="events.php">Events/Tours</a></li>
                <li><a href="shop.php">Shop</a></li>
			</ul>
		</nav>



