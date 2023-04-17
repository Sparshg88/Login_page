<?php
session_start();
    if (!isset($_SESSION['isloggedin']))  {

   
        header("location:project.php");
      
    }
?>

<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="./index.css" />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div>
      <div class="navbar">
        <div><h1>sparsh</h1></div>
        <div class="navleft">
          <ul>
            <li>HOME</li>
            <li>SKILLS</li>
            <li>CONTACT</li>
          </ul>
        </div>
      </div>

      <section class="top">
        <h1>Profile</h1>
        <p>i'am student of mits gwalior</p>
        <br />
        <img
          src="https://i.pinimg.com/originals/97/c2/43/97c243ce1cc865b438dc9e3c54ef6756.jpg"
          alt="xd"
        />
      </section>

      <section class="middle">
        <h1>skills</h1>
        <div class="skills">
          <div class="skill_icon">
            <div>
              <img
                src="http://chouprojects.com/wp-content/uploads/2014/12/html.png"
                alt="/"
              />
            </div>
            <h2>html</h2>
          </div>
          <div class="skill_icon">
            <div>
              <img
                src="https://www.logolynx.com/images/logolynx/8c/8cdf4c047e99f7389e76aa4e2e7e2803.png"
                alt="/"
              />
            </div>
            <h2>html</h2>
          </div>
        </div>
      </section>
      <div style="padding: 20px">
        <div class="detail"> 
          <h2>Details</h2>
          <div>
            <h4>Name</h4>
            <p>Sparsh gupta</p>
            <h4>Enrollment no</h4>
            <p>0901IT211057</p>
            <h4>Branch</h4>
            <p>Information Technology</p>
          </div>
        </div>
      </div>
      <section class="bottom">
        <div>
          <a href="/"><img src="./facebook-app-symbol.png" alt="" /></a>
          <a href="/"><img src="./instagram.png" alt="" /></a>
          <a href="/"><img src="./twitter.png" alt="" /></a>
        </div>
      </section>
    </div>
  </body>
</html>

