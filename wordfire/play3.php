<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- from source -->
	<title>AND>>>>MORE PETZ PLAYSCENZ</title>
	<!--  -->

	<!-- style -->
	<link rel="stylesheet" href="style/style.css">
	<style>
		body { background-color: #6cf; }
		a { color: #09c; }
		a:active { color: #9cf; }
		a:visited { color: #069; }

		#page {
			display: grid;
			row-gap: 0; grid-row-gap: 0;
			column-gap: 10px; grid-column-gap: 10px;
			grid-template-columns: [c1] 211px [c2] 566px [c3];
			grid-template-rows: [r1] 168px [r2] 97px [r3] 903px [c4];
		}

		/* header ------------------------------------------------------------------------------- */

		#header {
			grid-column: c2/c3;
			grid-row: r1/r2;
			align-self: center;
			justify-self: center;
			text-align: center;
		}

		h1 { padding: 0; margin: 0 0 5px 0; }

		h2 {
			color: #639;
			font-size: 24px;
			font-weight: 700;
			font-style: italic;
			padding: 0; margin: 0;
		}

		/* nav ---------------------------------------------------------------------------------- */

		#nav {
			grid-column: c2/c3;
			grid-row: r2/r3;
			align-self: center;
		}

		#nav > a { color: #000; }
		#nav > a:active { color: #000; }
		#nav > a:visited { color: #000; }

		#nav > #current {
			font-weight: 700;
			text-decoration: none;
		}

		/* content ------------------------------------------------------------------------------ */

		#content {
			grid-column: c2/c3;
			grid-row: r3/r4;

			display: grid;
			grid-template-columns: [cc1] 278px [cc2] 288px [cc3];
			grid-template-rows: [cr1] 75px [cr2] 73px [cr3] 63px [cr4] 63px [cr5] 75px [cr6] 138px
			[cr7] 76px [cr8] 57px [cr9] 283px [cr10];
			gap: 0; grid-gap: 0;

			padding: 5px;
		}

		#content > div {
			align-self: center;
			justify-self: center;
		}
	</style>
</head>
<body>
<?php include '../_menu.php'; ?>
	
	<div id="page">
		<div id="top-left" style="grid-column: c1/c2; grid-row: r1/r4; align-self: start;
		justify-self: start;">
			<img src="img/play3_fishbgrnd.jpg" width="200">
		</div><!-- #top-left -->

		<!-- header ------------------------------------------------------------------------------->
		<div id="header">
			<h1>petz**<br>
			WORDFIRE'S**petz</h1>
			<h2>AND>>>>MORE PETZ PLAYSCENZ</h2>
		</div><!-- #header -->

		<!-- nav ---------------------------------------------------------------------------------->
		<div id="nav">
			<a href="index.php">Home</a> |
			<a href="play1.php">PETZ PLAYSCENZ</a> |
			<a href="play2.php">MORE PLAYSCENZ</a> |
			<a href="play3.php" id="current">AND>>>>MORE <br> PETZ PLAYSCENZ</a> |
			<a href="possums.php">'POSSUMS</a> |
			<a href="play4.php">COMPLETED PLAYSCENZ</a> |
			<a href="sound.php">Sound <br> Files</a> |
			<a href="precious.php">PRECIOUS ONEZ</a>
		</div><!-- #nav -->

		<!-- content ------------------------------------------------------------------------------>
		<div id="content">
			<!-- left column -->
			<div class="times big" style="grid-column: cc1/cc3; grid-row: cr1/cr2; color: #609;
			align-self: end; justify-self: start; font-weight: 700; padding-bottom: 10px;">
				If you have an idea for a PLAYSCENZ email me your request at<br>
				<a href="mailto:wordfire@earthlink.net" style="color:
				#000;">wordfire@earthlink.net</a>
			</div>

			<div style="grid-column: cc1/cc2; grid-row: cr2/cr3; justify-self: start; padding-left:
			10px;">
				<img src="img/index_vote1.gif">
			</div>

			<div class="small center" style="grid-column: cc1/cc2; grid-row: cr3/cr4;
			align-self: start; padding-top: 5px;">
				For All PETZ Chicken Lovers !!<br>
				<u class="georgia medium" title="missing">mountaintopchickenyard.jpg</u><br>
				Mountaintop Chickenyard
			</div>

			<div class="small center" style="grid-column: cc1/cc2; grid-row: cr4/cr5;">
				your PETZ Will Love The Lifeguard Tower<br>
				View!!<br>
				<u class="georgia medium" title="missing">oceanview.jpg</u><br>
				Oceanview
			</div>

			<div class="small center" style="grid-column: cc1/cc2; grid-row: cr5/cr6;">
				THE PERFECT PLACE FOR A SPRING<br>
				WEDDING<br>
				<u class="georgia medium" title="missing">springweddinggarden.jpg</u><br>
				Spring Wedding Garden
			</div>

			<div style="grid-column: cc1/cc2; grid-row: cr6/cr7; padding: 10px; justify-self: start;
			align-self: start;">.</div>

			<!-- right column -->
			<div class="small center" style="grid-column: cc2/cc3; grid-row: cr3/cr4;">
				PETZ Will Love The Cool Arbor to Play<br>
				Under!<br>
				<span class="georgia medium" title="missing">flowerarbor.jpg</span><br>
				Flower Arbor
			</div>

			<div style="grid-column: cc2/cc3; grid-row: cr4/cr5; justify-self: start; align-self:
			end; padding: 15px 25px;">.</div>

			<div class="small center" style="grid-column: cc2/cc3; grid-row: cr5/cr7;">
				A WOODLAND PARADISE FOR YOUR PETZ<br>
				<a href="img/play3_uneditedpossumholler.jpg" target="tlx_new">
					<img src="img/play3_uneditedpossumholler.jpg" alt="uneditedpossumholler.jpg"
					width="240">
				</a><br>
				Possum Holler Background
			</div>

			<div class="small center" style="grid-column: cc2/cc3; grid-row: cr7/cr8;">
				PETZ SWIM WITH THE WONDERS OF THE<br>
				SEA<br>
				<u class="georgia medium">seafloor.jpg</u><br>
				Sea Floor
			</div>

			<div class="small arial center" style="grid-column: cc2/cc3; grid-row: cr9/cr10;
			justify-self: end; color: #35643a; font-weight: 700;">
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