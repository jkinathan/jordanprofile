<?php include 'header.php';
include 'admin/server.php'
?>

<?php
  
  $sql = "select * from home";
  
  $myquery = $conn->query($sql);
  while($row = $myquery->fetch_assoc()){
  ?>
<div style="padding-left:16px">
  <h2>WELCOME TO MY PROFILE PAGE</h2>
</div>

<div class="row" style="background-color: lightyellow;">
  

  <div class="column">

  <div class="card">
      <img src="admin/assets/images/<?php echo $row["photo"]; ?>" alt="Jordan" style="border-radius: 10px; max-height: 380px;width:100%;">
      <p>
      <button style="font-family: monospace;">
      <?php echo $row["about"]; ?>
          <!-- Experienced Junior Developer with a demonstrated history of working in the computer software industry.  -->
        </button>
      </p>
    </div>
  </div>
  <div class="column card">
    <h1 class="toolheaders">KINOBE JORDAN ATHANASIUS</h1>
        <p class="title">Student Developer</p>
        <p><?php echo $row["institution"]; ?></p>
        <a href="https://github.com/jkinathan"><i class="fa fa-github"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
    <div id="London" class="tabcontent" style="border-radius: 8px;">
      <h1>Course</h1>
      <p><?php echo $row["course"]; ?></p>
    </div>

    <div id="Paris" class="tabcontent" style="border-radius: 8px;">
      <h1>Institution</h1>
      <p><?php echo $row["institution"]; ?></p>
    </div>

    <div id="Tokyo" class="tabcontent" style="border-radius: 8px;">
      <h1>Year of Study</h1>
      <p><?php echo $row["year"]; ?></p>
    </div>

    <div id="Oslo" class="tabcontent" style="border-radius: 8px;">
      <h1>Address</h1>
      <p><?php echo $row["address"]; }?> Uganda</p>
    </div>

    <button class="tablink" onclick="openCity('London', this, 'cornflowerblue')" id="defaultOpen">Course</button>
    <button class="tablink" onclick="openCity('Paris', this, 'mediumturquoise')">Institution</button>
    <button class="tablink" onclick="openCity('Tokyo', this, 'purple')">Year</button>
    <button class="tablink" onclick="openCity('Oslo', this, 'orange')" style="border-radius: 0px; 0px; 0px; 8px;">Address</button>
  </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function openCity(cityName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(cityName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
<?php include 'footer.php'?>

</body>
</html>