<?php
    require ('../config.php');
    require ('user.class.php');

    $user = new User;

    if(isset($_POST['submit'])){
        $user->setName($_POST['fname']);
        $user->setSurname($_POST['lname']);
        $user->setEmail($_POST['email']);
        $user->setPassword(md5($_POST['password']));
        $user->setPhone($_POST['phone']);
        $user->setStreet($_POST['street']);
        $user->setTwon($_POST['twon']);
        $user->setCountry($_POST['country']);

        $nom = $user->getName();
        $prenom = $user->getSurname();
        $mail = $user->getEmail();
        $mdp = $user->getPassword();
        $numero = $user->getPhone();
        $rue = $user->getStreet();
        $ville = $user->getTwon();
        $pays = $user->getCountry();

        $sql = "SELECT * FROM user WHERE email='$mail'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            echo "<script>alert('Cette adresse mail existe déja!')</script>";
        } else {
            $sql = "INSERT INTO user(name, surname, email, password, phone, rue, ville, pays)
                VALUES('$nom', '$prenom', '$mail', '$mdp', '$numero', '$rue', '$ville', '$pays')";

            $request = mysqli_query($conn, $sql);

            if($request){
                echo "<script>alert('Enregistrement effectué!')</script>";
            } else {
                echo "<script>alert('une erreur est survenue!')</script>";
            }
        }
    } else {
        echo "Une erreur est survenue!";
    }
?>