
<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: login.php');
    exit;
}
?>
<?php include 'header.php';
?>
<?php 
include 'server.php';?>

<?php

//inserting home information into our database

if(isset($_POST['home'])){
    echo "<br>";

    $id = $_POST['id'];
    
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

    $sql = "insert into home (id,about,course,institution,year,address,photo) values 
    ('$id','$about','$course','$institute','$year','$address','$photo')";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Information inserted successfully
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//updating home data

if(isset($_POST['update'])){
    echo "<br>";

    // $id = $_POST['id'];
    
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

    $sql = "UPDATE home SET about= '$about',course='$course',institution='$institute',year='$year',address='$address',photo='$photo' WHERE id=1";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Home Information updated successfully please click home tab to see new changes
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}


//books inserting

if(isset($_POST['bookadd'])){
    echo "<br>";

    $bbid = $_POST['bookid'];
    $bbname = $_POST['bookname'];
    $bbphoto = $_FILES['bookimage']['name'];
    $bbauthor = $_POST['bookauthor'];
    $bbdescription = $_POST['bookdescription'];

    $bfiletmpname = $_FILES['bookimage']['tmp_name'];
    //folder where images will be uploaded
    $bfolder = 'assets/images/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($bfiletmpname, $bfolder.$bbphoto);

    $sql = "insert into books (id,name,photo,author,description) values 
    ('$bbid','$bbname','$bbphoto','$bbauthor','$bbdescription')";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Book Resource Added successfully
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}

//books updating

if(isset($_POST['bookupdate'])){
    echo "<br>";

    $bkid = $_POST['bookid'];
    $bkname = $_POST['bookname'];
    $bkauthor = $_POST['bookauthor'];
    $bkphoto = $_FILES['bookimage']['name'];
    $bkdescription = $_POST['bookdescription'];
    
    // $target = "assets/images/".basename($image);

    $bkfiletmpname = $_FILES['bookimage']['tmp_name'];
    //folder where images will be uploaded
    $bkfolder = 'assets/images/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($bkfiletmpname, $bkfolder.$bkphoto);

    $sql = "UPDATE books SET name='$bkname',author='$bkauthor',photo='$bkphoto',description='$bkdescription' WHERE id=$bkid";


    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Book Resource Updated successfully
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//project adding
if(isset($_POST['projectadd'])){
    echo "<br>";

    $pid = $_POST['pid'];
    $pphoto = $_FILES['pimage']['name'];
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $purl = $_POST['url'];

    // $target = "assets/images/".basename($image);

    $pfiletmpname = $_FILES['pimage']['tmp_name'];
    //folder where images will be uploaded
    $pfolder = 'assets/images/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($pfiletmpname, $pfolder.$pphoto);

    $sql = "insert into projects (id,image,name,description,url) values 
    ('$pid','$pphoto','$pname','$pdescription','$purl')";

    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            New Project Added successfully please refresh to view new changes on project tab
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//project updating
if(isset($_POST['projectupdate'])){
    echo "<br>";

    $pid = $_POST['pid'];
    $pphoto = $_FILES['pimage']['name'];
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $purl = $_POST['url'];

    // $target = "assets/images/".basename($image);

    $pfiletmpname = $_FILES['pimage']['tmp_name'];
    //folder where images will be uploaded
    $pfolder = 'assets/images/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($pfiletmpname, $pfolder.$pphoto);

    $sql = "UPDATE projects SET image= '$pphoto',name='$pname',description='$pdescription',url='$purl' WHERE id=$pid";


    if($conn->query($sql)){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Project Updated successfully please click on project tab to see changes
        </div>';
    }
    else{
        
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Error is here: ".$conn->error."
        </div>';
    }

}
//admin user update

if(isset($_POST['createuser'])){
    echo "<br>";

    // $pid = $_POST['pid'];
    
    $aname = $_POST['aname'];
    $aemail = $_POST['aemail'];
    $appass = $_POST['apass'];
    $appass2 = $_POST['apass2'];

    if($appass != $appass2){
        echo '
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Failed to update admin details, password mismatch
        </div>';
    }
    else{
        $appass = md5($appass);
        $sql = "UPDATE users SET name= '$aname',email='$aemail',password='$appass' WHERE id=1";


        if($conn->query($sql)){
            echo '
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
                Admin details Updated Successfully!
            </div>';
        }
        else{
            
            echo '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
                Error is here: ".$conn->error."
            </div>';
        }
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

<?php
  
    $sql = "select * from home";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1'>

    <tr>

    <th>Id</th>

    <th>About</th>

    <th>Course</th>

    <th>Institution</th>

    <th>Year of Study</th>

    <th>Address</th>

    <th>Photo</th>

    <th>Action</th>

    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['about'] . "</td>";

        echo "<td>" . $row['course'] . "</td>";

        echo "<td>" . $row['institution'] . "</td>";

        echo "<td>" . $row['year'] . "</td>";

        echo "<td>" . $row['address'] . "</td>";

        echo "<td>" . $row['photo'] . "</td>";

        if( $row['is_deleted'] == 0 ){
            echo "
            <td>
                <a name='deletehomeId' href='delete.php?deletehomeId=$row[id]' style='color: red;'>Delete</a> 
            </td>";
        }
        else{
            echo "
            <td>
                <a name='deletehomeId' href='delete.php?deletehomeId=$row[id]' style='color: orange;'>Undo Delete</a> 
            </td>
            ";
        }

        echo "</tr>";

        }

        echo "</table> </div>";

?>
<form action="index.php" method="post" enctype="multipart/form-data">
        <small>ID </small>
        <input type="text" name="id" value="1" disabled />
        
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
    <button type="submit" name="update" style="background-color: greenyellow;">Update information</button>
    <!-- <button type="submit" name="show">Display Info</button> -->
    </div>
  </div>
</form>



</div>

<!-- Books -->
<div id="Paris" class="tabcontent">
    <b><h2>Content for books on the projects and publications page<h2></b>
        
    <?php
  
    $sql = "select * from books";

    $myquery = $conn->query($sql);

    echo "
    <div style='overflow-x:auto;'>
    <table border='1'>

    <tr>

    <th>Id</th>

    <th>Name</th>

    <th>Author</th>

    <th>Image</th>

    <th>Description</th>

    <th>Action</th>

    </tr>";



    while($row = $myquery->fetch_assoc()){

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['name'] . "</td>";

        echo "<td>" . $row['author'] . "</td>";

        echo "<td>" . $row['photo'] . "</td>";

        echo "<td>" . $row['description'] . "</td>";
        
        if( $row['is_deleted'] == 0 ){
            echo "
            <td>
                <a name='deleteId' href='delete.php?deleteId=$row[id]' style='color: red;'>Delete</a> 
            </td>";
        }
        else{
            echo "
            <td>
                <a name='deleteId' href='delete.php?deleteId=$row[id]' style='color: orange;'>Undo Delete</a> 
            </td>
            ";
        }
        
        

        echo "</tr>";

        }

        echo "</table> </div>";

?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        
        <small>Book ID </small>
        <input type="text" name="bookid" placeholder="Enter unique book id"/>
        <small>Book Name </small>
            <input type="text" name="bookname" placeholder="Enter book name"/>
            <small>Book Author </small>
            <input type="text" name="bookauthor" placeholder="Enter author of book"/>
            <small>Image</small>
            <input type="file" name="bookimage" /><br>
            <small>Description</small>
            <input type="text" name="bookdescription" placeholder="Enter small description"/>
            
        <button type="submit" name="bookadd" style="background-color: rgb(240, 67, 14);">Add new Book</button>
        <button type="submit" name="bookupdate" style="background-color: greenyellow;">Update Book</button>
            
        </div>
        </div>
    </form>
</div>

<!-- Projects -->
<div id="Tokyo" class="tabcontent">
    <b><h2>Project contents<h2></b>
    <?php
    
        $sql = "select * from projects";

        $myquery = $conn->query($sql);

        echo "
        <div style='overflow-x:auto;'>
        <table border='1'>

        <tr>

        <th>Id</th>

        <th>Image</th>

        <th>Name</th>

        <th>Description</th>

        <th>Url</th>

        <th>Action</th>

        </tr>";



        while($row = $myquery->fetch_assoc()){

            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";

            echo "<td>" . $row['image'] . "</td>";

            echo "<td>" . $row['name'] . "</td>";

            echo "<td>" . $row['description'] . "</td>";

            echo "<td>" . $row['url'] . "</td>";

            if( $row['is_deleted'] == 0 ){
                echo "
                <td>
                    <a name='deleteprojectId' href='delete.php?deleteprojectId=$row[id]' style='color: red;'>Delete</a> 
                </td>";
            }
            else{
                echo "
                <td>
                    <a name='deleteprojectId' href='delete.php?deleteprojectId=$row[id]' style='color: orange;'>Undo Delete</a> 
                </td>
                ";
            }

            echo "</tr>";

            }

            echo "</table> </div>";

    ?>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <small>Project ID</small>
            <input type="text" name="pid" placeholder="Please enter unique project id"/>
            <small>Project Name</small>
            <input type="text" name="pname" placeholder="Enter project name"/>
            <small>Project Image </small>
            <input type="file" name="pimage"/><br>
            <small>Project Description</small>
            <input type="text" name="pdescription" placeholder="Enter project description"/>
            <small>Project url</small>
            <input type="text" name="url" placeholder="Enter your project url"/>
              
            <button type="submit" name="projectadd" style="background-color:rgb(240, 67, 14);">Add new Project</button>
            <button type="submit" name="projectupdate" style="background-color: greenyellow;">Update Existing Project</button>
          </div>
        </div>
      </form>
</div>

<!-- Users -->
<div id="Tokyo2" class="tabcontent">
    <b><h2>Update Admin Details<h2></b>
    <?php
  
        $sql = "select * from users";

        $myquery = $conn->query($sql);

        echo "
        <div style='overflow-x:auto;'>
        <table border='1'>

        <tr>

        <th>Id</th>

        <th>Name</th>

        <th>Email</th>

        </tr>";



        while($row = $myquery->fetch_assoc()){

            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";

            echo "<td>" . $row['name'] . "</td>";

            echo "<td>" . $row['email'] . "</td>";

            echo "</tr>";

            }

            echo "</table> </div>";

    ?>
        <form action="index.php" method="POST">
            <small>ID</small>
              <input type="text" name="aid" value="1" disabled placeholder="Enter about your name"/>
              <small>Name</small>
              <input type="text" name="aname" placeholder="Enter about your name"/>
              <small>Email </small>
              <input type="text" name="aemail" placeholder="Enter your email"/>
              <small>Password</small>
              <input type="password" name="apass" placeholder="Enter your new admin password"/><br>
              <small>Confirm password</small>
              <input type="password" name="apass2" placeholder="Enter your new admin password again"/><br>
            <button type="submit" name="createuser" style="background-color: greenyellow;">Update Admin details</button>
          </div>
        </div>
      </form>
</div>

<!-- Contact -->
<div id="Tokyo1" class="tabcontent">
    <b><h2>Contact Information<h2></b>
        <form action="">
            <small>User Contact details</small>
            <?php
  
                $sql = "select * from contact";

                $myquery = $conn->query($sql);

                echo "
                <div style='overflow-x:auto;'>
                <table border='1'>

                <tr>

                <th>Firstname</th>

                <th>Lastname</th>

                <th>Country</th>

                <th>Message</th>

                </tr>";



                while($row = $myquery->fetch_assoc()){

                    echo "<tr>";

                    echo "<td>" . $row['firstname'] . "</td>";

                    echo "<td>" . $row['lastname'] . "</td>";

                    echo "<td>" . $row['country'] . "</td>";

                    echo "<td>" . $row['message'] . "</td>";

                    echo "</tr>";

                    }

                    echo "</table> </div>";

            ?>
          </div>
        </div>
      </form>
</div>


<H1>Welcome to the Admin Dashboard</H1>
<p>Please Select any tab above to start editing</p>