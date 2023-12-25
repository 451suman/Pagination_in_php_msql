<?php
$display_perpage=10;
$page=isset($_GET["page"]) ? $_GET["page"] :1;


$startFrom = ($page - 1) * $display_perpage;

$conn = mysqli_connect("localhost", "root", "", "page");
if (mysqli_connect_errno()) {
    echo "DB CONNECTION ERROR" . mysqli_connect_error();
    exit();
}

$sql = "SELECT * from page_data limit $startFrom,$display_perpage ";
$result=$conn->query($sql);
if($result){
    while($row=$result->fetch_assoc()){
        echo"".$row["id"]."".$row["name"]."<br>";
    }
}




$count_sql="select count(id) as total from page_data";
$count_resylt=$conn->query($count_sql);
if($count_resylt){
    $row=$count_resylt->fetch_assoc();
    $count=$row['total'];
    $pageno=ceil($row['total']/$display_perpage);

    echo" <a href='try.php?page=$i--'> previous</a>";
 for($i= 1;$i<=$pageno;$i++){

    echo" <a href='try.php?page=$i'> $i</a>";
    $a=$i;
}

echo" <a href='try.php?page=$next'> next</a>";
}
?>
