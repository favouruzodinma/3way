<?php
// print_r($_POST)
if (isset($_POST['create_state'])) {
    $country = $_POST["country"];
    $state_name = $_POST["state_name"];

        require_once('../_db.php');
        $sql = "INSERT INTO state (state_name, country) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ss", $state_name, $country);
            mysqli_stmt_execute($stmt);
            $_SESSION['success']='
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>State Created Succesfully !!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            header("location:manage-state");
            exit();
        } else {
            die("Something went wrong");
        }
    
}
