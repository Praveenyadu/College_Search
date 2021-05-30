<?php
        include('database.php');
        $searchTerm = $_GET['search_txt'];
        $sql = "SELECT P.id, P.name,P.city,Q.name as state,P.address FROM (SELECT A.id, A.name,B.city,A.state,A.address FROM (SELECT `id`, `name`, `city`, `state`, `address` FROM `table_college` WHERE name='$searchTerm') as A INNER JOIN cities as B on A.city=B.id) as P INNER JOIN states as Q on P.state=Q.id";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $collegeId = $row['id']; 
        $collegeName= $row['name'];
        $collegeCity=$row['city'];
        $collegeState=$row['state'];
        $collegeAddress=$row['address'];
       
    
    }
?>
<body>
    <center>
    <h1><?php echo $collegeName; ?></h1>
    <p><?php echo $collegeAddress; ?></p>
    <?php echo $collegeCity; ?></p>
    <?php echo $collegeState; ?></p>
    </center>
</body>