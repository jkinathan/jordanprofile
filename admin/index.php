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
    echo "Connection successful";
}

//inserting home information into our database

if(isset($_POST['home'])){
    echo "<br>";

    #$id = $_POST['id'];
    
    $about = $_POST['about'];
    $course = $_POST['course'];
    $institute = $_POST['institute'];
    $year = $_POST['year'];
    $address = $_POST['address'];
    $photo = $_FILES['image']['name'];
    // $target = "assets/images/".basename($image);

    $filetmpname = $_FILES['image']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'assets/images/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$photo);

    $sql = "insert into home (about,course,institution,year,address,photo) values 
    ('$about','$course','$institute','$year','$address','$photo')";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Information inserted successfully
        </div>';
    }
    else{
        $conn-error;
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//displaying data code
if(isset($_POST['show'])){


    $sql = "select * from jordan";

    $myquery = $conn->query($sql);
    
    while($result = $myquery->fetch_assoc()){
        
        echo '<footer>';
        echo '<table class="table bg-warning"">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
                    echo '<th scope="row">'.$result['id'].'</th>';
                    echo '<td>'.$result['name'].'</td>';
                    echo '<td>'.$result['email'].'</td>';
                    echo '<td>'.$result['message'].'</td>
                </tr>
                </tbody>
            </table>';
                
        echo '</footer>';
        
    }

}
?>
<script src="assets/js/style.js"></script>

<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Books</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Projects</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo1')">Contact</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo2')">Users</button>
</div>

<!-- Home -->
<div id="London" class="tabcontent">
  <b><h2>Update contents on the home page<h2></b>
<form action="index.php" method="post" enctype="multipart/form-data">
        <small>About Information </small>
        <input type="text" name="about" placeholder="Enter about yourself information"/>
        <small>Course </small>
        <input type="text" name="course" placeholder="Enter your Course"/>
        <small>Institution of study </small>
        <input type="text" name="institute" placeholder="Enter your Institution"/>
        <small>Year of Study</small>
        <input type="text" name="year" placeholder="Enter your year of study"/>
        <small>Address </small>
        <input type="text" name="address" placeholder="Enter your residential address"/>
        <small>Profile Photo</small>
        <input type="file" name="image" /><br>  
    <button type="submit" name="home">insert</button>
    </div>
  </div>
</form>



</div>

<!-- Books -->
<div id="Paris" class="tabcontent">
    <b><h2>Content for books on the projects and publications page<h2></b>
        <form action="">
              <small>Book Name </small>
              <input type="text" name="about" placeholder="Enter book name"/>
              <small>Book Author </small>
              <input type="text" name="author" placeholder="Enter author of book"/>
              <small>Image</small>
              <input type="file" name="image" /><br>
              <small>Description</small>
              <input type="text" name="desc" placeholder="Enter small description"/>
              
            <button>Submit</button>
          </div>
        </div>
      </form>
</div>

<!-- Projects -->
<div id="Tokyo" class="tabcontent">
    <b><h2>Project contents<h2></b>
        <form action="">
              <small>Project Name</small>
              <input type="text" name="name" placeholder="Enter project name"/>
              <small>Project Image </small>
              <input type="file" name="image"/><br>
              <small>Project Description</small>
              <input type="text" name="pdesc" placeholder="Enter project description"/>
              <small>Project url</small>
              <input type="text" name="url" placeholder="Enter your project url"/>
              
            <button>Submit</button>
          </div>
        </div>
      </form>
</div>

<!-- Users -->
<div id="Tokyo2" class="tabcontent">
    <b><h2>User Details<h2></b>
        <form action="">
              <small>Name</small>
              <input type="text" name="name" placeholder="Enter about your name"/>
              <small>Email </small>
              <input type="text" name="email" placeholder="Enter your email"/>
              <small>Password</small>
              <input type="text" name="pass" placeholder="Enter your password"/>
              <small>Confirm password</small>
              <input type="text" name="pass2" placeholder="Enter your password again"/>
            <button>Submit</button>
          </div>
        </div>
      </form>
</div>

<!-- Contact -->
<div id="Tokyo1" class="tabcontent">
    <b><h2>Contact Information<h2></b>
        <form action="">
            <small>Contact details</small>
            
          </div>
        </div>
      </form>
</div>