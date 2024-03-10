<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio website</title>
    <script src="https://kit.fontawesome.com/6140d5223c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!-- navbar start  -->
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="image/logo1-removebg-preview.png" alt="logo">
                </div>
                <ul class="menu">
                    <li><a href="#about_section">About</a></li>
                    <li><a href="#contact_section">Contact</a></li>
                    <li><a href="#Register_section">Register</a></li>
                    
                </ul>
                <div class="search_bar">
                    <input type="text" placeholder="Search">
                    <div class="search_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </nav>
            <!-- navbar end -->
            <!-- hero section start  -->
            <section class="hero_section">
                <div class="row" id="full_row">
                    <div class="col_hero_info">
                        <h1 style=color:black>I'M <span class="animate"></span></h1><span style="font-size: 25px;"><h2 style=color:#e49712>ASWINI M S</h2></span>
                        <span class="text" ><p style="color:black"><i>To work with a dynamic & goal-oriented team that provides a positive atmosphere to learn new technologies and implement my skills for the growth of the organization and in turn me.</i></p></span>
                        <a href="image\ASWINII UPDATED RESUME (1).pdf"download="image\ASWINII UPDATED RESUME (1).pdf" target ="blank">
                        <button style="background-color: black; color:#e49712 ; padding: 10px 20px; border: none; border-radius: 5px">Download CV</button></a>
                    </div>
                    <div class="col_hero_img">
                        <div class="social_icons">
                            <a href="https://www.instagram.com/_achu_1103_?igsh=em1mbGp5M2RidGI0" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://x.com/achu_0311?t=NaO3D26dAGdlsL-kZCd1_g&s=09" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/aswini-m-s-833a1b253?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- hero section end  -->
    </header>
    <script>
            function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    var errorMessage = document.getElementById("error-message");

    // Reset error message
    errorMessage.textContent = "";

    // Validate username
    if (username.trim() === "") {
        errorMessage.textContent = "Please enter a username.";
        return false;
    }

    // Validate email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorMessage.textContent = "Please enter a valid email address.";
        return false;
    }

    // Validate password
    if (password.trim() === "") {
        errorMessage.textContent = "Please enter a password.";
        return false;
    }

    // Validate confirm password
    if (confirmPassword.trim() === "") {
        errorMessage.textContent = "Please confirm your password.";
        return false;
    }

    if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match.";
        return false;
    }

    // If all validations pass, return true
    return true;
}

        </script>
</body>
</html>