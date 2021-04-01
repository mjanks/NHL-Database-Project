<!-- 
Created by: Group Project
COSC 471
Winter 2021 -->

<!-- <?php 
    // Test the conncetion to the remote database
    mysqli_connect("michaeljanks.com", "chaeljb3_michael", "password", "chaeljb3_471db");
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
			<h1> Coach Table Data</h1>
            <p> Form to add and delete data at the bottom of the page. </p>
		</header>
		<main>
            <?php
                $db = mysqli_connect("michaeljanks.com", "chaeljb3_michael", "password", "chaeljb3_471db");

                // set all the variables from the POST array after checking that they are set and not null
                if(isset($_POST["Name"]) && isset($_POST["StartDate"])) {
                    if($_POST["Name"] != '' && $_POST["StartDate"] != '') {
                        $name = $_POST["Name"];
                        $startDate = $_POST["StartDate"];
                        $query = "INSERT INTO Coach(Name, StartDate)
                         VALUES('$name', '$startDate')";
                        mysqli_query($db, $query);
                    }
                }

                // code to handle the delete function
                if(isset($_POST["CoachId"]) && $_POST["CoachId"] != '') {
                    $query = "SELECT * FROM Coach";
                    $result = mysqli_query($db, $query);
                    $num_rows = mysqli_num_rows($result);

                    for ($i = 0; $i < $num_rows; $i++) { 
                        $row = mysqli_fetch_assoc($result);
                        $id = $row["CoachId"];

                        if($_POST["CoachId"] == $id) {
                            $query = "DELETE FROM Coach WHERE CoachId = $id";
                            mysqli_query($db, $query);
                        }
                    }
                }

                // display Coach table data
                $query = "SELECT * FROM Coach";
                $result = mysqli_query($db, $query);
                $num_rows = mysqli_num_rows($result);

                // iterate through the data
                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    // get all of the variables
                    $coachId = $row["CoachId"];
                    $name = $row["Name"];
                    $startDate = $row["StartDate"];
                    ?>
                    <div>
                        <table>
                        <tr><td>
                            <?php echo "Coach Id: " . $coachId; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Name: " . $name; ?>
                        </tr></td>
                        <tr><td>
                            <?php echo "Start Date: " . $startDate; ?>
                        </tr></td>
                        </table>
                    </div>
                    <div>
                        <p>##############################</p>
                    </div>
                    <?php
                }
            ?>
            <div>
                <p>Fill out the form to add a coach to the database.</p>
            </div>
            <div>
                <form method="post" action="/adminCoach.php"> 
                    <table>
                    <tr><td>
                        <input name="Name" size="25" maxlength="200"> Coach Name </input>
                    </tr></td>
                    <tr><td>
                        <input name="StartDate" size="25" maxlength="200"> Start Date </input>
                    </tr></td>
                    <tr><td>
                        <input type="submit"></input>
                    </tr></td>
                    </table>
                </form>
            </div>
            <div>
                <p>##############################</p>
            </div>
            <div>
                <p> Enter an Coach Id to remove it from the database. </p>
            </div>
            <div>
                <form method="post" action="/adminCoach.php"> 
                    <table>
                    <tr><td>
                        <input name="CoachId" size="10" maxlength="7"> Coach Id </input>
                    </tr></td>
                    <tr><td>
                        <input type="submit"></input>
                    </td></tr>
                    </table>
                </form>
            </div>
            


        </main>
		<footer>
		</footer>
	</body>
</html>