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
		<title> NHL Database Site Admin </title>
		<meta name="keywords" content="hockey nhl">
		<meta name="author" content="Group Project">
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="stylesheet.css"> -->
	</head>
	<body> 
		<header>
			<h1> Team Table Data</h1>
		</header>
		<main>
            <?php
                $db =mysqli_connect($hostname, $username, $password, $database);

                echo "$$$$$$$$$$$$$$$$$$$$$ Division Info $$$$$$$$$$$$$$$$$$$$$$$$$$$$";
                ?><br><?php
                $query = "SELECT DivisionId, Name FROM Division";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row["Name"];
                    $divisionId = $row["DivisionId"];
                    ?>

                    <div>
                    <table>
                    <tr><td>
                        <?php echo "Division Name: " . $name; ?>
                    </td>
                    <td>
                        <?php echo "###" ?>
                    </td>
                    <td>
                        <?php echo "Division Id: " . $divisionId; ?>
                    </td></tr>
                    </table>
                    </div>
                    <div>
                    <tr><td>
                        <?php echo "---------------------------------------------------" ?>
                    </td></tr>
                    </div>
                    
                    <?php
                }
                ?><br><?php
                echo "$$$$$$$$$$$$$$$$$$$$$ Arena Info $$$$$$$$$$$$$$$$$$$$$$$$$$$$";
                ?><br><?php
                $query = "SELECT ArenaId, Name FROM Arena";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row["Name"];
                    $arenaId = $row["ArenaId"];
                    ?>

                    <div>
                    <table>
                    <tr><td>
                        <?php echo "Arena Name: " . $name; ?>
                    </td>
                    <td>
                        <?php echo "###" ?>
                    </td>
                    <td>
                        <?php echo "Arena Id: " . $arenaId; ?>
                    </td></tr>
                    </table>
                    </div>
                    <div>
                        <?php echo "---------------------------------------------------" ?>
                    </div>
                    <?php
                }
                ?><br><?php
                echo "$$$$$$$$$$$$$$$$$$$$$ Coach Info $$$$$$$$$$$$$$$$$$$$$$$$$$$$";
                ?><br><?php
                $query = "SELECT CoachId, Name FROM Coach";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row["Name"];
                    $coachId = $row["CoachId"];
                    ?>

                    <div>
                    <table>
                    <tr><td>
                        <?php echo "Coach Name: " . $name; ?>
                    </td>
                    <td>
                    <?php echo "###" ?>
                    </td>
                    <td>
                        <?php echo "Coach Id: " . $coachId; ?>
                    </td>
                    <tr><td>
                    </table>
                    </div>
                    <div>
                        <?php echo "---------------------------------------------------" ?>
                    </div>
                    <?php
                }




                // display Team table data
                $query = "SELECT * FROM Team";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);

                // iterate through the data
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    // get all of the variables
                    $teamId = $row["TeamId"];
                    $name = $row["Name"];
                    $mascot = $row["Mascot"];
                    $divisionId = $row["DivisionId"];
                    $arenaId = $row["ArenaId"];
                    $coachId = $row["CoachId"];
                    ?>
                    <div>
                        <table>
                        <tr><td>
                            <?php echo "Team Id: " . $teamId; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Name: " . $name; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Mascot: " . $mascot; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Division Id: " . $divisionId; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Arena Id: " . $arenaId; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Coach Id: " . $coachId; ?>
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