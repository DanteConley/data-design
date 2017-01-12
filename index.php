<!DOCTYPE html>
<html lang="en">

	<head>
		<title>SoundCloud User Persona</title>
	</head>

	<body>

		<header>
			<b><u>User</u></b>
		</header>

		<ul>
			<li><b>Name:</b> Dylan aka "TriLLwax"</li>
			<li><b>Age:</b> 23</li>
			<li><b>Occupation:</b> Music Producer and DJ</li>
			<li><b>Technology:</b> MacBook Pro macOS Sierra V 10.12.2</li>
			<li><b>Needs:</b> Up and coming music producer using SoundCloud as a platform
				to promote and share his music. He needs tools to see who is listening
				and where they are listening from to better understand his audience.</li>
			<li><b>Goals:</b> He wants to find his niche market and make it big as a DJ.
				Once fame is achieved SoundCloud will still be utilized to interact with fans
				and keep them up to date on his new music.</li>
		</ul> <!--Bio-->

		<img src="images/Trill Wax.jpg" width="350" height="350"  alt="TriLLwax"><br><br>

		<header>
			<b><u>Use Case</u></b>
		</header>

		<p>
			Dylan has just finished up a new "fire" EP. He needs to share it with his growing fan
			base and also get his music to the ears of new possible fans. Dylan double checks that
			he is happy with the mastered tracks on Ableton, he thinks they're "lit", so he exports
			the files to his desktop as lossless .wav files. He proceeds to log into SoundCloud and
			upload his new music along with some "trippy" album artwork his "homie" made. Knowing
			his tunes are "Dank" he sits back and waits for the numerous e-mails filled with "mad
			props" and booking requests to pour into his inbox. They do. And he is totally "stoked".
		</p><!--Use Case-->

		<header>
			<b><u>Interaction Flow</u></b>
		</header>

		<ol>
			<li class="user">Dylan logs onto SoundCloud on his MacBook</li>
			<li class="site">SoundCloud displays Dylans music stream</li>
			<li class="user">Dylan navigates to the "Upload" tab</li>
			<li class="site">SoundCloud opens the page and gives him the option to upload his music</li>
			<li class="user">Dylan finds the files then loads them to SoundCloud</li>
			<li class="site">SoundCloud starts uploading the files and asks him to fill out the
				information about his music while he waits</li>
			<li class="user">Dylan then inputs the information about the track (title, artist, genre, artwork, etc.)</li>
			<li class="site">SoundCloud puts the track on his personal profile along with all of the info</li>
			<li class="user">Dylan shares his music on groups filled with people with interest in similar music to his</li>
			<li class="site">SoundCloud alerts users in the groups that new music has been posted and keeps track of who plays it</li>
			<li class="user">Dylan sees the number of plays climbing in his statistics</li>
			<li class="user">Dylan is stoked</li>
		</ol><!--Interaction Flow-->

		<header>
			<b><u>Entities & Attributes</u></b><br><br>
		</header>

		<b>Profile</b><br>
		<ul>
			<li>Profile (artist) Name</li>
			<li>Profile Location</li>
			<li>Profile Contact Information</li>
			<li>Profile Bio</li>
		</ul>

		<b>Upload Track</b><br>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>

		<header>
			<b><u>Relations</u></b>
		</header>

		<ul>
			<li>One <b>Profile</b> can upload many <b>Songs - (1-n)</b></li>
			<li>Many <b>Songs</b> can have many <b>Likes - (m-n)</b></li>
			<li></li>
		</ul>

	</body>

</html>