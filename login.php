<?php
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "register");
        $stmt = $conn->prepare("select * from register where userid = ?");
        $stmt->bind_param("s", $userid);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                header('Location: newdash.html');
                exit;
            }
        }
        else {
            echo "Invalid Email or Password";
        }
?>