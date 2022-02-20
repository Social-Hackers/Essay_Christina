<!DOCTYPE html>
<html>
<head>
<?php include essayMetaSettings() ?>
<?php include essayStyleSetting(__FILE__) ?>
</head>
<body>
<div class="container">
	<header>
	<?php include essayHeaderContent() ?>
	</header>

	<div class="cnt_main">
	<div class="float_wrapper">
		<nav>
			<?php include essayNavContent() ?>
		</nav>

		<section class="art_main">
			<?php include essayMainContents(__FILE__) ?>


		</section>

<!--nav links  +++++++end tag-->
	</div><!--float wrapper  +++++++end tag-->
		<div class="img_cnt">
			<img src="img/o_art_main01.png" alt="メインコンテンツのオーナメント" class="o_01">
			<img src="img/o_art_main02.png" alt="メインコンテンツのオーナメント" class="o_02">
			<img src="img/o_art_main03.png" alt="メインコンテンツのオーナメント" class="o_03">
		</div>
	</div><!--content main  +++++++end tag-->

<footer>
<?php include essayFooterContent() ?>
</footer>
</div>

</body>
</html>
