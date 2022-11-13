<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- from source -->
	<title>MORE PLAYSCENZ</title>
	<!--  -->

	<!-- style -->
	<link rel="stylesheet" href="style/style.css">
	<style>
		/* page grid */

		#page {
			display: grid;
			gap: 0; grid-gap: 0;
			grid-template-columns: [c1] 145px [c2] 3px [c3] 607px [c4];
			grid-template-rows: [r1] 159px [r2] 1178px [r3];
			row-gap: 5px;
		}

		/* top right image ---------------------------------------------------------------------- */

		#top-right {
			grid-column: c1 / c2;
			grid-row: r1 / r2;
			align-self: center;
			justify-self: center;
		}

		/* header ------------------------------------------------------------------------------- */

		#header {
			grid-column: c3 / c4;
			grid-row: r1 / r2;

			text-align: center;
			align-self: center;
		}

		#header > h1 {
			font-size: 48px;
			font-weight: 700;
			text-decoration: underline;
			font-style: italic;
			color: #c0f;
			padding: 0 0 5px 0; margin: 0;
		}

		#header > h2 {
			font-size: 32px;
			font-weight: 700;
			color: #c00;
			padding: 0; margin: 0;
		}

		/* nav ---------------------------------------------------------------------------------- */

		#nav {
			grid-column: c1 / c2;
			grid-row: r2 / r3;
		}

		#nav > a {
			text-decoration: none;
			color: #fff;
			font-weight: 700;
			text-align: center;
			padding: 5px;
			display: block;
			background-color: #909;
			margin-bottom: 2px;
		}

		#nav > a:hover { background-color: unset; text-decoration: underline; }

		#nav > a#current { background-color: unset; }

		#nav > a:first-child { margin-top: 40px; }

		/* content ------------------------------------------------------------------------------ */

		#content {
			grid-column: c3 / c4;
			grid-row: r2 / r3;

			padding: 4px;
			padding-right: 6px;
			background-color: #cf9;

			display: grid;
			gap: 0; grid-gap: 0;
			grid-template-columns: [cc1] 327px [cc2] auto [cc3];
			grid-template-rows: [cr1] 88px [cr2] 74px [cr3] 56px [cr4] 58px [cr5] 160px [cr6] 59px
				[cr7] 62px [cr8] 98px [cr9] 226px [cr10] 29px [cr11] 159px [cr12] 109px [cr13];
		}

		#content > div { align-self: center; justify-self: center; }
	</style>
</head>
<body>
<?php include '../_menu.php'; ?>
	
	<div id="page">

		<!-- top right image ---------------------------------------------------------------------->

		<div id="top-right">
			<img src="img/play2_petz0.jpg">
		</div>

		<!-- header ------------------------------------------------------------------------------->

		<div id="header">
			<h1>petz**<br>
			WORDFIRE'S**petz</h1>
			<h2>MORE PLAYSCENZ</h2>
		</div>

		<!-- nav ---------------------------------------------------------------------------------->

		<div id="nav">
			<a href="index.php">Home</a>
			<a href="play1.php">PETZ PLAYSCENZ</a>
			<a href="play2.php" id="current">MORE PLAYSCENZ</a>
			<a href="play3.php">AND>>>>MORE PETZ PLAYSCENZ</a>
			<a href="possums.php">'POSSUMS</a>
			<a href="play4.php">COMPLETED PLAYSCENZ</a>
			<a href="sound.php">Sound Files</a>
			<a href="precious.php">PRECIOUS ONEZ</a>
		</div>

		<!-- content ------------------------------------------------------------------------------>

		<div id="content">
			<div style="grid-column: cc1/cc3; grid-row: cr1/cr2; font-style: italic; align-self:
			center; justify-self: start;" class="big">
				<b class="courier" style="color: #03c;">e-mail me for PETZ 4 or 5 unedited versions
				or right click enlarged image and save it</b><br>
				<a href="mailto:wordfire@earthlink.net" class="courier" style="color:
				#000; font-weight: 700;">wordfire@earthlink.net</a>
			</div>

			<div style="grid-column: cc1/cc2; grid-row: cr2/cr3; align-self: center; justify-self:
			start;">
				<img src="img/index_vote1.gif">
			</div>

			<div class="georgia medium" title="missing" style="grid-column: cc1/cc3; grid-row:
			cr3/cr4; justify-self: center; padding-top: 10px;">
				violet_bar.gif
			</div>

			<div style="grid-column: cc1/cc2; grid-row: cr4/cr5;" class="small arial center">
				PETZ And Dolphins Play Here!<br>
				<u class="georgia medium" title="missing">dolphinden.jpg</u><br>
				Dolphin Window
			</div>

			<div class="small arial center" style="grid-column: cc1/cc2; grid-row: cr5/cr7;">
				All Your PEtZ Love To Gaze Out This Window<br>
				<a href="img/play2_view.jpg" target="tlx_new">
					<img src="img/play2_view.jpg" alt="dolphinden.jpg" width="240">
				</a><br>
				The View
			</div>

			<div class="small arial center" style="grid-column: cc1/cc2; grid-row: cr7/cr8;">
				PETZ Relax And Play InOriental Style!!<br>
				<u class="georgia medium" title="missing">orientalroom.jpg</u><br>
				Asian Attitude
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr4/cr6;
			justify-self: end;">
				Your PETZ Will Love Cool Water And Green Grass<br>
				<a href="img/play2_watergarden2.jpg" target="tlx_new">
					<img src="img/play2_watergarden2.jpg" alt="watergarden2.jpg" width="240">
				</a><br>
				Watergarden
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr6/cr9;
			justify-self: end;">
				A Rug In The Sun And Room To Play<br>
				<a href="img/play2_1parlor.jpg" target="tlx_new">
					<img src="img/play2_1parlor.jpg" alt="1parlor.jpg" width="240">
				</a><br>
				The Parlor
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr9/cr10;
			justify-self: end;">
				The BIG CAT Gallery<br>
				<a href="img/play2_wildthingz.jpg" target="tlx_new">
					<img src="img/play2_wildthingz.jpg" alt="wildthingz.jpg" width="240">
				</a><br>
				WILDTHINGZ
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr11/cr12;
			justify-self: end; color: #006; font-weight: 700;">
				The Life,Truth and Power<br>
				Of GOD<br>
				<img src="img/index_animation.gif" width="130" alt="animation.gif"><br>
				WORDFIRE
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr12/cr13;
			justify-self: end;color: #006; font-weight: 700;">
				Lots Of KEWL Stuff Here<br>
				<a href="http://pineconecattery.com" target="tlx_new">
					<img src="img/index_judysbanner.jpg" width="130">
				</a><br>
				Edited Versions Also<br>
				Available Of These<br>
				Playscenz
			</div>
		</div><!-- content -->
	</div>
</body>
</html>