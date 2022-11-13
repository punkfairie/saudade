<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lnz file details</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php include '../../../_menu.php'; ?>
	
	<div class="side-padding">
		<div class="center">
			<p class="bigger">
				<span class="purple">
					<b>
						The Mad Scientist Hexer Reveals the secrets of the LNZ files<br>
						ahahahaaaa!  Hah!  Ahaha...
					</b><br>
					~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>
				</span>
			</p>

			<p class="big">
				What I'm going to try and do here is to explain to you all in more depth what
				all those mysterious parts of a .LNZ file are for, what they do, and how to
				change them.  Once you understand it, you will be able to make a breedfile
				that's almost any shape and have it breed reasonably true, or a Babyz of any
				shape, or a weird and wonderful Oddballz breed...
			</p>

			<p class="big">
				Trust me.  I'm a hexer (bwahahaha...)
			</p>

			<p class="big">
				The .LNZ file, or "Linez" file, is the core data that the game reads when it is
				making a pet from a breedfile or a baby from the main Resource dll file. You
				will also find .LNZ sections used for the simpler mice or grubz, also in or for
				a few toyz, such as the Auto-rolling Ball or milk bottle. These .LNZ files work
				the same way as the ones for Breedz and Babyz, but because they are associated
				with simpler behavours we are more limited in what we can do with them that will
				actually show up in the game.
			</p>

			<p class="big">
				Clothing files have a .CLZ section which is very, very similar to .LNZ files.
				ball-covering clothes (shirts etc) make use of Paint Ballz, and hats etc make
				use of Add Ballz. If you want to insert a clothing style into a breedz or babyz
				.LNZ (for instance, to make the antlers permanent), be aware that you can't just
				copy/paste and change the ball numbers. You will also need to do a bit of
				fiddling -- for instance, there are fewer columns in the .CLZ add ball sections
				than there are in the .LNZ ones.
			</p>

			<p class="big">
				It has come to my notice that many people don't find how the .LNZ file works and
				what the various programmers' comments, mnemonics, keywords and Key Texts are,
				as blindingly obvious as I do; so I'm writing more detailed notes here in hopes
				that it will help.
			</p>

			<p class="big">
				As a prologue, here are<br>
				<a href="LNZ_summary.php"><b>Some Important Notes and a Summary</b></a>
			</p>

			<p class="big">
				Now for the meat of the innards (cackle snurk) ;-) I'm breaking the whole thing
				down into chunks.<br>
				<a href="LNZ1st.php">The first chunk, here,</a><br>
				contains several areas of the .LNZ which are not present in all breedz. These
				seem to confuse people most<br>
				<a href="LNZ2nd.php">The second chunk, here,</a><br>
				contains the major areas which are common to all breedz.<br>
				NOTE that Bodyarea numbers matter for some issues (see the [Add Ball] section in
				the 2nd Chunk).<br>
				Here are the Bodyarea numbers for <a href="BabyzBodyAreaNumbers.php">Babyz</a>
				and for <a href="CatzBodyAreaNumbers.php">Catz</a> and for <a
				href="DogzBodyAreaNumbers.php">Dogz</a><br> <a href="LNZ3rd.php">The third
				chunk, here,</a><br>
				is all about areas which you can insert into your breed even though they are not
				always actually seen inside an original P.F.Magic breedfile.<br>
				April 29, I've fixed up some typos in this third chunk -- sorry if any of them
				confused you before.<br>
				<a href="LNZ4rd.php">The fourth chunk, here,</a><br>
				is all about areas which are entirely specific only to Oddballz.
			</p>

			<p class="big">
				Okay, away off now and make some fantastic new breedz or babyz.  Hexing is fun,
				enjoy it!<br>
			</p>

			<p class="big">Carolyn Horn<br></p>
		</div>
		
		<p class="big">.</p>
		<p class="big">.</p>
		<p class="big">.</p>
		<p class="big">.</p>
		
		<p class="big">
			What have we here? It seems to be a present of some kind...
		</p>
		
		<p class="big">
			<img src="images/lnzdetails_presentcaper.gif">
			try clicking <a href="../greatpresentcaper.php">here</a>
		</p>
	</div>
</body>
</html>