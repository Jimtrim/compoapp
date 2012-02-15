<!-- Description page -->
<div data-role="page" id="description">

	<? showHeader('Beskrivelse', 'description'); ?>
	
	<div data-role="content">	
		<h1>Hvem er Jim Frode?</h1>
		<p>Jim Frode Hoff har endelig kommet ut av skapet som teknofil. Hvis du er ute etter hans egenskaper som fotograf kan du trykke under.</p>
		<a href="#description_popup" data-rel="dialog" data-role="button">Fotografen</a>
		
		<div class="ui-grid-a" style="padding=0 5px;">
			<div class="ui-block-a"><div style="margin:0 10px 0 0;">
				<h2>Kolonner er konge</h2>
				<p>Jeg kommer fra Steinkjer i Nord-Trøndelag. Dette betyr dialekt, men har aldri vært noen hindring å fortolke. 
				Dette med noen selvsagte unntak, som feks. bæglinj
				</p>
				<p>I den siste tiden har jeg tilbringt tiden i Trondheim, nærmere bestemt NTNU, nærmere bestemt Online-kontoret. 
				Dette har da sin logiske forklaring av at Online er den kuleste linjeforeningen. (U MAD?)
				</p>
				<p>Jeg er av typen som synes at det å kode er mye mer gøy enn å lage innhold, så dette får være nok</p>
			</div></div>
			<div class="ui-block-b"><div style="margin:0 0 0 10px;">
				<h2>Språk</h2>
				<p> Her er noen språk jeg har lekt meg litt med: 
					<ul data-role="listview" data-inset="true">
					  <li>Java</li>
					  <li>Python</li>
					  <li>PHP</li>
						<li>HTML/CSS</li>
					</ul>
				</p>
			</div></div>	   
		</div>		
	</div>		
	
	<?// showMenu('description') ?>
</div>


<!-- Description popup-->

<div data-role="page" id="description_popup">

	<div data-role="header">
		<h1>Pop'ups er kult</h1>
	</div>
	<div data-role="content">	
		<div>
			<img src="res/old_fotograf.jpg">
			<p>Dette er en veldig fin paragaraf, som beskriver den tidligere fotografen Jim Frode Hoff</p>
			<p>Jim Frode Hoff var, kort oppsummert, en fantastisk fotograf. Hans egenskaper greide å gi han jobber for 
			  blant annet: 
			  <ul data-role="listview" data-inset="true">
			   	<li>Trønder-Avisa</li>
			   	<li>Ungdommens Kulturmønstring</li>
			   	<li>NRK</li>
			  </ul>
			  True story, bro!
			</p>
		</div>
	</div>		
	
</div>
