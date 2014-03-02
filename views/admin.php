<div class="container">

<h1>管理画面</h1>
<table class="table">
<tr>
<th>投稿日</th>
<th>投稿者</th>
<th>メール</th>
<th>内容</th>
<th></th>
<th></th>
</tr>
<? foreach ($content as $c) { ?>
<tr>
	<td><?=$c['created'];?></td>
	<td><?=$c['name'];?></td>
	<td><?=$c['mail'];?></td>
	<td><?=mb_substr($c['content'], 0, 25).' ...';?></td>
	<td>
		<form action="./edit/<?=$c['id'];?>" method="post">
			<input value="編集" type="submit">
		</form>
	</td>
	<td>
		<form action="./del/<?=$c['id'];?>" method="post">
			<input value="削除" type="submit">
		</form>
	</td>
</tr>

<? } ?>
</table>

</div>