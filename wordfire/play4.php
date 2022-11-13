<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- from source -->
	<title>Completed Petz Playscenz Catz, Dogz 4&5</title>
	<meta name="description" content="Petz Playscenz Catz,Dogz 4&5">
	<meta name="keywords" content="Petz Playscenz Catz,Dogz 4&5">
	<!--  -->

	<!-- style -->
	<link rel="stylesheet" href="style/style.css">
	<style>
		body { background-color: #fff; padding: 0; margin: 2px; }
		a { color: #000; }
		a:active { color: #000; }
		a:visited { color: #000; }

		#page {
			display: grid;
			gap: 0; grid-gap: 0;
			padding: 0; margin: 0;
			border-top: 2px solid #c00;
			width: 761px;

			grid-template-columns: [c1] 151px [space] 2px [c2] 608px [c3];
			grid-template-rows: [r1] 151px [r2] 718px [r3];
		}

		#spacer {
			grid-column: space/c2;
			grid-row: r1/r2;
			align-self: stretch;
			justify-self: stretch;
			padding-bottom: 149px;
			border-bottom: 2px solid #c00;
		}

		/* header ------------------------------------------------------------------------------- */

		#header {
			grid-column: c2/c3;
			grid-row: r1/r2;
			align-self: center;
			justify-self: stretch;
			text-align: center;

			border-left: 2px solid #c00;
			border-right: 2px solid #c00;
			border-top: 2px solid #c00;
			background-color: #aecfcb;
			padding-bottom: 5px;
		}

		#header > h1 { padding: 0; margin: 0 0 5px 0; }

		#header > h2 {
			font-size: 24px;
			font-weight: 700;
			color: #066;
			padding: 0; margin: 0;
		}

		/* nav ---------------------------------------------------------------------------------- */

		#nav {
			grid-column: c1/space;
			grid-row: r2/r3;
			justify-self: center;
			text-align: center;

			border-top: 2px solid #c00;
			padding-top: 30px;
		}

		#nav > a {
			display: block;
			background-color: #9cc;
			color: #000;
			font-weight: 700;
			padding: 5px;
			margin-bottom: 2px;
			text-decoration: none;
		}

		#nav > a#current { background-color: #fff; }

		#nav > a:hover, #nav > a#current:hover {
			text-decoration: underline;
			background-color: #fcc;
		}

		/* content ------------------------------------------------------------------------------ */

		#content {
			grid-column: c2/c3;
			grid-row: r2/r3;

			border-left: 2px solid #c00;
			border-top: 2px solid #c00;
			border-right: 2px solid #c00;

			display: grid;
			gap: 0; grid-gap: 0;

			grid-template-columns: [cc1] 244px [cc2] 218px [cc3] 137px [cc4] 9px [cc5];
			grid-template-rows: [cr1] 68px [cr2] 32px [cr3] 49px [cr4] 38px [cr5] 49px [cr6] 40px
			[cr7] 27px [cr8] 72px [cr9] 25px [cr10] 318px [cr11];
		}

		#content > div {
			text-align: center;
			justify-self: center;
		}

		.border-left { border-left: 2px solid #c00; }
	</style>
</head>
<body>
<?php include '../_menu.php'; ?>

	<div id="page">
		<div id="top-left"></div>

		<div id="spacer"></div>

		<div id="header">
			<h1>petz**<br>
			WORDFIRE'S**petz</h1>
			<h2>COMPLETED PLAYSCENZ</h2>
		</div><!-- #header -->

		<div id="nav">
			<a href="index.php">Home</a>
			<a href="play1.php">PETZ PLAYSCENZ</a>
			<a href="play2.php">MORE PLAYSCENZ</a>
			<a href="play3.php">AND>>>>MORE PETZ PLAYSCENZ</a>
			<a href="possums.php">'POSSUMS</a>
			<a id="current" href="play4.php">COMPLETED PLAYSCENZ</a>
			<a href="sound.php">Sound Files</a>
			<a href="precious.php">PRECIOUS ONEZ</a>
		</div><!-- #nav -->

		<div id="content">
			<div style="grid-column: cc1/cc2; grid-row: cr1/cr2; justify-self: start; align-self:
			center; padding: 5px 10px 0 10px;">
				<img src="img/index_vote1.gif">
			</div>

			<div class="medium arial" style="grid-column: cc1/cc2; grid-row: cr2/cr3; justify-self:
			start; align-self: end; padding-left: 5px; padding-bottom: 5px;"><i><b>.</b></i></div>

			<!-- left column -->
			<div class="small arial" style="grid-column: cc1/cc2; grid-row: cr4/cr6;">
				Waterfalls Make This A Refreshing ChickenYard
				<div style="background-image: url(img/play4_frame_blue_pinstripe.gif); width: 234px;
				height: 35px; padding-top: 15px;">
					<u class="georgia medium" title="missing" style="background-color: #fff;">
						mountaintopchickenyard.jpg
					</u>
				</div>
				CHICKENYARD PETZ 4
			</div>

			<div class="arial" style="grid-column: cc1/cc2; grid-row: cr6/cr7; justify-self: start;
			text-align: left; padding-left: 5px;">
				<a href="dl/play4_chickenyard.env">CLICK HERE TO DOWNLOAD CHICKENYARD PETZ 4</a>
			</div>

			<!-- middle column -->
			<div class="arial" style="grid-column: cc2/cc3; grid-row: cr4/cr5;
			justify-self: start; text-align: left; padding-left: 5px;">
				<a href="dl/play4_weddingwalk1.62mb.env">CLICK HERE TO DOWNLOAD WEDDING WALK PETZ
				4</a>
			</div>

			<div class="small arial" style="grid-column: cc2/cc3; grid-row: cr5/cr7;
			align-self: center; justify-self: center;">
				A complete PLAYSCENZ !<br>
				<u class="georgia medium" style="display: block; padding: 10px 10px; border: 2px
				ridge #000;" title="missing">
					springweddinggarden.jpg
				</u>
				PETZ 4 Version
			</div>

			<div class="border-left" style="grid-column: cc2/cc3; grid-row: cr4/cr9; align-self:
			stretch; justify-self: stretch;"></div>

			<!-- right column -->
			<div class="arial small" style="grid-column: cc3/cc4; grid-row: cr4/cr6;
			align-self: center; justify-self: center;">
				Observe The Sea From<br>The Lifeguard Post<br>
				<div style="background-image: url(img/play4_frame_dkblue_canvas.gif); width: 130px;
				height: 35px; padding-top: 15px;">
					<u class="georgia medium" title="missing" style="background-color: #fff;">
						oceanview.jpg
					</u>
				</div>
				OceanView Petz 4
			</div>

			<div class="arial" style="grid-column: cc3/cc4; grid-row: cr6/cr8;
			align-self: center; justify-self: start; padding-left: 5px; text-align: left;">
				<a href="dl/play4_oceanview1.env">CLICK HERE TO DOWNLOAD OCEAN VIEW PETZ 4</a>
			</div>

			<div class="border-left" style="grid-column: cc3/cc4; grid-row: cr4/cr9; align-self:
			stretch; justify-self: stretch;"></div>

			<!-- yellow god -->
			<div style="grid-column: cc1/cc4; grid-row: cr10/cr11; background-color: #ffc;
			align-self: stretch; justify-self: stretch; text-align: right;"></div>

			<div class="small arial center" style="grid-column: cc2/cc4; grid-row: cr10/cr11;
			justify-self: end; align-self: end; color: #000; font-weight: 700; padding-bottom:
			10px;">
				The Life,Truth and Power<br>
				Of GOD<br>
				<img src="img/index_animation.gif" width="130" alt="animation.gif"><br>
				WORDFIRE

				<br><br>

				Lots Of KEWL Stuff Here<br>
				<a href="http://pineconecattery.com" target="tlx_new">
					<img src="img/index_judysbanner.jpg" width="130">
				</a><br>
				Edited Versions Also<br>
				Available Of These<br>
				Playscenz
			</div>
		</div><!-- #content -->
	</div><!-- #page -->
</body>
</html>