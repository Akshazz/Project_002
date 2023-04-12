<?php 
session_start();
include ("process.php");
 ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
 

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <title>STUD-INFO</title>
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <div class="loginContainer" >
      <div class="d-lg-flex position-relative">
      <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
          </div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5" style="height:100vh;"
        >
          <div class="m-auto" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin: auto; width: 30%; padding: 13px;">
            <div class="form-header1 ps-2 mb-4">
              <h2 style="text-align: center;"> LOGIN FORM </h2>
            </div>

        
            <form method="POST" action="login.php">
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">
                <label
                  htmlFor="exampleInputEmail1"
                  class="form-label fw-semibold fs-6"
                >
                  Email
                </label>
                <input
                  type="email"
                  name="email"
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3">
                <label
                  htmlFor="inputPassword"
                  class="form-label fw-semibold fs-6"
                >
                  Password
                </label>
                <div id="login">  
                  <div class="passwordContainer">
                    <input
                      type="password"
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="password" name="password"
                      required/>
                    <!-- <i class="fa-solid fa-eye-slash" id="passwordIconId" style="font-size: 13px; margin-left: 90%;"></i> -->

                  </div>
                </div>
              </div>

              <!-- ETO YUNG MODAL PAR -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" required>&nbsp;&nbsp;
              <label>I agree to this <a href="" style="text-decoration: none;">Terms and Conditions</a></label>
         
              <button
                type="submit" name="LOGIN" id="LOGIN"
                class="btn btn-success btn-sm" style="margin: 10px; width: 95%;"
              >
                Log in
              <i class="bx bx-log-in"></i>
              </button>
            
              <div class="text-center">
              <br>         
              <a href="" style="text-decoration: none;">
                Forgot Password?
              </a>
<hr>
              <a href="./reg/registration.php" style="text-decoration: none;">
                Register Now!
              </a>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
                
            <script
              src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"
            ></script>
            <script>
              let showPassword = document.querySelector("#passwordIconId");
              const passwordField = document.querySelector("#password");

              showPassword.addEventListener("click", function () {
                this.classList.toggle("fa-eye");

                const type =
                  passwordField.getAttribute("type") === "password"
                    ? "text"
                    : "password";
                passwordField.setAttribute("type", type);
              });
            </script>

