<html>
<head>
<?php
/**
 * viewRecord.php
 * 
 * Copyright © 2005-2006, FileMaker, Inc. All rights reserved.
 * NOTE: Use of this source code is subject to the terms of the FileMaker
 * Software License which accompanies the code. Your use of this source code
 * signifies your agreement to such license terms and conditions. Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by FileMaker.
 * 
 * Example PHP script to illustrate how to view a particular record in a database using PHP API.
 * 
 * Requirements:
 *   1. Working FileMaker Server installation
 *   2. 'FMPHP_Sample' database hosted in FileMaker Server
 *
 */
 
// Include FileMaker API
require_once ('FileMaker.php');

// If there was a 'recid' parameter passed in, then we're editing a particular record.
// Otherwise, we're creating a new record
 
// Set <title> accordingly
 
$record = null;
?>
<title>

</title>
<!-- declare charset as UTF-8 -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>

<p>Some basic instructions would go here.</p>
	<form action="handleForm.php" method="post">
	  <fieldset>
	    <label for="name">First Name:</label>
	    <input type="text" name="First" id="First" placeholder="Enter your first name" />
<br />
		<label for="name">Last Name:</label>
	    <input type="text" name="Last" id="Last" placeholder="Enter your last name" />
<br />
	    <label for="email">Email:</label>
	    <input type="email" id="email" placeholder="Enter your email address" />
<br />
	    <label for="message">Favorite Color:</label>
	    <input type="text" name="color" id="Favorite Color" placeholder="Favorite color?" />

	    <input type="submit" value="Submit" />

	  </fieldset>
	</form>

<button type="submit" name="action" value="edit">Create New Record</button>

<button type="submit" name="action" value="cancel">Cancel</button>
</td></tr>
</table>
</form>
</body>
</html>
