<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=annkuanw_aceevents', 'annkuanw_aceuser', 'TheFirstDay!2345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myemail']))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
          $myname = $_POST['myname'];
          $myage = $_POST['myage'];
          $myrole = $_POST['myrole'];
          $myphone = $_POST['myphone'];
          $myemail = $_POST['myemail'];
          $myecontactname = $_POST['myecontactname'];
          $myecontactphone = $_POST['myecontactphone'];
          $mygender = $_POST['mygender'];
          $myshirtsize = $_POST['myshirtsize'];
          $mysatevent = $_POST['mysatevent'];
          $mysunevent = $_POST['mysunevent'];
          $mycomments = $_POST['mycomments'];
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
          name = :name,
          age = :age,
          role = :role,
          phone = :phone,
          email = :email,
          econtactname = :econtactname,
          econtactphone = :econtactphone,
          gender = :gender,
          shirtsize = :shirtsize,
          satevent = :satevent,
          sunevent = :sunevent,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myname);
        $s->bindValue(':age', $myage);
        $s->bindValue(':role', $myrole);
        $s->bindValue(':phone', $myphone);
        $s->bindValue(':email', $myemail);
        $s->bindValue(':econtactname', $myecontactname);
        $s->bindValue(':econtactphone', $myecontactphone);
        $s->bindValue(':gender', $mygender);
        $s->bindValue(':shirtsize', $myshirtsize);
        $s->bindValue(':satevent', $mysatevent);
        $s->bindValue(':sunevent', $mysunevent);
        $s->bindValue(':accommodations', $mycomments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted joke: ' . $e->getMessage();
         include '../includes/error.html.php';
      exit();
      
    }
    // load the thank you page after the INSERT runs
include 'success.html.php';
                      } else {
                          include 'register.html.php';
                      }
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  
                      
    ?>
