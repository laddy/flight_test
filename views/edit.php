<div class="container">
<h1>編集</h1>
<span class="label label-default"><?=$content[0]['created'];?></span>
<hr>
<form method="post" action="./" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?=$content[0]['id']?>">
  <div class="form-group">
    <label for="input_name" class="col-sm-1 control-label">名前</label>
    <div class="col-sm-2">
      <input type="text" name="name" class="form-control" id="input_name" value="<?=$content[0]['name'];?>" placeholder="名前">
    </div>
  </div>
  <div class="form-group">
    <label for="input_mail" class="col-sm-1 control-label">メール</label>
    <div class="col-sm-4">
      <input type="mail" name="mail" class="form-control" id="input_mail" value="<?=$content[0]['mail'];?>" placeholder="hoge@hogehoge.com">
    </div>
  </div>
  <div class="form-group">
    <label for="input_text" class="col-sm-1 control-label">内容</label>
    <div class="col-sm-4">
      <textarea name="content" class="form-control" id="input_text"><?=$content[0]['content'];?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-4">
      <input type="submit" class="btn btn-primary">
    </div>
  </div>
</form>
</div>