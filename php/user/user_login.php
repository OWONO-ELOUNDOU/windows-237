<?php
    session_start();
    include "../config.php";

    if(isset($_POST['user']) && isset($_POST['pass'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        };

        $user = validate($_POST['user']);
        $pass = validate(md5($_POST['pass']));

        //$pass1 = md5($pass);

        
        if(empty($user)){
            header("Location: ../../../login.php?error=username is required");
            exit();
        } else if(empty($pass)){
            header("Location: ../../../login.php?error=Password is required");
            exit();
        } else {
            $sql = "SELECT * FROM user WHERE name='$user' AND password = '$pass'";

            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if($row['name'] === $user && $row['password'] === $pass) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['adresse'] = $row['adresse'];
                    $_SESSION['ville'] = $row['ville'];
                    $_SESSION['pays'] = $row['pays'];
                    $_SESSION['date_inscription'] = $row['date_inscription'];

                    header("Location: ../../../document.php");
                    exit();
                } else {
                    header("Location: ../../../login.php?error=Incorrect username or password");
                    exit();
                }
            } else {
                header("Location: ../../../login.php?error=Incorrect username or password");
                exit();
            }
        }
    } else {
        header("Location: ../../../login.php?error");
        exit();
    }