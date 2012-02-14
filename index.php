<html>
<head>
	<title>Jim Frode Hoff - Showoff</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Dette er verdens beste web-app om Jim Frode" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<script>
   $(document).ready(function() {
    // Your jQuery commands go here before the mobile reference
   });
  </script>
</head>

<?php
function showHeader($title = "Hjem") { ?>
  <div data-role="header" data-position="fixed">
		<h1><?= ($title == "Hjem" ? "Jim Frode Hoff" : $title) ?></h1>	
	</div><?
}

function showMenu($active=null) {
?>    
    <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
        <ul>
          <li><a href="#home" data-icon="home" data-role="button" <?php if ("home" == $active) { echo ' class="ui-btn-active ui-state-persist"'; }
          											else { echo' data-direction="reverse"'; } ?>>Hjem</a></li>
          <li><a href="#description" data-icon="info" data-role="" <?php if ("description" == $active) { echo ' class="ui-btn-active ui-state-persist"'; }
          											else if ("highscore" == $active) { echo' data-direction="reverse"'; } ?>>Beskrivelse</a></li>
          <li><a href="#highscore" data-icon="star" <?php if ("highscore" == $active) { echo 'class="ui-btn-active ui-state-persist"'; }?>>High Score</a></li>
        </ul>
      </div>
    </div>
<? } ?>

<body>
	
<? include("include.php"); ?>
	
	
</body>
</html>

