<?php
    $priority = htmlentities($_GET["title"], ENT_QUOTES);
    $task = htmlentities($_GET["task"], ENT_QUOTES);
    
    //put into database    
    include("database_config.php");
    $new_conn = new mysqli($servername, $username, $password, $databasename);
	if ($new_conn->connect_errno) {
		echo "Failed to connect MySQL: ".$new_conn->connect_error;
		exit();
	}
    $create_query = "INSERT INTO todolist (priority, todo_item) VALUES ('";
    $create_query .=  $priority . "', '" . $task . "')";
    $new_conn->query($create_query);
    $new_conn->close();

    //redirect to todolist.php with auth
    $redirect = "Location: todolist.php";
    header($redirect);
?>
