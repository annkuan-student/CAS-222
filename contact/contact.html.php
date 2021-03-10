<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
      <title>Ace Events Template</title>
      <meta charset="utf-8">
      <link href="../style/stylereset.css" rel="stylesheet">
      <link href="../style/style.less" rel="stylesheet/less" type="text/css"> 
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script> 
    </head>
   <body>
      <header>
          <a href="../index.php"><img src="../images/logo_white.png" alt="AceLogo"></a>
        <?php include '../includes/nav.inc.html.php'; ?>
          <button class="hamburger">&#9776;</button>
         <button class="cross">&#735;</button> 
      </header>
      <main>
          <div id="contactform">
          <h1>Contact Us</h1>
         <div>Required fields are marked with an asterisk (*). 
             <form method="post" action=" " id="inquiryForm">
            <label for="myName">*Name:</label>
                 <input type="text" name="myName" id="myName" required><br>
        
            <label for="myEmail">*Email:</label>
                  <input type="email" name="myEmail" id="myEmail" required><br>
                 <label for="myRole">*You are:</label>
        <select size="1" name="myRole" id="myRole">
          <option>Choose Your Role</option>
          <option value="Athlete">Athlete</option>
          <option value="Volunteer">Volunteer</option>
          <option value="Interested Party">Interested Party</option>
           </select><br>
        <label for="myComment">*Question or Comment:</label><br>
          <textarea form="inquiryForm" name="myComment" id="myComment" rows="4" cols="20" required></textarea><br>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
             
         </div>
          </div>
      </main>
      <?php include '../includes/footer.inc.html.php'; ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="../style/style.js"></script>
   </body>
</html>