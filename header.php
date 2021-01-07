<header>
        <div class="navbar navbar-default navbar-static-top navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <?php
                        $pageName = basename($_SERVER['PHP_SELF']);
                    	if($pageName == "index.php")
                    	{
                    	echo "<li class='active'><a href='index.php'>Home</a></li>"; 
                    	echo "<li><a href='aboutus.php'>About Us </a></li>";
                    	echo "<li><a href='goldtrading.php'>Gold Trading</a></li>";
                    	echo "<li class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Metal Trading<b class='caret'></b></a>";
                    	 echo "<ul class='dropdown-menu'>";
                    		echo "<li><a href='ferrous-scrap.php'>Ferrous Scrap</a></li>";
                    		echo "<li><a href='non-ferrous-scrap.php'>Non-ferrous Scrap</a></li>";
                    	  echo "</ul>";
                    	echo "</li>";
                    	echo "<li><a href='contact.php'>Contact</a></li>";
                    	}
                    	if($pageName == "aboutus.php")
                    	{
                    	echo "<li><a href='index.php'>Home</a></li>"; 
                    	echo "<li class='active'><a href='aboutus.php'>About Us </a></li>";
                    	echo "<li><a href='goldtrading.php'>Gold Trading</a></li>";
                    	echo "<li class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Metal Trading<b class='caret'></b></a>";
                    	 echo "<ul class='dropdown-menu'>";
                    		echo "<li><a href='ferrous-scrap.php'>Ferrous Scrap</a></li>";
                    		echo "<li><a href='non-ferrous-scrap.php'>Non-ferrous Scrap</a></li>";
                    	  echo "</ul>";
                    	echo "</li>";
                    	echo "<li><a href='contact.php'>Contact</a></li>";
                    	}
                    	if($pageName == "goldtrading.php")
                    	{
                    	echo "<li><a href='index.php'>Home</a></li>"; 
                    	echo "<li><a href='aboutus.php'>About Us </a></li>";
                    	echo "<li class='active'><a href='goldtrading.php'>Gold Trading</a></li>";
                    	echo "<li class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Metal Trading<b class='caret'></b></a>";
                    	 echo "<ul class='dropdown-menu'>";
                    		echo "<li><a href='ferrous-scrap.php'>Ferrous Scrap</a></li>";
                    		echo "<li><a href='non-ferrous-scrap.php'>Non-ferrous Scrap</a></li>";
                    	  echo "</ul>";
                    	echo "</li>";
                    	echo "<li><a href='contact.php'>Contact</a></li>";
                    	}
                    	if($pageName == "ferrous-scrap.php" || $pageName == "non-ferrous-scrap.php")
                    	{
                    	echo "<li><a href='index.php'>Home</a></li>"; 
                    	echo "<li><a href='aboutus.php'>About Us </a></li>";
                    	echo "<li><a href='goldtrading.php'>Gold Trading</a></li>";
                    	echo "<li class='dropdown active'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Metal Trading<b class='caret'></b></a>";
                    	 echo "<ul class='dropdown-menu'>";
                    		echo "<li><a href='ferrous-scrap.php'>Ferrous Scrap</a></li>";
                    		echo "<li><a href='non-ferrous-scrap.php'>Non-ferrous Scrap</a></li>";
                    	  echo "</ul>";
                    	echo "</li>";
                    	echo "<li><a href='contact.php'>Contact</a></li>";
                    	}
                    	if($pageName == "contact.php")
                    	{
                    	echo "<li><a href='index.php'>Home</a></li>"; 
                    	echo "<li><a href='aboutus.php'>About Us </a></li>";
                    	echo "<li><a href='goldtrading.php'>Gold Trading</a></li>";
                    	echo "<li class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Metal Trading<b class='caret'></b></a>";
                    	 echo "<ul class='dropdown-menu'>";
                    		echo "<li><a href='ferrous-scrap.php'>Ferrous Scrap</a></li>";
                    		echo "<li><a href='non-ferrous-scrap.php'>Non-ferrous Scrap</a></li>";
                    	  echo "</ul>";
                    	echo "</li>";
                    	echo "<li class='active'><a href='contact.php'>Contact</a></li>";
                    	}
                    ?>						
                    </ul>
                </div>
            </div>
        </div>
	</header>