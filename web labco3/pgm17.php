<?php
    $conn=mysqli_connect("localhost","root","","mitscollege")
?>
<html>
<head>
    <title>Document</title>
</head>

<body>
    <form>
    stud_id <input type="text" name="stud_id"><br><br>
        Name <input type="text" name=" Name"><br><br>
        age <input type="text" name="age"><br><br>
        course_id <input type="text" name="course_id"><br><br>
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="update" name="update">
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="search" name="search">
    </form>
</body>

</html>
<?php
    if(isset($_REQUEST["submit"]))
    {
        $stud_id=$_REQUEST["stud_id"];
        $name=$_REQUEST[" Name"];
        $age=$_REQUEST["age"];
        $course_id=$_REQUEST["course_id"];
        $query="insert into student values( '$rollno','$name','$marks','$grade')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo"Successfully Inserted";
        }
        else{
            echo"failed";
        }
    }
?>