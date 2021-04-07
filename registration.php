<?php
   include 'connection.php';

   $alert = null;

    $sql = "SELECT slot, count(*) as total from students group by slot";
    $result = $conn->query($sql);

    $availableSlots = array(8, 8, 8, 8);

    if ($result->num_rows != 0) {
        while($row = $result->fetch_assoc()) {
            $availableSlots[$row['slot'] - 1] = $availableSlots[$row['slot'] - 1] - $row['total'];
        }
    }

   if(isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $nickName = $_POST['nickName'];
        $sId = $_POST['sId'];
        $email = $_POST['email'];
        $slot = $_POST['slotSelect'];

        if($slot == 0) {
            echo '<script>alert("Please select a slot")</script>';
        } else {
            if($availableSlots[$slot-1] <= 0) {
                echo '<script>alert("No seat available.\nPlease select another slot.")</script>';
            } else {
                $sql = "INSERT INTO students(id, fullname, nickname, email, slot)
                VALUES($sId, '$fullname', '$nickName', '$email', $slot)";

                if (!($conn->query($sql) === TRUE))
                    //echo '<script>alert("' . $conn->error. '")</script>';
                    $alert = $conn->error;
                else 
                    //echo '<script>alert("Registration Sucessful")</script>';
                    $alert = 'Registration Successful';
            }
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/registration.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>

    <?php 
        if($alert)
            echo '<script>alert("' . $alert. '")</script>'; 
    ?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">PHP App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php">Landing Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./registration.php">Student Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./teacher-module.php">Teacher's Module</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Main Container Start -->
    <section class="main-section container px-3 py-5">
        <h1 class="bg-dark text-light pt-2 pb-3 mb-5 text-center">Student Registration Page</h1>
        <h3>Read the instructions provided below before registering</h3>
        <ul>
            <li>Please enter all information before submitting.</li>
            <li>Check the vailable slots before registration.</li>
            <li>Register only one slot.</li>
        </ul>
        <div class="card bg-dark text-light mx-auto">
            <form method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname">
                </div>
                <div class="mb-3">
                    <label for="nickName" class="form-label">Nick name</label>
                    <input type="text" class="form-control" id="nickName" name="nickName">
                </div>
                <div class="mb-3">
                    <label for="sId" class="form-label">Student Id</label>
                    <input type="number" class="form-control" id="sId" name="sId">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <p>Select Slots</p>
                <?php
                    echo '<div class="input-group mb-3">';
                        echo '<label class="input-group-text" for="slotSelect">Slots</label>';
                        echo '<select class="form-select" id="slotSelect" name="slotSelect">';
                            echo '<option value="0" selected>Choose Slot....</option>';
                            echo '<option value="1">Slot One -            ' . $availableSlots[0] . ' seat remaining</option>';
                            echo '<option value="2">Slot Two -            ' . $availableSlots[1] . ' seat remaining</option>';
                            echo '<option value="3">Slot Three -            ' . $availableSlots[2] . ' seat remaining</option>';
                            echo '<option value="4">Slot Four -            ' . $availableSlots[3] . ' seat remaining</option>';
                        echo '</select>';
                    echo '</div>';
                ?>
                <button type="submit" name="register" class="btn btn-warning w-100 mt-4">Register</button>
            </form>
        </div>
    </section>
    <!-- Main Container End -->

    <!-- Footer Start -->
    <footer class="bg-dark">
        <p class="text-light text-center pt-4">&copy;Rezaur Rahman</p>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>