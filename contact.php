<?php include 'header.php';
?>
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "profile";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    
}
?>
<?php
if(isset($_POST['contact'])){
  echo "<br>";

  // $bbid = $_POST['bookid'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $country = $_POST['country'];
  $message = $_POST['message'];

  $sql = "insert into contact (firstname,lastname,country,message) values 
  ('$firstname','$lastname','$country','$message')";

  if($conn->query($sql)){
      echo '
      <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
          Your message has been sent successfully
      </div>';
  }
  else{
      
      echo '<div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
          Error is here: ".$conn->error."
      </div>';
  }

}

?>
<link rel="stylesheet" href="assets/css/contact.css">
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Get in touch with the developer</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="assets/images/contact.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="contact.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Uganda">Uganda</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Kenya">Kenya</option>
          <option value="Tanzania">Tanzania</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="contact" value="Send Message">
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'?>