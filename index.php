<!DOCTYPE html>
<html lang="en">

	<link href="CSS/underline.css" rel="stylesheet" type="text/css"/>

	<head>
		<title>SoundCloud User Persona</title>
	</head>

	<body>

		<header>
			<strong><span>User</span></strong>
		</header>

		<ul>
			<li><strong>Name:</strong> Dylan aka "TriLLwax"</li>
			<li><strong>Age:</strong> 23</li>
			<li><strong>Occupation:</strong> Music Producer and DJ</li>
			<li><strong>Technology:</strong> MacBook Pro macOS Sierra V 10.12.2</li>
			<li><strong>Needs:</strong> Up and coming music producer using SoundCloud as a platform
				to promote and share his music. He needs tools to see who is listening
				and where they are listening from to better understand his audience.
			</li>
			<li><strong>Goals:</strong> He wants to find his niche market and make it big as a DJ.
				Once fame is achieved, SoundCloud will still be utilized to interact with fans
				and keep them up to date on his new music.
			</li>
		</ul> <!--Bio-->

		<img src="images/Trill Wax.jpg" width="350" height="350" alt="TriLLwax"><br><br>

		<header>
			<strong><span>Use Case</span></strong>
		</header>

		<p>
			Dylan has just finished up a new "fire" EP. He needs to share it with his growing fan
			base and also get his music to the ears of new possible fans. Dylan double checks that
			he is happy with the mastered tracks on Ableton, he thinks they're "lit", so he exports
			the files to his desktop as lossless .wav files. He proceeds to log into SoundCloud and
			upload his new music along with some "trippy" album artwork his "homie" made. Knowing
			his tunes are "dank" he sits back and waits for the numerous e-mails filled with "mad
			props" and booking requests to pour into his inbox. They do. And he is totally "stoked".
		</p><!--Use Case-->

		<header>
			<strong><span>Interaction Flow</span></strong>
		</header>

		<ol>
			<li class="user">Dylan logs onto SoundCloud on his MacBook</li>
			<li class="site">SoundCloud displays Dylans music stream</li>
			<li class="user">Dylan navigates to the upload tab</li>
			<li class="site">SoundCloud opens the page and gives him the option to upload his music</li>
			<li class="user">Dylan finds the files then loads them to SoundCloud</li>
			<li class="site">SoundCloud starts uploading the files and asks him to fill out the
				information about his music while he waits
			</li>
			<li class="user">Dylan then inputs the information about the track (title, artist, genre, artwork, etc.)</li>
			<li class="site">SoundCloud puts the track on his personal profile along with all of the info</li>
			<li class="user">Dylan shares his music on groups filled with people with interest in similar music to his</li>
			<li class="site">SoundCloud alerts users in the groups that new music has been posted and keeps track of who
				plays it
			</li>
			<li class="user">Dylan sees the number of plays climbing in his statistics</li>
			<li class="user">Dylan is stoked</li>
		</ol><!--Interaction Flow-->

		<header>
			<strong><span>Entities &amp; Attributes</span></strong><br><br>
		</header>

		<strong>Profile</strong><br>
		<ul>
			<li>profileId (primary key)</li>
			<li>profileUser</li>
			<li>profileLocation</li>
			<li>profileUrl</li>
			<li>profileBio</li>
		</ul>

		<strong>Upload</strong><br>
		<ul>
			<li>uploadId (primary key)</li>
			<li>uploadTrackFileName</li>
			<li>uploadTitle</li>
			<li>uploadCoverArtFileName</li>
			<li>uploadGenre</li>
			<li>uploadDescription</li>
		</ul><!--Entities &amp; Attributes-->

		<header>
			<strong><span>Relations</span></strong>
		</header>

		<ul>
			<li>One <strong>Profile</strong> can have many <strong>Uploads - (1-n)</strong></li>
		</ul><!--Relations-->

		<img src="images/soundcloudERD.svg" alt="soundcloudERD">

	</body>

</html>