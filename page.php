<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .pagination {
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 2px;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #2980b9;
        }

        .pagination .current {
            background-color: #555;
        }
    </style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "page");
if (mysqli_connect_errno()) {
    echo "DB CONNECTION ERROR" . mysqli_connect_error();
    exit();
}

// Determine the current page number
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Specify the number of records per page
$recordsPerPage = 4;

// Initialize $totalPages
$totalPages = 0;

// Fetch total number of records for pagination
$count_sql = "SELECT COUNT(id) as total FROM page_data";
$result = $conn->query($count_sql);

if ($result) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();

    // Access the count value using the alias 'total'
    $totalRecords = $row['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRecords / $recordsPerPage);
}

// Calculate the starting point for the results to fetch
$startFrom = ($page - 1) * $recordsPerPage;

// Fetch data for the current page
$sql = "SELECT * FROM page_data LIMIT $startFrom, $recordsPerPage";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "" . $row["id"] . " " . $row["name"];
        echo "<br>";
    }

    // Display current page and total pages outside the loop
    echo "<div class='pagination'>";
    echo "Page no= $page of $totalPages <br>";
    
    // Method 1-----------------------------------------------------------------------------------------------------------------------------
    echo "Method 1 <br>";
    // Display first page link
    echo "<a href='?page=1'>First</a> ";    
    // Display previous page link
    if ($page > 1) {
        echo "<a href='?page=" . ($page - 1) . "'>Previous</a> ";
    }

    // Display page number links, showing only 3 numbers before and 3 numbers after the current page
    for ($i = max(1, $page - 3); $i <= min($totalPages, $page + 3); $i++) {
        if ($i == $page) {
            echo "<span class='current'>$i</span> ";
        } else {
            echo "<a href='?page=$i'>$i</a> ";
        }
    }

    // Display next page link
    if ($page < $totalPages) {
        echo "<a href='?page=" . ($page + 1) . "'>Next</a>";
    }

    echo "</div>";
    
    // Method 2-----------------------------------------------------------------------------------------------------------------
    echo "Method 2<br>";
    $count_sql = "SELECT COUNT(id) as total FROM page_data";
    $count_result = $conn->query($count_sql);
    
    if ($count_result) {
        $row = $count_result->fetch_assoc();
        $count = $row['total'];
        $pageno = ceil($count / $recordsPerPage);
    
        $prev = max(1, $page - 1);
        $next = min($pageno, $page + 1);
    
        echo "<a href='page.php?page=$prev'>Previous</a> ";
        for ($i = 1; $i <= $pageno; $i++) {
            echo "<a href='page.php?page=$i'>$i</a> ";
        }
        echo "<a href='page.php?page=$next'>Next</a>";
    }

    echo "<br><br>";
    echo "<form method='get' action=''>";
    echo "Go to Page: <input type='number' name='page' min='1' max='$totalPages' value='$page'>";
    echo "<input type='submit' value='Go'>";
    echo "</form>";
    
} else {
    // Handle the case where the query fails
    echo "Error executing the query: " . $conn->error;
}

mysqli_close($conn);
?>

</body>
</html>
