<?php
$Root = $_SERVER['DOCUMENT_ROOT'];
$Timestamp = time();

?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>

  <?php
  require_once($Root . "/assets/parts/ogp.php");
  echo ogpSouceCode('');
  ?>
  <link rel="stylesheet" href="/assets/fonts/font_awesome/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/style.css?<?php echo $Timestamp; ?>">

  <script src="/assets/js/jquery.min.js"></script><!-- 最新版があればダウンロード ※~IE8対応の場合は、jQuery1.xの最新版 -->
  <script src="/assets/js/jquery-anchorScroll.js" defer></script>
  <script src="/assets/js/lazysizes.min.js" defer></script>
  <script src="/assets/js/common.js?<?php echo $Timestamp; ?>" defer></script>

</head>

<body>
  <div class="wrap">
    <?php require_once($Root . "/assets/parts/header.php"); ?>

    <!-- MainVisual -->
    <div class="mv">
      <div class="mv__inner">

      </div>
    </div>
    <!-- MainVisual END -->

    <!-- Main -->
    <section class="main">

      <!-- Section01 -->
      <section class="top-sec top-sec-01">
        <div class="top-sec__inner">

        </div>
      </section>
      <!-- Section01 END -->

    </section>
    <!-- Main End -->

    <?php require_once($Root . "/assets/parts/footer.php"); ?>

  </div>
</body>

</html>