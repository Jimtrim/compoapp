<?
function generate_score_elements() {
	// Nicks som skal brukes
	$users = array(/*'Dagga', 'Krill', 'tmn', 'Melwil', 'Sandsmark',*/'Jonta','Jimtrim','AlfSimen','KinkyPinkie','DukeJarlsberg','ExuZ','Frikish');
	$errorCount = 0;
	$failUsers = array();

	// Henter brukere,splitter user.txt inn i $listen
	for ($num=0; $num<count($users); $num++) {
		$streng = file_get_contents('http://projecteuler.net/profile/'.$users[$num].'.txt');
		$listen = preg_split('/,/',$streng, -1);
		$users[$num] = array(intval(str_replace("Solved ", "", $listen[3])), $listen[0]);
	}
	sort($users);
	
	// Utskrift
	for ($num=count($users)-1; $num>=0; $num--) {
		if ($users[$num]) {
			echo '<li style="clear:both;"><span style="float:left;">'.$users[$num][1].'</span><span style="float:right;">'.$users[$num][0].
			' Solved</span><div style="clear:both;"></span></li>';
		}
	}
	echo '</table>';
}
?>

<!-- High-score page -->
<div data-role="page" id="highscore">

	<? showHeader('High Score'); ?>
	
	<div data-role="content">	
		<h2>Project Euler</h2>
		<ul data-role="listview" data-theme="b">
			<? generate_score_elements(); ?>
		</ul>	
	</div>		
	
	<? showMenu('highscore') ?>
</div>
