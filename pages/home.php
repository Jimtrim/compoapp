<!-- Home page -->
<div data-role="page" id="home">

		<? showHeader('Hjem','home'); ?>
		
	<div data-role="content">	
	    <h1>Heihei, hallo!</h1>
	    <!-- <p> Denne nettsiden håper jeg at svært få tror er min beste kodeskikk. Hvorfor? Fordi hardkoding er gøy!</p> -->
	     <img src="res/jim_manga.jpg" style="float:left; margin:0 10px 0 0;">
	     <p>Dette er en web-app som forhåpentligvis vil gi en liten presentasjon av me, uten å være så alt for kjedelig. Alt av innhold er egentlig lagt til bare for å fylle sidene med noe.</p>
	     <p>I tillegg har jeg oppdatert min gamle scrapper til ProjectEuler, så den er å finne i menyen.</p>
	     <p>Om som en siste bit av introduksjonen: ikke ta noe av det som står på siden alt for alvorlig.</p>
	     <div style="clear:both;"></div>
	     
	     <a href="#home_popup" data-rel="dialog" data-role="button">Katt?</a> </p>		
    </div>
		
		<? //showMenu('home') ?>
</div>


<!-- Home popup -->
<div data-role="page" id="home_popup">

	<div data-role="header">
		<h1>KATT!!</h1>
	</div>

	<div data-role="content" data-theme="c">
		<h1>Liker du katter?</h1>
		<img src="res/haters.png" style="width: 100%; min-width: 100px;">
		<p>Eller er du kanskje en hater?</p>
		<a href="lols.html" data-role="button" data-rel="back" data-theme="b">Aww!</a>       
		<a href="lols.html" data-role="button" data-rel="back" data-theme="c">Haters gonna hate</a>    
	</div>
</div>


