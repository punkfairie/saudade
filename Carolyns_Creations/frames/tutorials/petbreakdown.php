<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rough breakdown of a petfile</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php include '../../../_menu.php'; ?>

	<div class="side-padding courier">
		<p>
			<div class="big purple center">
				<b>Rough breakdown of a petfile</b><br>
				<span class="comic-sans">~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br></span>
			</div>

			This is for people who want to know what the various sections of a pet file contain. The
			structure is very similar for a baby file. I'm just going to show this as links to a
			series of screengrabs, as I don't have time to do anything fancy with it. Pet and baby
			files are in fact saved-game files, so their internal information is changing all the
			time. However, the basic structure remains the same throughout, so we can do a fair bit
			of analytical work just looking at a pet or babyz in a hex editor. I'm not including any
			breakdown of Petz II .pet files, as they are very different.
		</p>

		<p>
			<a href="images/petbreakdown_PetNameIDAndBreedfileSection.gif">Here is the start of a
			typical Pet adopted in Petz 3, 4 or 5.</a><br>
			In it you can see the pet ID up there in the first two bytes, before the name Rosie.
			This is the section containing the petname, ID and main breedfile name. In a pet which
			has been imported from PetzII there is a bunch of other stuff in there too, but it's not
			really important.
		</p>

		<p>
			<a href="images/petbreakdown_xChecksumSection.gif">This is the end of the first
			section.</a><br>
			The part which you see highlighted is where the checksum information resides.
		</p>

		<p>
			<a href="images/petbreakdown_bStartofSectionContainingSliders.gif">This is the start of
			the section which contains brainslider data etc</a><br>
			note for those who want to cheat -- this section is where you should find the things
			that your pet learns, its tricks abilities etc.
		</p>

		<p>
			<a href="images/petbreakdown_aBrainsliderdata.gif">here's where the actual slider data
			is kept</a><br>
			The highlighted section shows where these important bytes are stored. I show how to deal
			with these in one of my tutorials.
		</p>

		<p>
			<a href="images/petbreakdown_EndOfSectionContainingSliders.gif">This is the end of the
			section containing sliders.</a>
		</p>

		<p>
			And immediately after that:
		</p>

		<p>
			<a href="images/petbreakdown_StartOfPaintedBallzSection.gif">this is the section with
			your pet's colour data</a><br>
			This is where the game stores whatever paint you throw at your pet from the can; if you
			don't paint the pet, it stores the pet's default colours here. It's the reason why, when
			you change certain ball colours in the .lnz section, you have to say "restore original
			colours" within the game before you see them. It's also why babyz' hexed eyelids don't
			show up as altered; there is no "restore" in babyz because there's no paint pot. But of
			course you can edit the relevant byte in this section, as I show in a "howto" elsewhere.
		</p>

		<p>
			<a href="images/petbreakdown_EndOfPaintedballzStartOfLnzSection.gif">The start of the
			.LNZ sections</a><br>
			Where the shape, default colours etc of the pet are defined. It comes in two chunks, the
			first of which is the adult data and the second of which is the puppy or kitten data. As
			of 2005, you can now edit these directly in Nicholas' LNZPro utility of course.
		</p>

		<p>
			<a href="images/petbreakdown_EndOfLnzSectionStartOfClothingNBreedInfo.gif">The end of
			the LNZ section.</a>
		</p>

		<p>
			<a href="images/petbreakdown_StartOfClothesAndBreedzInfo.gif">The clothes and breedfiles
			section</a><br>
			This section directly after the lnz info is where you'll see listed any clothing items
			that your pet is wearing. No need to edit this, just take the clothes off your pet or
			baby in the game! If there is a problem with starting the game because the clothing item
			is missing or damaged, just re-set your game as you start it up by hitting Ctrl and
			Shift together.
		</p>

		<p>
			<a href="images/petbreakdown_zEndOfClothesAndBreedzInfo.gif">End of clothes and
			breedfiles section</a><br>
			As you can see, the breedfiles which the pet needs are listed here, usually with their
			ID numbers.<br>
			<a href="images/petbreakdown_EndOfClothesAndBreedzInfo.gif">Here's another pet's similar
			section</a><br>
			so that you can see how it's done a bit clearer.
		</p>

		<p>
			<a href="images/petbreakdown_aGenderNeuterdetailsAndStartOfBreedIDstuff.gif">This
			section contains gender and main breed ID info</a><br>
			Here's the section that you need to concentrate on if you're changing a petfile's
			gender, or if you're trying to make it accept a different breed ID.
		</p>

		<p>
			<a href="images/petbreakdown_GenderAndNeuterSection.gif">The gender and neutering
			section</a><br>
			The highlighted bytes are where you change gender or neuter and un-neuter your pet. I
			show how to deal with this in one of my tutorials. Of course as of 2005, you can alter
			the gender using Nicholas' Petza utility.
		</p>

		<p>
			Also in this section of a pet, after YALP and before the breed ID info, you'll see an
			area which varies in length as your pet's experiences in life occur -- experiences such
			as finding a mate and so on.
		</p>

		<p>
			<a href="images/petbreakdown_BitWithBreedIDInfo.gif">The breed ID info</a><br>
			The highlighted bytes show where you would find the main breed ID number that your pet
			needs. I show how to deal with this in my tutorials.
		</p>

		<p>
			<a href="images/petbreakdown_EndOfYALPsectionStartOfGeneticsSection.gif">End of YALP
			section, start of Genetics</a><br>
			This is where an important part of your pet resides -- its genetics. I show in howtos
			elsewhere how to find and alter some of the important genetic bytes such as the Alley
			Sickness etc. You can now change these of course in Nicholas' LNZPro utility, but
			there's still plenty to explore here :-)
		</p>

		<p>
			<a href="images/petbreakdown_endofgenetics.gif">The end of your pet's genetics
			section.</a>
		</p>

		<p>
			<a href="images/petbreakdown_BeginFamilyTree.gif">Start of the Family Tree section.</a>
		</p>

		<p>
			<a href="images/petbreakdown_FamilyTreeDateofBirth.gif">Date of birth in Family
			Tree</a><br>
			The highlighted bytes are where the date of birth resides. I show how to deal with this
			in one of my tutorials.
		</p>

		<p>
			<a href="images/petbreakdown_FamilyTreeNumberOfGenerations.gif">Number of generations
			for pet</a><br>
			The byte which you see highlighted is the number of generations, in hexadecimal of
			course.
		</p>

		<p>
			<a href="images/petbreakdown_FamilyTreePinkoutlineorblue.gif">The pink or blue outline
			in Family Tree</a><br>
			The part which you see highlighted is where the pink or blue byte is stored. I show how
			to deal with this in one of my tutorials.
		</p>

		<p>
			<a href="images/petbreakdown_InPregnantPetEndOfFamilyTreeStartOfBabyData.gif">End of
			family tree section.</a><br>
			This particular pet is pregnant, so what you see here is also the start of a pup's data.
		</p>

		<p>
			<a href="images/petbreakdown_StartOfBaby.gif">The start of the puppy's file.</a><br>
			Here is the start of the puppy's data. The structure of the puppy file is the same as
			that of the mother, but it doesn't have the initial loading section with the pet ID and
			name because of course the game doesn't need that until the pup becomes separated from
			the mother. If there is more than one pup (or of course kitten for a catz pet), each pup
			or kitten's data follows the other after the previous one's family tree data.
		</p>

		<p>
			<a href="images/petbreakdown_StartOfBitmap.gif">Start of bitmap</a><br>
			And this is the end of the petfile, the bitmap which you see when the pet comes out of
			the door. This is not included in the checksum, so if this part only is corrupted you
			can simply replace it with another bmp file in order to get the game to accept the pet
			or baby. I show how to do this in one of my tutorials.
		</p>
	</div>
</body>
</html>