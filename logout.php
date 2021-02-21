<!DOCTYPE html>
<?php 
include("db.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<html>

<?php
header("Location: index.php");
session_destroy();
?>

<!------------------------------------------->
</form>
</center>
</body>
</html>