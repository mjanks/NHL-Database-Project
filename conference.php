<!-- 
Created by: Group Project
COSC 471
Winter 2021 -->

<?php 
    include 'dbconfig.php';
?>

<!-- <?php 
    // Test the conncetion to the remote database
    mysqli_connect($hostname, $username, $password, $database);
    if (mysqli_connect_errno())
        print "not connected";
    else
        print "connected";
?> -->


<!DOCTYPE html>
<html lang="en">
	<head>
		<title> NHL Database Site </title>
		<meta name="keywords" content="hockey nhl">
		<meta name="author" content="Group Project">
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="stylesheet.css"> -->
	</head>

	<body> 
		<header>
			<h1> Select Conference </h1>
		</header>
		<main>

            <form method="post" action="http://localhost:8000/division.php">
                <div>
                    <table>
                        <tr>
                            <td>
                                <input name="conference" value="yes" type="radio"></input>
                            </td>
                            <td>
                                <label>Eastern</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="conference" value="yes" type="radio"></input>
                            </td>
                            <td>
                                <label>Western</label>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>

            <div>
                <table>
                <tr>
                <td>
                    <input type="submit"></input>
                </td>
                </tr>
                </table>
                <p>Select a conference and click 'Submit' to continue</p>
            </div>
            
        </main>
		<footer>
		</footer>
	</body>
</html>