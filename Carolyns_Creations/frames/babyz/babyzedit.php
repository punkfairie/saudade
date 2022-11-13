<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Special Babyz stuff for editing</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php include '../../../_menu.php'; ?>
<div class="center">
	<p class="big">
		<a href="#REF">Fix 'n' Ref</a>...
		<a href="#EDT">Easy Babyz</a>...
		<a href="#UTL">Edit Info</a>...
		<a href="#SCN">Easy Scenes</a>...
		<a href="#TOY">Toyz/Clo</a>...
		<a href="#BAB">Babyfile edit</a>...
	</p>

	<p class="big">
		Go to <a href="../tutorials/tutorials.php">my Main tutorial page</a><br>
		for general stuff and colour charts, Resource Hacker tips, LNZ Pro 2 tips etc<br>
		Go to <a href="../tutorials/lnzdetails.php">my LNZ breakdown chunks</a><br>
		for some very useful information on the LNZ files which make up the core of your new
		baby.<br>
		<a href="../nicholastools.php">Go here for info on Nicholas' Babyza, Tinker, and LNZPro
		2</a><br>
		<span class="normal">
			Not created by me, obviously -- but I've helped with information and files, and I feel
			very protective of Nicholas. He's a National Treasure :-)
		</span>
	</p>

	<p>
		<b>NOTE</b> My tutorials mostly tell you how to edit in the days before
		<a href="../NicholasTools.php" title="Nicholas' utilities">Nicholas' tools</a> were created
		for us all. I keep the tutorials and howtos here anyway because they are still useful. But
		wherever you see mention of Notepad, you can use the same info when editing the LNZ or CLZ
		section in LNZPro. And <a href="../tutorials/lnzdetails.php">my LNZ info chunks </a>are 
		still invaluable.
	</p>

	<p class="big">
		<a href="../tutorials/hexerbaby.php">The special hexer baby</a> -- thanks, 
		<a href="http://rgn.riverpebble.net" class="defunct" target="_TOP">L41N</a>!<br>
		This is L41N's brilliant idea. She sent me a hexer baby which I tidied up and added to with
		extra comments, a how-to page etc.
	</p>

	<p class="big">
		<a href="sphinx.php">Go here for Sphinx's Special tools</a><br>
		<span class="normal">
			Also not created by me, obviously :-) but Sphinx has generously offered them to the BC
			and, since I have fond memories of her jabbing, poking and encouraging me until I made
			many of my Babyz discoveries, I am very happy to have something of hers here.
		</span>
	</p>

	<p>
		<span class="big">IMPORTANT NOTE:</span><br>
		Some files that we hexers want to edit are .DLL files, such as the large BabyzRez.dll.
		Windows, by default, has files of this type "hidden" -- presumably as some kind of safety
		feature, but in our case we need to see them. So if you cannot see them on your machine,
		open My Computer or Windows Explorer, choose View and Options, and then under View make sure
		that "Show all files" is ticked. While you're about it, un-tick "Hide MS-DOS file
		extensions", because that's a nuisance too.
	</p>

<!-- Fixes & Ref ---------------------------------------------------------------------------------->
	<p class="bigger purple">
		<strong id="REF">Babyz fixes, and Reference items</b><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>
	</p>

	<p class="big">
		<a href="vvccr.php">ViaVoice fix</a><br>
		<a href="babyzxpsoundfix.php">Sound fixed files for Windows XP</a><br>
		Now that Nicholas has made Petza fix the sound problem while the game is running, you don't
		really need this soundfix. But I'm leaving it up for anyone who cannot get petza to work for
		them or wants alternative files for the "fooler". I have the link to Nicholas' site on my
		"Nicholas' Tools" page.<br>

		<a href="dl/babyzedit_BabyzWithMenu.zip">Modified Exe for Playpen access</a><br>
		<span class="normal">
			This is my ongoing testbed .exe file. My hope is that I will eventually be able to get
			the game to accept more playscenes, by avoiding the need to use the house icon. As yet
			in my game I have not been able to get it to work for the Attic and Nursery, so have not
			got as far as further scenes. I'm producing it for you in case you can do better with
			it. It does have one feature that you might enjoy; the Playpen and Desktop "scenes" are
			both usable. It overwrites your original, so please please make sure you put yours
			somewhere safe before trying mine.
		</span><br>

		<a href="../tutorials/BabyzColours.php">My Colour Chart for Babyz hexing</a><br>
		<a href="../tutorials/BabyzFreezeFix.php">How to fix problems with Babyz freezing or
		crashing</a><br>
		<a href="../tutorials/BabyzSliderBrains.php">Brain-sliders for your Babyz' health and
		happiness</a><br>
		<a href="../tutorials/BabyzBallList.php">Babyz Ballz list</a><br>

<!-- Fooler/Full Game ----------------------------------------------------------------------------->
		<a href="dl/babyzedit_BabyzrezSafeCopy.zip">Backup copy of un-edited BabyzRez.dll</a><br>
		<span class="normal">
			For people who don't use my easy-edit package to create new babyz. If you've messed the
			thing up in Resource Hacker or a hex editor and don't want to have to re-install, then
			this is the download for you.
		</span><br>

		<a href="dl/babyzedit_babyzCDfix.zip">A fix for when that annoying CD message pops
		up</a><br>
		<span class="normal">
			...and you don't want to either have to keep putting the CD in the drive or re-setting
			the game back to its defaults.
		</span>
	</p>

	<p class="big">
		<a href="babyzfooler.php"><b>Babyz Demo Fooler.</b></a><br>
		<span class="normal">
			A partial solution for people who cannot buy the game anywhere; this fools the demo into
			giving you better play.
		</span>
	</p>

	<p>
		And for people who have lost their CD and cannot find another anywhere,
		<a href="babyzfix">here is a page</a> where you can find a backup ISO image of the complete
		game and an installation fix. The game is zipped of course, so you would need to unzip it
		and either burn it to a CD or mount it with image-mounting software. If you don't know what
		that means, just burn it to a CD.
	</p>

	<p>
		And, if you're running Windows (blech) XP or (argh blech) Vista, I strongly advise you to
		get Nicholas' Petza/Babyza. You can get the link to his site via my "Nicholas' Tools" page.
	</p>

<!-- Easy-Edit ------------------------------------------------------------------------------------>
	<p class="big">
		<span id="EDT">Ultra-easy editing to create new babyz</span><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>

		<a href="dl/babyzedit_BabyzEditingMadeEasy.zip">Ultra easy New-babyz editing "howto"
		package</a><br>
		<a href="dl/babyzedit_BabyzRezForEasy-edits.zip">The Rez.dll plus .lnz from Ultra Easy
		package</a><br>
		<span class="normal">
			Only download the Rez.dll version if you either cannot change the single byte yourself
			or the little patch from the "howto" package doesn't work. The zipfile is 5.5 megabytes
			in size.
		</span>
	</p>

	<p class="big">
		<span class="normal">
			(Take a look also at my LNZ file breakdown chunks
			<a href="../tutorials/lnzdetails.php">here</a>, they really should be helpful.)<br>
			This is part of my "Ultra-easy" editing range; this package includes all that you need
			in order to create new babyz easily, using only Notepad, Wordpad and either Windows
			Explorer or My Computer! Woo-hoo! NOTE: You do have to read the included text files
			carefully and follow the instructions, or the method won't work for you. Click
			<a href="images/babyzedit_BabyzExtLnz2.jpg">here </a>to see a screengrab of my Babyz
			directories in Windows Explorer, so you can see where the .lnz files are supposed to go
			if you're confused. The icon beside the .lnz files are Notepad ones because I used
			Windows Explorer's View -> Options -> File Types menu item to Associate the .lnz
			extension with Notepad.exe.
		</span><br>

		This next lot is for people who want to edit items such as the bubbles from the bubble
		machine. You can only change those by editing them in the BabyzRez.dll file, and all the
		in-game bubbles will be changed if you do -- bath bubbles etc. So if people want your
		bubbles they will have to download the external-filmstrip files.<br>
		
		<a href="dl/babyzedit_externalfilmstripbabyzrez.zip">The Rez.dll prepared for external
		filmstrips</a><br>
		This is a 5.5 megabyte download and is just the .dll file with two bytes changed to make the
		game look for filmstrips externally. You can change the bytes yourself instead if you wish,
		but whichever you choose, you absolutely need to download the filmstrips.<br>

		<a href="dl/babyzedit_Babyzfilmstripfiles.zip">The external filmstrips</a><br>

		This next one is a .dll which has been prepared to use external lnz as well as external
		filmstrips. If you download it, make sure to download also the external filmstrips zip which
		also contains the required external lnz.
		<a href="dl/babyzedit_externalfilmstripandlnzbabyzrez.zip">The Rez.dll prepared for external
		filmstrips</a>
	</p>

	<p class="big">
		<a href="../tutorials/fatima.php">Ultra easy New-babyz Egyptian-pharaoh eyes, bangs, single
		pigtail with bow</a><br>
		This is actually the complete .lnz for a baby, for use with my Ultra easy New-babyz editing
		"howto".
	</p>
	<p>
		<a href="dl/babyzedit_Fatima.zip" title="Fatima">
			<img src="images/babyzedit_Fatima.gif" alt="Flowers etc on a babyz">
		</a>
	</p>

	<p class="big">
		<a href="../tutorials/faedruna.php">Ultra easy New-babyz Flowers, Long hair Etc</a><br>
		This is actually the complete .lnz for a baby, for use with my Ultra easy New-babyz editing
		"howto", including instructions for customising it.<br>
		<a href="dl/babyzedit_Faedrune.zip" title="Faedrune">
			<img src="images/babyz_Faedruna.gif" alt="Flowers etc on a babyz">
		</a><br>

		<a href="../tutorials/BabyzWingzCodes.php">Ultra easy New-babyz Wingz</a><br>
		<img src="images/babyzedit_Check.gif" alt="wingz on babyz">
	</p>

<!-- Edit Info / Special -------------------------------------------------------------------------->
	<p class="big">
		<span id="UTL">Various Information for making special new babyz</span><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>

		This is for editing the .lnz files; my 
		<a href="dl/babyzedit_BabyzEditingMadeEasy.zip">easy-edit kit</a> along with Notepad.exe is
		how I used to make new babyz, and I recommend it to you.<br>
		Nowadays I also use the ever-more-fantastic LNZPro, either with my easy-edit kits or simply
		to rehex one of my existing babyz.<br>
		<a href="../tutorials/hexerbaby.php">Here's a special hexer baby</a> for you to use with 
		LNZPro -- thanks,
		<a href="http://rgn.riverpebble.net" class="defunct" target="_TOP">L41N</a>, for the great 
		idea and the base baby! This method is also <b>highly</b> recommended.<br>
		As I say above, please also take a look at my LNZ file breakdown chunks
		<a href="../tutorials/lnzdetails.php">here</a>, they really should help you understand the 
		.lnz files.
	</p>

	<p class="big">
		<a href="../tutorials/ThinFatBaby.php">How to hex a babyz that's permanently skinny (or
		fat)</a><br>
		<a href="../tutorials/Polygons4BabyzHowto.php">How to use Polygons in Babyz hexing</a><br>
		<a href="../tutorials/ClothingToBreed.php">How to add stuff from clothing items to your
		babyz</a><br>
		<a href="dl/babyzedit_Pepebabyz.zip">
			<img src="images/babyzedit_Pepebabyz.gif" alt="Pepe Babyz">
		</a><br>
		<a href="../tutorials/Linez4BabyzHowto.php">How to use Linez in Babyz hexing</a><br>
		<a href="../tutorials/HowToHexNewBabyz.php">Making new babyz</a><br>
		<a href="../tutorials/BabyzTeethEnabling.php">How to "enable" the original teeth</a><br>
		<a href="../tutorials/PreemieBabiesHowto.php">Creating Preemie babyz</a><br>
		<a href="../tutorials/AddBallz.php">Moving Add Ballz around</a><br>
		<a href="../tutorials/xyz.php">x, y, z positions -- how to figure it out</a><br>
		<a href="../tutorials/BabyzTextures.php">changing textures in Babyz, also kiss-marks</a><br>
		
		<a href="dl/babyzedit_HexingBabyzHairEyelashesAndGrowthAug2003.zip">Hexing Babyz Hair,
		Eyelashes, and growth</a><br>
		<span class="normal">
			Updated August 2003. This time not on .baby files (see below, "Various Information for
			Editing adopted .Baby files", for info on making already-adopted babyz grow). This is
			for people who want to adopt babyz that will grow without alteration. Includes some info
			on changing body colours. Also includes example babyz and .lnz sections.
		</span>
	</p>

	<p><img src="images/babyzedit_Babyzgrow2.gif" alt="growing babyz"></p>

	<p class="big">
		<a href="dl/babyzedit_RemovingBabyzOrPetzLegsEtcApr2003.zip">Making a Baby or Pet with
		missing limbs.</a><br>
		<span class="normal">
			and before anyone sends me hate-mail for this one, please read the readme. This tutorial
			is intended as a service for people who need to relate to virtual playmates who do not
			have the "body perfect".
		</span><br>

		<a href="../tutorials/BabyzFAQ.php">Hair FAQs</a>
	</p>

	<p class="big">
		<span id="SCN">My Playscene Easy-edit Kits</span><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>

		NOTE: Since I made these, Nicholas has made the Tinker and LNZPro 2 programmes. You can
		download them via my Nicholas Tools page, and for info on how to use them for this purpose
		<a href="../tutorials/TinkerAndLNZPro2Tips.php">click here</a><br>
		Specifically on making playscenes show up separately using LNZPro,
		<a href="../tutorials/BabyzSceneSeperate.php">click here.</a><br>

		<a href="dl/babyzedit_KitchenExternal.zip">A kit for making new kitchen Playscenes</a><br>
		<span class="normal">
			part of my "Ultra-easy" editing range. This particular one has the filmstrips separated
			out, but I have not had time to put the bitmap headers on them for you.
		</span><br>

		<a href="dl/babyzedit_ClothesclosetExternal.zip">A kit for making new Clothes Closet
		Playscenes</a><br>
		<span class="normal">
			part of my "Ultra-easy" editing range. This particular one has the filmstrips separated
			out, but I have not had time to put the bitmap headers on them for you.
		</span><br>

		<a href="dl/babyzedit_FamilyroomExternal.zip">A kit for making new Family Room
		Playscenes</a><br>
		<span class="normal">part of my "Ultra-easy" editing range.</span>

		<a href="dl/babyzedit_AtticExternal.zip">An easy-edit kit for making new Attic
		Playscenes</a><br>
		<span class="normal">part of my "Ultra-easy" editing range.</span>

		<a href="dl/babyzedit_BackyardExternal.zip">An easy-edit kit for making new Back Yard
		Playscenes</a><br>
		<span class="normal">part of my "Ultra-easy" editing range.</span>

		<a href="dl/babyzedit_PlayroomExternal.zip">An easy-edit kit for making new Playroom
		Playscenes</a><br>
		<span class="normal">part of my "Ultra-easy" editing range.</span>

		<a href="dl/babyzedit_NurseryExternal.zip">A kit for making new nursery Playscenes</a><br>
		<span class="normal">
			part of my "Ultra-easy" editing range; this package includes the playscene and a load of
			external files which you do need to put in the correct places before the game will
			accept it. Please read the included info carefully. Note that if you want the window
			area to look right, you'll need to either change the background in the affected area or
			you'll need to edit the window filmstrips. If you want my
			<a href="BabyzPlayscene.php">Secret Wood Playscene</a>, you'll need to install this
			"change your nursery" kit first. Click 
			<a href="images/babyzedit_ExternalStuffWhereItGoes.jpg">here </a>to see a screengrab of
			my Babyz directories in Windows Explorer, so you can see where the Nursery's external
			files are supposed to go if you're confused.
		</span>
		If you're having trouble working out how to fix problems with the background<br>
		<span class="normal">
			being messed up in places, or you need help with editing the filmstrips,
			<b>
				download <a href="dl/babyzedit_FilesToHelpSceneEditing.zip">this file</a> also
			</b>
			-- it is specific to Nursery-based scenes, but with any luck it'll help you to
			understand how to deal with others too.
		</span>
	</p>

	<p>
		<span class="big">
			<a href="dl/babyzedit_EditingBabyzSecretPlaypen.zip">Changing your Babyz "secret"
			Playpen background</a>
		</span><br>
		Note that this tells you to edit your game's main .exe file. It also gives a hint that you
		can edit other graphics within the .exe.<br>
		For people who have a later version of the game than mine, you may prefer to use:<br>
		<span class="big">
			<a href="../tutorials/BabyzSecretPlaypen.php">this simpler method</a> for changing the
			playpen background.<br>
		</span>
		Works with later versions of the game than mine. If this doesn't work for you, either get a
		later version of the Babyz.exe -- my "modified" one, for instance, or there may be one
		available at Daniel Wright's 
		<a href="http://www.dmwright.com/babyz/" class="defunct" target="_top">The Babyz Crib</a> --
		or check out my "howto" above on editing the .exe.
	</p>

<!-- Toy Editing ---------------------------------------------------------------------------------->
	<p class="big">
		<span id="TOY">Filmstrip editing, Toyz, Toychests, and Clothes</span><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	</p>

	<p class="big">
		NOTE: Since I made the easy-edit kits, Nicholas has made the Tinker and LNZPro 2 programmes.
		You can download them via my Nicholas Tools page, and for info on how to use them for this
		purpose <a href="../tutorials/TinkerAndLNZPro2tips.php">click here</a>
	</p>

	<p class="big">
		<a href="../tutorials/MakingCrackersShowSeparately.php">Extra help; making your own crackers
		come out of the box</a><br>
		<a href="dl/babyzedit_CarrotsBagExternal.zip">The Carrot bag mentioned in the cracker-box
		tut</a><br>

		<img src="images/babyzedit_Carrotsbag.gif" alt="carrots bag"><br>

		<a href="../tutorials/NonOverwriteClothes.php">Extra help on non-overwriting clothes
		etc</a><br>
		<a href="../tutorials/SpoonBlobColour.php">Changing the jar and bowl food-blob colour on the
		spoon</a><br>
		<a href="dl/babyzedit_SipcupEasyedit.zip">Easy-edit kit for making your own Sippy
		cups</a><br>
		
		<a href="dl/babyzedit_redchestEasy-edit.zip">A kit for making your own "Red"
		Toychests</a><br>
		<span class="normal">
			Everything is here for your easy-editing pleasure, except that I've not put the bitmap
			headers on the chopped filmstrips. I thought I'd leave that bit of fun for you...
			actually I had no time to do it :-)
		</span><br>

		<a href="dl/babyzedit_HippochestEasy-edit.zip">A kit for making your own Hippo
		Toychests</a><br>
		<span class="normal">
			Everything is here for your easy-editing pleasure, except that I've not put the bitmap
			headers on the chopped filmstrips. I thought I'd leave that bit of fun for you...
			actually I had no time to do it :-)
		</span><br>

		<a href="dl/babyzedit_BabyzFrogChestEasy-edit.zip">A kit for making your own
		Toychests</a><br>
		<span class="normal">
			This is an external-filmstrip easy-edit package. Those who are keen to learn more about
			filmstrip editing may also wish to download 
			<a href="dl/babyzedit_BabyzFrogChestFilmstripSections.zip">this second zipfile</a>
			with its split-filmstrip and howto, but those who just want as much done for them as
			possible will wish to download 
			<a href="dl/babyzedit_BabyzFrogChestFilmstripBitmaps.zip">this third zipfile</a> with
			ready-prepared bitmaps instead of the second zipfile.
		</span><br>

		<a href="dl/babyzedit_gunkchest.zip">My Gunk Toychest</a><br>
		<img src="images/babyzedit_Gunkchest.gif" alt="Gunk toychest"><br>
		<span class="normal">
			Think it's pretty dreadful?? Well, consider yourselves lucky that I didn't drive you
			potty with my "gone" toychest *cackles crazily*
		</span><br>

		<a href="dl/babyzedit_KidpoolmakingKit.zip">A kit for making your own kiddie pools</a><br>
		<span class="normal">
			This is a set of filmstrips for you to edit and instructions for re-inserting them into
			the bathtub toy.
		</span><br>

		<a href="../tutorials/HiddenAndDifficultToysInPetz3-5andBabyz.php">Un-hiding and giving
		shelf graphics to difficult toyz</a><br>
		<span class="normal">
			This includes the petz games, but there is very important info for Babyz. It shows how
			you can use your hex editor to make "hidden" toyz show up properly on shelves in all the
			games.
		</span><br>

		<a href="dl/babyzedit_babyfilmstrip.zip">Editing Babyz Filmstrips (advanced)</a><br>
		<span class="normal">
			Toyz editing, clothes showing up separately, etc, for Babyz.
		</span><br>

		<a href="dl/babyzedit_filmstriphexpainting.zip">Simple filmstrip editing</a><br>
		<span class="normal">
			hex-painting (colouring) for toyz, clothes on shelf, etc. Applies to all the games
			including Babyz.
		</span><br>

		<a href="../tutorials/BabyzClothes.php">Hexing babyz clothes</a><br>
		<a href="../tutorials/PositionOnShelf.php">Position of clothes etc on shelves</a><br>
		<span class="normal">
			People who get puzzled as to how the game knows where to put clothing items etc, and how
			to fit their own in where they wish, this is for you.
		</span><br>

		<a href="../tutorials/ToyzInSpecialPlaces.php">Making Hidden and special-place toyz</a><br>
		<span class="normal">
			This one shows how easy it is to make your own "hidden" toyz and make them appear in
			very special places, such as the floor of any chosen scene or the fridge etc. Click
			<a href="dl/babyzedit_orangetexturedicecup.zip">here for my example Icecup</a> toy; if
			you follow the installation instructions, the toy should show up only in the freezer
			compartment.
		</span>

		<a href="../tutorials/ChangingPointersInFiles.php">Changing "Pointers" in files</a><br>
		<span class="normal">
			For people who get puzzled about why clothes or toyz don't look right on the shelves
			after filmstrips etc have been changed.
		</span>
	</p>

<!-- Editing Adopted .Baby Files ------------------------------------------------------------------>
	<p class="big">
		<span id="BAB">Various Information for Editing adopted .Baby files</span><br>
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	</p>

	<p class="big">
		<a href="../tutorials/hexerbaby.php">Here's a special hexer baby</a><br>
		for you to use with LNZPro -- thanks,
		<a href="http://rgn.riverpebble.net" class="defunct" target="_TOP">L41N</a>, for the great 
		idea and the base baby!<br>
		<span class="normal">
			If you download this baby and study how to edit it in LNZPro, once you're used to that
			you should be able to rehex any of your own babyz in the same way. This is not intended
			as a method for thieves to steal code, and you can be assured that the BC will notice if
			you do that :-)
		</span>
	</p>

	<p>
		Apart from the "basic" tutorial, the following "howto"s tend to assume that you already know
		how to edit .baby files. Some of them are also relevant to editing pet files, but don't let
		that confuse you. The methods are the same. Unless you are using LNZPro (recommended to you
		since the wonderful version 3!), you need to edit in a hex editor and compensate for the
		checksum.
	</p>

	<p class="big">
		<a href="../tutorials/BasicBabyOrPetFileEditingJul2004.php">Basic .baby and .pet file
		editing</a><br>
	</p>

	<p class="big">
		<a href="../tutorials/ThinFatBaby.php">How make your baby permanently skinny (or
		fat)</a><br>
		<a href="../tutorials/EyeshadowOnBabyz.php">Put "eyeshadow" on your already-adopted
		babyz</a><br>
		<span class="normal">
			You can now make changes to your babyz' eyelids that will actually work.
		</span><br>
		
		<a href="../tutorials/MakingBabyzWalkers.php">Turning your babyz into Walkers</a><br>
		<a href="../tutorials/CorruptedBitmap.php">A rare fixable corruption in a pet or
		babyz</a><br>
		<a href="../tutorials/PetFileEdit2.php">Eyelids -- adding or subtracting digits</a><br>
		<a href="../tutorials/PetFileEdit3.php">Editing without a Paint Ballz section</a><br>
		<a href="../tutorials/PetFileEdit4.php">Eye colour -- how?</a><br>

		<a href="dl/babyzedit_PeteyesBabyzbellybuttons.zip">More Pet and Baby file editing</a><br>
		<span class="normal">
			Putting bellybuttons on Babyz, and how to increase a pet's eye colour to a greater-digit
			number or decrease it to a lesser-digit number. Includes example babyz and petz.<br>
		</span>
		<img src="images/babyzedit_Gerri.gif" alt="bellybutton before and after">
	</p>

	<p>
		<span class="big">
			<a href="dl/babyzedit_GrowingBabyzAndHairMar2003.zip">How to make your adopted Babyz
			grow, also its hair</a><br>
		</span>
		Includes example baby.<br>
		Note that, if you want the hair etc to grow out from the head as the baby grows rather than
		appearing as spots in the air around the baby at first, read
		<a href="../tutorials/BabyNaturalHairGrow.php">this [Add Ball] snippet of info</a>.<br>
		<img src="images/babyzedit_GrowingBabyz.gif" alt="Growing Babyz">
	</p>

	<p class="big">
		<a href="dl/babyzedit_MoreAdvancedEditingPetzAndBabyzFilesJun2003.zip">More Advanced Pet And
		Baby Files Editing</a> (Updated 20 June 2003)<br>
		<span class="normal">Includes examples</span><br>
		<a href="dl/babyzedit_PetAndBabyFileEditingJan2003.zip">Advanced Pet And Baby File
		Editing</a> (Jan 2003)
	</p>

	<p class="big">
		Online Player files.<br>
		~~~~~~~~~~~~~~~~~~~~
	</p>

	<p class="big">
		<a href="dl/babyzedit_MakingBlyFiles.zip">Making babyz Player files to put up at your
		website</a>
	</p>

	<p>.</p>
</div>
</body>
</html>