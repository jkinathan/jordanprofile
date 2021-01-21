<?php 
include 'server.php';

//soft delete books
 if(isset($_GET['deleteId']))
 {
    $deleteId=$_GET['deleteId'];

    $mysq = "select is_deleted from books where id = $deleteId";
    $myquery = $conn->query($mysq);
    while($row = $myquery->fetch_assoc()){
    
    if($row["is_deleted"] == 0){
        $sql = "UPDATE books SET is_deleted = 1 WHERE id=$deleteId";
        
        if($conn->query($sql)){
      
            echo "<script type='text/javascript'>alert('Book Soft deleted successfully Please check main site for changes');window. location. href='index.php'; </script>";

        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
    }
    else{
    
        $sql = "UPDATE books SET is_deleted = 0 WHERE id=$deleteId";

        if($conn->query($sql)){
            
            echo "<script type='text/javascript'>alert('Book restored back in the main site');window. location. href='index.php'; </script>";
            
        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
        
    }
}
    
} 

//soft delete projects

if(isset($_GET['deleteprojectId']))
 {
    $deleteId=$_GET['deleteprojectId'];

    $mysq = "select is_deleted from projects where id = $deleteId";
    $myquery = $conn->query($mysq);
    while($row = $myquery->fetch_assoc()){
    
    if($row["is_deleted"] == 0){
        $sql = "UPDATE projects SET is_deleted = 1 WHERE id=$deleteId";
        
        if($conn->query($sql)){
      
            echo "<script type='text/javascript'>alert('Project deleted from mainsite successfully Please check main site for changes');window. location. href='index.php'; </script>";

        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
    }
    else{
    
        $sql = "UPDATE projects SET is_deleted = 0 WHERE id=$deleteId";

        if($conn->query($sql)){
            
            echo "<script type='text/javascript'>alert('Project restored back in the main site ');window. location. href='index.php'; </script>";
            
        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
        
    }
}
    
} 

//soft delete Home details

if(isset($_GET['deletehomeId']))
 {
    $deleteId=$_GET['deletehomeId'];

    $mysq = "select is_deleted from home where id = $deleteId";
    $myquery = $conn->query($mysq);
    while($row = $myquery->fetch_assoc()){
    
    if($row["is_deleted"] == 0){
        $sql = "UPDATE home SET is_deleted = 1 WHERE id=$deleteId";
        
        if($conn->query($sql)){
      
            echo "<script type='text/javascript'>alert('Home details deleted from mainsite successfully Please check main site for changes');window. location. href='index.php'; </script>";

        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
    }
    else{
    
        $sql = "UPDATE home SET is_deleted = 0 WHERE id=$deleteId";

        if($conn->query($sql)){
            
            echo "<script type='text/javascript'>alert('Home details restored back in the main site ');window. location. href='index.php'; </script>";
            
        }
        else{
        
            echo "<script type='text/javascript'>alert('There was an error ')</script>";
        }
        
    }
}
    
}

?>