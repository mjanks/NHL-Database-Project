<!-- 
Created by: Group Project
COSC 471
Winter 2021 -->

<?php 
    // Test the conncetion to the remote database
    mysqli_connect("michaeljanks.com", "chaeljb3_michael", "password", "chaeljb3_471db");
    if (mysqli_connect_errno())
        print "not connected";
    else
        print "connected";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> NHL Database Site Admin </title>
		<meta name="keywords" content="hockey nhl">
		<meta name="author" content="Group Project">
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="stylesheet.css"> -->
	</head>
	<body> 
		<header>
			<h1> Conference Table Data</h1>
		</header>
		<main>
            <?php
                // display Conference table data
                $db = mysqli_connect("michaeljanks.com", "chaeljb3_michael", "password", "chaeljb3_471db");
                $query = "SELECT * FROM Conference";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);

                // iterate through the data
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    // get all of the variables
                    $conferenceId = $row["ConferenceId"];
                    $name = $row["Name"];
                    ?>
                    <div>
                        <table>
                        <tr><td>
                            <?php echo "Conference Id: " . $conferenceId; ?>
                        </td></tr>
                        <tr><td>
                            <?php echo "Name: " . $name; ?>
                        </td></tr>
                        </table>
                    </div>
                    <div>
                        <p>##############################</p>
                    </div>
                    <?php
                }
            ?>
            <div>
                <p>Add new data to the table:</p>
                <p>!! TO-DO !!</p>
            </div>
        </main>
		<footer>
		</footer>
	</body>
</html>