<!DOCTYPE html>
<html lang="ja">
<!-- ____________________head____________________ -->
<head>
<?php include(dirname(__FILE__) . '/config.php'); ?>
<?php include(dirname(__FILE__) . '/gtm_h.php'); ?>

<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width,user-scalable=yes,maximum-scale=2" />

<title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index, follow" />
<meta name="thumbnail" content="">

<link rel="canonical" href="index.php">

<meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:description" content="" />
<meta property="og:type" content="<?= htmlspecialchars($og_type, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:url" content="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="" />
<meta property="og:locale" content="ja_JP" />

<PageMap>
  <DataObject type="thumbnail">
    <Attribute name="src" value=""/>
    <Attribute name="width" value="120"/>
    <Attribute name="height" value="120"/>
  </DataObject>
</PageMap>

<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">

<link rel="stylesheet" type="text/css" href="<?php echo $root; ?>assets/css/style.css">
<!-- スライダー用に追加 -->
<link rel="stylesheet" type="text/css" href="<?php echo $root; ?>assets/css/slick.css">
<script type="text/javascript" src="<?php echo $root; ?>assets/js/jquery-3.5.1.min.js"></script>
</head>
<!-- ____________________//head____________________ -->

<body id="<?= htmlspecialchars($body_id, ENT_QUOTES, 'UTF-8'); ?>" class="<?= htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8'); ?>">

<?php include(dirname(__FILE__) . '/gtm_b.php'); ?>
<h1 class="h1Tag"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
