<?php
    include 'connection.php';

    class Student {
        public $fullname;
        public $nickName;
        public $sId;
        public $email;
        public $slot;
    }

    $studentList = array();
    $result = 0;

    if(isset($_GET['view'])) {
        $slot = $_GET['slotSelect'];
        $sql = "SELECT * FROM students WHERE slot = ($slot)";
        $result = $conn->query($sql);

        if ($result->num_rows != 0) {
            $i = 0;

            while($row = $result->fetch_assoc()) {
                $studentList[$i] = new Student();
                $studentList[$i]->fullname = $row['fullname'];
                $studentList[$i]->nickName = $row['nickname'];
                $studentList[$i]->sId = $row['id'];
                $studentList[$i]->email = $row['email'];
                $studentList[$i]->slot = $row['slot'];
                $i++;
            }

            $result = 1;
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
    <link href="./css/teacher-module.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
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
                <a class="nav-link" href="./registration.php">Student Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./teacher-module.php">Teacher's Module</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Top Container Start -->
        <section class="top-section container px-3 py-5">
            <div class="left-div">
                <img src="./image/co_worker.svg" alt="image">
            </div>
            <div class="right-div">
                <h1>Teacher's Module</h1>
                <p>Welcome to teacher's module. Here you can view the current status of student registration
                    process. Just select a slot and press the button to view the list of enrolled students of that slot.
                </p>
                <form method="GET">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="slotSelect">Slots</label>
                        <select class="form-select" id="slotSelect" name="slotSelect">
                            <option value="1">Slot 01</option>
                            <option value="2">Slot 02</option>
                            <option value="3">Slot 03</option>
                            <option value="4">Slot 04</option>
                        </select>
                        <button type="submit" name="view" class="btn btn-dark">View Info</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Top Container End -->

        <!-- Display Container Start -->
            <?php
                if($result) {
            ?>
            <section class="display-section px-3 py-5">
                <h3 class="text-secondary mb-5 text-center">Student Info</h3>
                <table class="bg-dark text-light mx-auto">
                    <tr>
                        <th class="bg-warning text-dark">ID</th>
                        <th class="bg-warning text-dark">Fullname</th>
                        <th class="bg-warning text-dark optional">Nick Name</th>
                        <th class="bg-warning text-dark optional">Email</th>
                        <th class="bg-warning text-dark optional">Slot</th>
                    </tr>
                <?php
                    foreach($studentList as $std) {
                        echo '<tr>';
                            echo '<td>' . $std->sId . '</td>';
                            echo '<td>' . $std->fullname . '</td>';
                            echo '<td class="optional">' . $std->nickName . '</td>';
                            echo '<td class="optional">' . $std->email . '</td>';
                            echo '<td class="optional">' . $std->slot . '</td>';
                        echo '</tr>';
                    }
                ?>
                </table>
            </section>
            <?php
                }
            ?>
        <!-- Display Container End -->

    </div>
    <!-- Wrapper End -->

    <!-- Footer Start -->
    <footer class="bg-dark">
        <p class="text-light text-center pt-4">&copy;Rezaur Rahman</p>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>