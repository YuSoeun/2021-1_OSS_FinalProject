
<?php
	//disable this in production
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	//these two lines are only good for debugging/developing
?>

<!DOCTYPE html>
	<head>
		<title>The Helper</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<header>
			<h1>Envisioned Function</h1>
		</header>
		<main>
			<?php
				include("database_config.php");
				$conn = new mysqli($servername, $username, $password, $databasename);
				if ($conn->connect_error) {
					die("MySQL connection error");
				} else {
					echo "<!-- Database connection successful -->";
				}
			?>

			<section>
				<div style="display: block;">
					<button class="btn btn-default" onclick="toggleNewTask()" style="top: 0;">Create New Task</button>
					<form method="GET" action="create_new.php" id="new_task_form" style="display:none;">
						<h2>Create new task</h2>
						<div class="form-group">
							<label>Title: </label>
							<input class="form-control" placeholder="Enter the title" type="text" size="6" name="title" id="title">
							<input type="hidden" name="mode" value"$mode">
						</div>
						<div class="form-group">
							<label>Task to create</label>
							<textarea class="form-control" name="task" rows="4" cols="80" id="task"></textarea>
						</div>
						<input class="btn btn-default" type="submit" value="Add task">
						<button class="btn btn-default" onclick="closeNewForm()" type="button">Close</button>
					</form>
				</section>

				<br>

				<section>
					<?php
					$result = $conn->query("SELECT priority, todo_item, item_id FROM todolist ORDER BY priority");
					if ($result) {
						while ($row = $result->fetch_assoc()) {
							$html = "<table class='table table-bordered'>";

							$title = $row["priority"];
							$content = $row["todo_item"];
							$item_id = $row["item_id"];
							if (strpos($content, '&#039;') !== false)
								$content = str_replace('&#039;', '\\&#039;', $content);

							$html = $html."<thead><tr><th>".$title."</th></tr></thead>";
							$html = $html."<tbody><tr><td>".$content."</td></tr>";
							$html = $html."<tr><td><a href='./delete.php?id=".$item_id."'>Delete</a></td></tr></tbody>";
							$html = $html."</table>";
							echo $html; 
						}
					}
					$result->close();
                    $conn->close();
					?>
					</table>
				</section>
		</main>
		</div>

		<script>
			function toggleNewTask() {
				var create_form = document.getElementById("new_task_form");
				if (create_form.style.display == "none")
					create_form.style.display = "block";
				else
					create_form.style.display = "none";
			}

			function closeNewForm() {
				var create_form = document.getElementById("new_task_form");
				create_form.style.display = "none";
			}
			
		</script>
	</body>
</html>
