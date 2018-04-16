<!DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
	<head>
		<title>Data Design Project</title>
	</head>
	<body>
	<h1>Persona		</h1>
			<ul>
				<li>Vince S. Hernandez</li>
				<li>33 years old</li>
			</ul>
	<h2>Technology Used</h2>
			<P>
				Uses a 2011 MacBook Pro (OS 10.12 Sierra).
				He also uses an LGV30 (Android 7.1.2) on T-Mobile's 4G network.
			</p>
	<h2>Attitudes</h2>
			<p>
				Vince is generally pretty comfortable with navigating commercial websites.
				He has some extra time, but dedicates most of it to his kids and wife. He'll usually spend
				4-5 minutes on a website that he's not used to, and less than that, maybe 2-3 on websites
				that he is used to.
			</p>
	<h2>Goals</h2>
		<p>
			Vince, diagosed with PTSD, enjoys products that relax and ease his mind. He is looking for top quality THC and CBD products. Specifically, he is looking for indica products
			at higher than 25 mg of THC, and CBD products at about the same ratio. He's especially happy when the two
			are combined. He wants to find something for himself within a few minutes.
		</p>
	<h2>Frustrations</h2>
		<p>Vince is looking for the best quality of medicine. He's versed in higher than intermediate topics
			in the cannabis community, knows when quality is sub par, and will let you know when something's wrong.
			He's usually pretty happy when he can access what he needs in a quick and easy method (not having to go
			through many pages to find what he wants). He wants to make sure that when he arrives at the store, that
			they carry what he wants.</p>
		<br>
	<h1>User Story</h1>
		<ul>
			<li>1: As a user Vince wants to see what ingredients go into edibles.</li>
			<li>2: As a user Vince wants to browse for indica products</li>
			<li>3: As a user Vince wants to make reservations for products to be held at the store.</li>
			<li>4: As a user Vince wants to make comments on products</li>
		</ul>
	<h1>Use Case/ Interaction Flow</h1>
	<h3>Use Case</h3>
		<ul>
			<li>User Story: As a user Vince wants to browse for indica products.</li>
			<li>Persona: Vince</li>
			<li>Scenario: Vince has tired of using other conventional methods to ingest thc; therefore he's on the hunt for something tasty.</li>
			<li>Precondition: Vince is on the edibles page. Also, Vince doesn't have a profile but that's okay.</li>
			<li>Postcondtion: Vince browses and makes a selection.</li>
		</ul>
	<h3>Interaction Flow</h3>
		<ul>
			<li>Vince scrolls through the edibles page to find something that he would like.</li>
			<li>The site loads images of products, and general information about the product.</li>
			<li>Vince selects an item to examine.</li>
			<li>The site loads information about the product.</li>
		</ul>
	<h1>Conceptual Model</h1>
		<ul>
			<li>Many users can choose one product many times (m-to-n).</li>
		</ul>
	<h2>Entities and Attributes</h2>
	<h3>Profile (strong)</h3>
		<ul>
			<li>profileId (primary key)</li>
			<li>profileLocation</li>
			<li>profileEmail</li>
			<li>profileFavorites</li>
			<li>profileUsername</li>
		</ul>
		<h3>Product (strong)</h3>
		<ul>
			<li>productId (primary key)</li>
			<li>productName</li>
			<li>productVariety</li>
			<li>productFacts</li>
			<li>productHistory</li>
			<li>productPrice</li>
			<li>productVariations</li>
		</ul>
		<h3>Pick (weak)</h3>
		<ul>
			<li>pickProfileId (foreign key)</li>
			<li>pickProductId (foreign key)</li>
		</ul>
	<h3>Relations</h3>
		<ul>
			<li>One <strong>User</strong> can select many <strong>Products</strong> (1-to-n). </li>
			<li>Many <strong>Products</strong> can be <strong>Selected</strong> many times (m-to-n). </li>
		</ul>
	</body>
</html>

