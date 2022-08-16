<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windows 237</title>
    <link rel="stylesheet" href="assets/CSS/register.css">
    <script src="https://kit.fontawesome.com/b63f40c510.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="title">User Registration</div>
        <div class="form">
            <form action="assets/php/user/user_registration.php" method="POST" id="regform">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" placeholder="Enter your first name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Enter your last name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email Address</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" name="phone" placeholder="Enter your phone (whatsapp)" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <div class="location-details">
                    <div class="input-box">
                        <span class="details">Street</span>
                        <input type="text" name="street" placeholder="Enter your street info">
                    </div>
                    <div class="input-box">
                        <span class="details">Town</span>
                        <input type="text" name="twon" placeholder="Enter your twon">
                    </div>
                    <div class="input-box">
                        <span class="details">Country</span>
                        <input type="text" name="country" placeholder="Enter your country">
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="submit" value="Register">
                </div>
                <p>Already have an account ? <a href="login.html">Log In</a></p>
            </form>
        </div>
            
        </div>
    </div>

</body>
</html>