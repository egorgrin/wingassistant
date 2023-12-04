<?php
const BASE_URL = '/';
//define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
const ROOT_PATH = __DIR__ . '/';

const CHUNKS = ROOT_PATH . 'chunks';
?>

<!-- <?php echo ROOT_PATH ?> -->

<!doctype html>
<html lang="en">

  <?php include CHUNKS . '/head.php'?>

  <?php
  include ROOT_PATH . '/router/router.php';
  ?>

  <?php include CHUNKS . '/footer.php'?>
</body>

<script src="/assets/js/main.js"></script>

</html>

