

<div class="container">
<h1>flight test 掲示板</h1>
</div>

<div class="container">
<form method="post" action="./" class="form-horizontal" role="form">
  <div class="form-group">
    <label for="input_name" class="col-sm-1 control-label">名前</label>
    <div class="col-sm-2">
      <input type="text" name="name" class="form-control" id="input_name" value="" placeholder="名前">
    </div>
  </div>
  <div class="form-group">
    <label for="input_mail" class="col-sm-1 control-label">メール</label>
    <div class="col-sm-4">
      <input type="mail" name="mail" class="form-control" id="input_mail" value="" placeholder="hoge@hogehoge.com">
    </div>
  </div>
  <div class="form-group">
    <label for="input_text" class="col-sm-1 control-label">内容</label>
    <div class="col-sm-4">
      <textarea name="content" class="form-control" id="input_text"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-4">
      <input type="submit" class="btn btn-primary">
    </div>
  </div>
</form>
</div>

<div class="container">

<hr>

<? foreach ($hoge as $c) { ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <span class="label label-primary"><?=$c['name'];?></span>
    <a href="mailto:<?=$c['mail'];?>"><?=$c['mail'];?></a>
    <span class="label label-default"><?=$c['created'];?></span>
  </div>
  <div class="panel-body">
    <?=$c['content'];?>
  </div>
</div>
<? } ?>

</div>


