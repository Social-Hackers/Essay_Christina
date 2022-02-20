<div class="art_inner_main">
	<h2>質問フォーム</h2>
	<hr>
	
	<div class="inner_cmt">
		<form method="get">
			<h3><label>名前</label></h3> <p><input name="ask_name" type="text"></p><br>
			<h3><label>メールアドレス</label></h3> <p><input name="mail_address" type="mail"></p><br>
			<h3></h3> <p><textarea row="420" column="150" name="question"></textarea></p><br>
			<p><input type="submit" value="質問"></p><br>
		</form>
	</div>
	
	<?php if (asked($this)) : ?>
		<div class="inner_cmt">
			<h4>あなたの探求</h4>
			<p>あなたの名前：<?= stringIsset($this->gets, 'ask_name') ?></p>
			<p>あなたのメールアドレス：<?= stringIsset($this->gets, 'mail_address') ?></p>
			<p>あなたの質問：<?= stringIsset($this->gets, 'question')  ?></p>
		</div>
	<?php endif ?>
</div>

