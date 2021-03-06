<?php

	session_start();




	$page_title = "Add Team members";

	include 'includes/db.php';

	include 'includes/functions.php';

	include 'includes/view1.php';

	$destination = "";

	define("MAX_FILE_SIZE", "2097152");

	$ext = ["image/jpg", "image/jpeg", "image/png"];



	$errors = [];

	if (array_key_exists('save', $_POST)) {

		if(empty($_FILES['member']['name'])) {
			$errors[] = "please choose a file";
			}

			#  check file size..
		if($_FILES['member']['size'] > MAX_FILE_SIZE) {
			$errors[] = "file size exceeds maximum. maximum: ". MAX_FILE_SIZE;
			}

		if(!in_array($_FILES['member']['type'], $ext)) {
			$errors[] = "invalid file type";
			}

		
		if (empty($_POST['member_name'])) {
			$errors['member_name'] = "Enter Full name";
		}
		if (empty($_POST['member_number'])) {
			$errors['member_number'] = "Enter Phone number";
		}
		
		
		if (empty($_POST['member_email'])) {
			$errors['member_email'] = "Enter email address";
		}

		$chk = UploadFile($_FILES, 'member', 'uploads/');
 			if($chk[0]) {
 				$destination = $chk[1];
 			} else{
 				$errors['member'] = "file uploadfailed";
 			}

		
		if (empty($errors)) {
			$clean = array_map('trim', $_POST);

			addTeamMember($conn, $clean, $destination);
		}
	}



?>


<div class="wrapper">
		<div id="stream">
			<form action="addmembers.php" method="POST" enctype="multipart/form-data">
				<p>Choose picture</p>
				<div>
					<input type="file" name="member">
				</div>

				<div>
				<?php
			$display = displayErrors($errors,'member_name');
			echo $display;
			?>
					
					<input type="text" name="member_name" placeholder="Enter Full name">
				</div>

				<div>
				<?php
			$display = displayErrors($errors,'member_number');
			echo $display;
			?>
					
					<input type="text" name="member_number" placeholder="Enter Contact phone number">
				</div>

				<div>

				<div>
				<?php
			$display = displayErrors($errors,'member_email');
			echo $display;
			?>
					
					<input type="text" name="member_email" placeholder="Enter email address">
				</div>

					<div>
					<select name="service">
						<option>Select service</option>
						<?php
						$stmt = $conn->prepare("SELECT * FROM service");
						$stmt->execute();
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
						<option value="<?php echo $row['service_name']?>"> <?php echo $row['service_name'] ?> </option>
						<?php } ?>
					</select>
				</div>


				

				<input type="submit" name="save" value="Add to team">
			</form>
		</div>
	</div>

