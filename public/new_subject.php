<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<<<<<<< HEAD
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
=======
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
  <div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php echo message(); ?>
<<<<<<< HEAD
		<?php $errors = errors(); ?>
		<?php echo form_errors($errors); ?>
		
=======
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
		<h2>Create Subject</h2>
		<form action="create_subject.php" method="post">
		  <p>Menu name:
		    <input type="text" name="menu_name" value="" />
		  </p>
		  <p>Position:
		    <select name="position">
				<?php
<<<<<<< HEAD
					$subject_set = find_all_subjects(false);
=======
					$subject_set = find_all_subjects();
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
					$subject_count = mysqli_num_rows($subject_set);
					for($count=1; $count <= ($subject_count + 1); $count++) {
						echo "<option value=\"{$count}\">{$count}</option>";
					}
				?>
		    </select>
		  </p>
		  <p>Visible:
		    <input type="radio" name="visible" value="0" /> No
		    &nbsp;
		    <input type="radio" name="visible" value="1" /> Yes
		  </p>
		  <input type="submit" name="submit" value="Create Subject" />
		</form>
		<br />
		<a href="manage_content.php">Cancel</a>
	</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
