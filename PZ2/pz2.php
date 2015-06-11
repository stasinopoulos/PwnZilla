<?php
$t = time();
$suffix = date("md",$t)
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>PwnZilla!  - Web Hacking Challenge Series by Systems Security Laboratory.</title>
  <meta name="description" content="PwnZilla!  - Web Hacking Challenge Series by Systems Security Laboratory." />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="pz2.php"><b>Pwn</b><span class="logo_colour">Zilla</span>!</a></h1>
          <h5> Web Hacking Challenge Series by 
               <a href="http://ssl.ds.unipi.gr/">Systems Security Laboratory</a> 
               <a href="https://twitter.com/ssl_unipi">(@ssl_unipi)</a>.
               <br>
               Contributed by 
               <a href="https://www.secnews.gr/"> SecNews </a>
               <a href="https://twitter.com/SecNews_GR/"> (@SecNews_GR)</a>.
          </h5>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li ><a href=<?php echo "pz2.php?id=1".$suffix; ?>>Home</a></li>
          <li ><a href=<?php echo "pz2.php?id=2".$suffix; ?>>Contact us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar" style="color: #000000;">
        <h4><b>Visitor Information:</b></h4>
	<br>
	<!-- htmlspecialchars should take care of the XSS -->
	<h5>User IP:</h5>
        <small><?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']);?></small>
	<p><h5>User Agent:</h5>
        <small><?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']);?></small>
        <br/><br/><p> <p>
      </div>
      <div id="content">


<?php
	# ---------------------		
	# Change here ...
	# ---------------------
        $hostname = "localhost"; 
	$db_name  = "L02DB";
	$db_user  = "n3wdb0wn3r2";
	$db_pass  = "t3m$3cDB0wn3r2";
	# --------------------

	# MySQL Connection
	$db = mysql_connect($hostname, $db_user, $db_pass);
	if (!$db) 
	{
		# Connection Error
		echo "Could not connect to database: '" . mysql_error() . "' <br />\n";
	} 
	else 
	{
		if (mysql_select_db($db_name, $db))
		{
			if ($_GET['id'] != null) 
                        {
				$id = $_GET['id'];

			} 
                        else 
                        {
				$id = "1".$suffix;
			}

			if (!preg_match('/'.$suffix.'$/', $id))
			{
				# ------------------------------
				# UBER-LAME SQLi Filter!
				# ------------------------------
				# Filter Quotes.
				# ------------------------------
				if(preg_match('/[\'"]/', $id))
				    	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Filter Slashes.
				# ------------------------------
				if(preg_match('/[\/\\\\]/', $id))
				    	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Filter basic SQLi keywords.
				# ------------------------------
				if(preg_match('/\b(union|and|or|null|not|group|where|having|into|file|case)\b/i', $id)) 
                                	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# -----------------------------
				# Filter basic SQLi comments.
				# -----------------------------
				if(preg_match('/(-|#|\/\)/', $id))
    					exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				// Filter boolean operators
				# -----------------------------
				if(preg_match('/(=|!|&|\|)/', $id))
				    exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Added new sqli words.
				# ------------------------------
				if(preg_match('/\b(substring|ascii|concat|load_file|order|by|outfile)\b/i', $id)) 
                                	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				echo "<h2><b>404 - Page not found!</b></h2>" ;
			}
			else 
			{
				$id 	= str_replace("".$suffix, "", $id);

				# ------------------------------
				# UBER-LAME SQLi Filter!
				# ------------------------------
				# Filter Quotes.
				# ------------------------------
				if(preg_match('/[\'"]/', $id))
				    	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Filter Slashes.
				# ------------------------------
				if(preg_match('/[\/\\\\]/', $id))
				    	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Filter basic SQLi keywords.
				# ------------------------------
				if(preg_match('/\b(union|and|or|null|not|group|where|having|into|file|case)\b/i', $id)) 
                                	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# -----------------------------
				# Filter basic SQLi comments.
				# -----------------------------
				if(preg_match('/(-|#|\/\)/', $id))
    					exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				// Filter boolean operators
				# -----------------------------
				if(preg_match('/(=|!|&|\|)/', $id))
				    exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------
				# Added new sqli words.
				# ------------------------------
				if(preg_match('/\b(substring|ascii|concat|load_file|order|by|outfile)\b/i', $id)) 
                                	exit('<h2><b>ALERT!</b></h2> Your Hack attempt <b>logged</b> and <b>will be reported</b> to your ISP!');
				# ------------------------------

				$getid 	= "SELECT * FROM pages WHERE id = $id ";
				$result = mysql_query($getid) or die('<pre>' . mysql_error() . '</pre>' );
				$num 	= mysql_numrows($result);
				if ($num > 0)
				{
					$i = 0;
					while ($i < $num) 
					{
						$title   = mysql_result($result,$i,"Title");
						$content = mysql_result($result,$i,"Content");
						$html .= $title."<p style='text-align:right;'><tt></tt></p> ".$content;
						$i++;
					}
					echo $html;
					}
				else
				{
					echo "<h2><b>404 - Page not found!</b></h2>";
				}
			}
		mysql_close($db);
		}
	}

?>

      </div>
    </div>
</p>
    <div id="content_footer"></div>
    <div id="footer">
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br/><br>
      <small>Copyright &#169; 2015 <a href="http://ssl.ds.unipi.gr/phd_candidates/astasinopoulos/" target="_blank">Anastasios Stasinopoulos</a> (<a href="https://twitter.com/ancst" target="_blank">@ancst</a>)</small>
      <small><p>
	      <a href="http://unipi.gr/" target="_blank"> University of Piraeus</a> - 
	      <a href="http://www.ds.unipi.gr/" target="_blank">Department of Digital Systems</a> -
	      <a href="http://www.ssl.ds.unipi.gr/" target="_blank">Systems Security Laboratory</a> <br>
	      <a href="https://www.secnews.gr/" target="_blank"> SecNews: IT Security News Media </a>
      </p></small>
      <small><p>Modified template from <a href="http://www.html5webtemplates.co.uk" target="_blank">HTML5webtemplates.co.uk</a></p></small>
    </div>
  </div>
</body>
</html>


