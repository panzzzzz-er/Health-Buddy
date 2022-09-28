<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/homestyle.php" media="screen">
    <title>Welcome to HealthBuddy.</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <table cellpadding="50px">
      <tr>
        <td >
          <h3 class="intro">What is HealthBuddy?</h3>
          <p>
            HealthBuddy is a medical assistant system that helps the user to <br>
            with their health care related tasks like maintaining old medical records,
            setting reminders for medicines, doctors visits, etc.<br>
            We also have an integrated chatbot that talks to the users and <br>
            guides them with their basic health issues and other doubts.
         </p>
       </td>
       <td >
          <img width="300px" src="./images/logo1.jpeg" alt="">
      </td>
      </tr>

      <tr>
        <td>
          <h3>What do we offer?</h3>
          <ul>
            <li>Maintaining of medical records...</li>
            <li>Reminders for medicines and doc appointments...</li>
            <li>Much more stuff coming soon ;)</li>
          </ul>
        </td>
        <td>
          <h3>Why have we made this?</h3>
          <p>
            To create a healthcare assistant that will help the user maintain medical records, <br>
             book appointments, set medicine related reminders, <br>
              all at one place using his/her phone or website
          </p>
        </td>
      </tr>

      <tr>
        <td colspan="2" align="center">
          <h3>Who are we?</h3>
          <p>
            We, <b>Team Techno 404</b>, are a group of Second Year students <br>
            from the <b>Fr. Conceicao Rodrigues College of Engineering</b>, <br>
            situaed in Bandra. This website was created as a host for our <br>
            healthcare assistant, <b>HealthBuddy</b> which is our SE Mini Project.
          </p>
        </td>
      </tr>
    </table>
    <?php require 'partials/_chatbot.php' ?>
  </body>
  <footer>
    <table cellpadding="100px">
      <tr>
        <td>
          <p> <h4>Reach out to us at: </h4> </p>
          <address class="">
            <b>Team Techno 404</b>,<br>
            Room 1001, 10th floor, <br>
            Fr. Conceicao Rodrigues College of Engineering, <br>
            Bandra West, Mumbai, Maharashtra. <br>
            Email: <a href="mailto:healthbuddy@gmail.com">healthbuddy@gmail.com</a>
          </address>
        </td>
        <td>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4411288196648!2d72.81818181422967!3d19.044332987106046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9410830616d%3A0x111b63353dbbce01!2sFr.%20Conceicao%20Rodrigues%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1637082901078!5m2!1sen!2sin"
          width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </td>
      </tr>
    </table>
  </footer>
</html>
