<?php
session_start();
include 'db_connect.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $conn = mysqli_connect("localhost", "root", "", "edusoft");
//     if (!$conn) {
//         die("Error: " . mysqli_connect_error());
//     }


//     if (isset($_SESSION['loggedin'])) {
//         $user_id = $_SESSION['user_id'];
//         echo $user_id;
//     }

//     $obj1 = mysqli_real_escape_string($conn, $_POST['o1']);
//     $obj2 = mysqli_real_escape_string($conn, $_POST['o2']);
//     $obj3 = mysqli_real_escape_string($conn, $_POST['o3']);
//     $obj4 = mysqli_real_escape_string($conn, $_POST['o4']);
//     $obj5 = mysqli_real_escape_string($conn, $_POST['o5']);

//     $req1 = mysqli_real_escape_string($conn, $_POST['r1']);
//     $req2 = mysqli_real_escape_string($conn, $_POST['r2']);

//     $intd1 = mysqli_real_escape_string($conn, $_POST['i1']);
//     $intd2 = mysqli_real_escape_string($conn, $_POST['i2']);
//     // $user_id = $_SESSION['user_id'];


//     $sql = "INSERT INTO `intended_learners` (`user_id`, `course_objective1`, `course_objective2`, `course_objective3`, `course_objective4`, `course_objective5`, `course_req1`, `course_req2`, `course_intended1`, `course_intended2`) VALUES ('$user_id' , '$obj1', '$obj2', '$obj3', '$obj4', '$obj5', '$req1', '$req2', '$intd1', '$intd2')";

//     if ($result = mysqli_query($conn, $sql)) {
//         $last_id = $conn->insert_id;
//         echo "<script> var course_id = " . $last_id . "
//                 localStorage.setItem('c_id', course_id)
//                   </script>
//             ";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive side</title>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css" />
</head>

<body>
    <div class="goals_navbar">
        <a href="home.html">Dvillage</a>
        <div>
            <button class="save"><a href="logout.php" style="color:black; padding: 0px;">Logout</a></button>
        </div>
    </div>

    <div id="alert1">

    </div>

    <div id="container">
        <div id="sidecontentbar">
            <div class="course_items">
                <ul>
                    <li> <a href="familymember.html"> Family Members</a></li>
                    <li> <a href="/project/instructor/create/curriculum.php"> Generate Document</a></li>
                    <li> <a href="/project/instructor/create/landingpage.php"> Generated Documents</a></li>
                    <li> <a href="/project/instructor/create/notes.php"> Tax Wage</a></li>
                    <li> <a href="/project/instructor/create/pricing.php"> Tax History</a></li>
                </ul>
            </div>
        </div>
        <div id="content_page">
            <div class="main_page">
                <div id="box">
                    <div class="familymem">
                        Family Member

                        <?php
                            $id = $_SESSION['client_id'];
                            $sql = "SELECT family_member FROM `client` WHERE `client_id` = '$id'";
                            $result = mysqli_query($conn, $sql);
                            $rows = mysqli_fetch_assoc($result);
                        ?>

                        <div id="count">
                            <?php echo $rows['family_member']; ?>
                        </div>
                    </div>
                    <div class="tax">
                        Taxes Due
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/project/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>