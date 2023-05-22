<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/styles.css">
    <link rel="stylesheet" href="../login/styles1.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../login/logo_ammar5.png" alt="logo">
        </div>
        <div class="header_right">
            <a href="#">contact us</a>
            <!-- <div class="dropdown">
                <div class="loginas">
                    <button class="dropbtn">Login as</button>
                    <i class="material-icons">arrow_drop_down</i>
                </div>
                <div class="login-content">
                    <a href="#">Student</a>
                    <a href="#">Teacher</a>
                    <a href="#">Instructor</a>
                    <a href="#">Admin</a>
                    <a href="#">Reciptionist</a>
                    <a href="#">Accountant</a>
                </div>
            </div> -->
        </div>
    </header>

    <div class="middle">
        <div class="middle-left">
            <div>

                <div class="imoji">
                    <a href="#">
                    <img src="../icons/profile.png" alt="profile"></br>
                    <span>Edit Profile</span>
                    </a>
                </div>
            
            
                <div class="imoji">
                    <a href="../owner/add_house.php">
                    <img src="../icons/home.png" alt="Dashboard"></br>
                    <span>Add House</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="middle-right">
            <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><u>Here.. You can Add New Houses</u></h1>

            <div class="container1">
                <?php 
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $db = "ammar";
                
                    $conn = mysqli_connect($host, $user, $password, $db);
                
                    // if($conn) {
                    //     echo "Connection established";
                    // }
                    // else {
                    //     echo "Connection failed";die();
                    // }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        // $fileaccess = $_FILES['image'];
                        $price = $_POST['price'];
                        $location = $_POST['location'];
                        // $image = $_POST['image'];
                        $file = $_FILES['image'];
                        $fileName = $file['name'];

                        // echo "Name: " . $name . " location: " . $email. "Image: ".$fileName;die();
                        
                        $sql = "INSERT INTO house (price, image, location) VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss", $price , $fileName, $location);
                        $stmt->execute();

                        if($stmt->affected_rows > 0) {
                            echo "sucecess";
                        }
                        else {
                            echo "failed";die();
                        }
                    }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="price">Price</label>
                    <input type="number" name="price">

                    <label for="image">Image</label>
                    <input type="file" name="image">

                    <label for="Location">Location</label>
                    <input type="text" name="location">

                    <label for="price">Number of rooms</label>
                    <input type="number" name="price">

                    <label for="image">Number of the kichens</label>
                    <input type="file" name="image">

                    <label for="Location">Number of Bathrooms</label>
                    <input type="text" name="location">

                    <label for="price">Square Feet</label>
                    <input type="number" name="price">

                    <label for="image">Mobile Number</label>
                    <input type="file" name="image">

                    <label for="Location">More_details</label>
                    <input type="text" name="location">

                    <input type="submit" value="Add">
                </form>
            </div>
        </div>
    </div>
    
    <!-- <div class="bg_modal" id="modal">
            <div class="box_modal">
                    <h1>hello srilanka</h1>
            </div>
    </div> -->
</body>
</html>