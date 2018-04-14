<!DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
	<head>
		<title>Data Design Project</title>
	</head>
	<body>
	<h1>Persona		</h1>
			<ul>
				<li>Vince</li>
				<li>33 years old</li>
				<li>Male</li>
			</ul>
		<br>
	<h2>Technology Used</h2>
			<ul>
				<li>Laptop: 2011 MacBook Pro (OS 10.12 Sierra) </li>
				<li>Phone: LGV30 (Android 7.1.2)</li>
			</ul>
		<br>
	<h2>Attitudes</h2>
			<ul>
				<li>Is excited to use web applications.</li>
				<li>Feels confident about using web applications.</li>
				<li>Generally pretty content.</li>
			</ul>
		<br>
	<h2>Goals</h2>
			<ul>
				<li>Vince is looking for the better quality (highest thc/cbd content) products.</li>
				<li>He also hopes to find what he's looking for quickly.</li>
			</ul>
		<br>
	<h2>Frustrations</h2>
			<ul>
				<li>Better available products, and a wider selection at good prices.</li>
				<li>What has precluded him from reaching his goal before was not being able to see current stock in the first place.</li>
			</ul>
		<br>
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
			<li>Precondition: Vince is on the edibles page.</li>
			<li>Postcondtion: Vince browses and makes a selection.</li>
		</ul>
		<br>
	<h3>Interaction Flow</h3>
		<ul>
			<li>Vince scrolls through the edibles page to find something that he would like.</li>
			<li>The site loads images of products, and general information about the product.</li>
			<li>Vince selects an item to examine.</li>
			<li>The site loads information about the product.</li>
		</ul>
		<br>
	<h1>Conceptual Model</h1>
		<ul>
			<li>The user can choose one product many times (1-to-n).</li>
		</ul>
		<br>
	<h2>Entities and Attributes</h2>
	<h3>User (strong)</h3>
		<ul>
			<li>userId</li>
			<li>userHistory</li>
			<li>userLocation</li>
		</ul>
	<h3>Scroll (strong)</h3>
		<ul>
			<li>scrollId</li>
			<li>scrollUp</li>
			<li>scrollDown</li>
		</ul>
		<h3>Product (strong)</h3>
		<ul>
			<li>productId</li>
			<li>productGeneralInformation</li>
			<li>productDetailedInformation</li>
		</ul>
	<h3>Examine (weak)</h3>
		<ul>
			<li>examineId</li>
			<li>examineProduct</li>
		</ul>
		<br>
	<h3>Relations</h3>
		<ul>
			<li>One <strong>User</strong> can </li>
		</ul>
	</body>
</html>

