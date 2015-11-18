<<<<<<< HEAD
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
=======
<?php require_once("../includes/functions.php"); ?>
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <h2>Admin Menu</h2>
<<<<<<< HEAD
    <p>Welcome to the admin area, <?php echo htmlentities($_SESSION["username"]); ?>.</p>
=======
    <p>Welcome to the admin area.</p>
>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
    <ul>
      <li><a href="manage_content.php">Manage Website Content</a></li>
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
