<?
function generate_score_elements() {
	// Nicks som skal brukes
	$me = 'Jimtrim';
	$users = array(/*'Dagga', 'Melwil', 'Sandsmark',*/'tellnes','tmn', 'Jonta', $me ,'AlfSimen','KinkyPinkie','DukeJarlsberg','ExuZ','Frikish');
	$errorCount = 0;
	$failUsers = array();

	// Henter brukere,splitter user.txt inn i $listen
	for ($num=0; $num<count($users); $num++) {
		$streng = file_get_contents('http://projecteuler.net/profile/'.$users[$num].'.txt');
		$listen = preg_split('/,/',$streng, -1);
		$users[$num] = array(intval(str_replace("Solved ", "", $listen[3])), $listen[0]);
	}
	sort($users);
	$top = $users[(count($users)-1)][1];
	
	echo('<li data-role="list-divider">'. ($top==$me ? 'Og selvsagt er jeg øverst =)' : $top.', Y U OVER '.$me.'?!?!') .'</li>'); 
	
	// Utskrift
	for ($num=count($users)-1; $num>=0; $num--) {
		if ($users[$num]) {
			echo '<li><span style="float:left;">'.$users[$num][1].'</span><span style="float:right;">'.$users[$num][0].
			' Solved</span><div style="clear:both;"></span></li>';
		}
	}
	echo('<li data-role="list-divider">Sucks to be last, '.$users[0][1].'</li>'); 
	echo '</table>';
}
?>

<!-- High-score page -->
<div data-role="page" id="highscore">

	<? showHeader('High Score','highscore'); ?>
	
	<div data-role="content">
		<h2>Project Euler</h2>
		<p>For de som ikke vet det, er <a href="http://www.projecteuler.net" target="blank" style="text-decoration:none;">www.projecteuler.net</a> et 
		nettsted som forsyner folk med prorgrammeringsproblemer. Dette er en rangeringsliste for de jeg kjenner, og kanskje er på dette kurset. 
		</p>
		<ul data-role="listview" style="margin-top:10px;">
			<? generate_score_elements(); ?>
		</ul>	
	</div>		
	
	<?// showMenu('highscore') ?>
</div>
