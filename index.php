<?php include 'header.php';?>
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

    <main>
        <!-- About section start  -->
        <section id="about_section" class="container">
            <div class="about_info">
                <h1>About</h1>
                <p>"To secure a challenging position in the field of computer science engineering, where I can utilize my strong analytical and problem-solving skills to contribute to the development of innovative software solutions. I aim to continuously enhance my expertise in programming languages, algorithms, and emerging technologies, while collaborating with talented teams to tackle complex technical challenges and drive impactful change in the digital landscape."
                </p>
            </div>
        </section>
        <!-- About section end  -->
        <!-- Skill section start -->
        <section id="skill_section" class="container">
            <h1>My Skills</h1>
            <div class="skill_part_one">
                <div class="skill_card">
                    <img src="image/1.png" alt="">
                    <h3>Python</h3>
                </div>
                <div class="skill_card">
                    <img src="image/4.png" alt="">
                    <h3>Git</h3>
                </div>
                <div class="skill_card">
                    <img src="image/7.png" alt="">
                    <h3>HTML & CSS</h3>
                </div>
                <div class="skill_card">
                    <img src="image/8.png" alt="">
                    <h3>Java Script</h3>
                </div>
            </div>
                
            <div class="skill_part_three">
                <div class="skill_card">
                    <img src="image/12.png" alt="">
                    <h3>DB</h3>
                </div>
                <div class="skill_card">
                    <img src="image/13.png" alt="">
                    <h3>Developer</h3>
                </div>

            </div>
        </section>
        <!-- Skill section end -->

        <!-- experience section start  -->
        <section id="experience_section">
            <div class="container">
                <h1 class="exp_title">Experience</h1>
                <!-- part one  -->
                <div class="experience">
                    <div class="experience_info">
                        <h1>2022</h1>
                        <div class="experience_contents">
                            <h2>ML-INTERN</h2>
                            <div class="experience_content">
                                <h3>RENIX INFORMATICS</h3>
                                <p>ML intern (September 2022 to November 2022)<br>
                                    • Using the datasets the analysis has been done in machine learning<br>
                                    • The goal is to automate the process using the AutoML <br>
                                    Responsibilities:
                                    Data analyst by finding future predictions using AutoML</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- part two  -->
                <div class="experience">
                    <div class="experience_info">
                        <h1>2022</h1>
                        <div class="experience_contents">
                            <h2>ML-INTERN</h2>
                            <div class="experience_content">
                                <h3>RENIX INFORMATICS</h3>
                                <p>ML intern (February 2023 to March 2023)<br>
                                    Building the Document AI tool with streamlit python. 
                                    To build the DOC-AI tool using tesseract-ocr with streamlit and fine 
                                    tuned the process</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- experience section end  -->
        <!-- contact section start  -->
        <br>
            <section class="contact" id="contact_section">
                <div class="contact_title">
                    <h1>Contact Me</h1>
                </div>
                <div class="contact_info">
                    <div class="email">
                        <i class="fa-regular fa-envelope"></i>
                        <p>ashwinims0911@gmail.com</p>
                    </div>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <p>8825776478</p>
                    </div>
                </div>
                <div class="location">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Kolathur, Chennai-600099</p>
                </div>
                <div class="footer_social_icon">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </section>
        <!-- contact section end -->



        <section class="Resgiter" id="Register_section"></section>

        <div class="container-reg">
            <section id="registration-form">
                <h1>Registration Form</h1>
                <form id="registration-form">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <button type="button" onclick="validateForm()">Register</button>
                    <span style="color:#ffc86b"><p id="error-message" class="error"></p></span>
                </form>
            </section>
        </div>
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

        
    </main>
</body>
</html>