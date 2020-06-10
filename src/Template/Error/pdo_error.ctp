<div class="alert alert-danger text-center" role="alert" onclick="this.classList.add('hidden');"><?= $message ?></div>
<br />
<div class="col-md-12 pull-right">
  <?= $this->Html->link(__('Return'), ['controller'=>'Dirlist','action' => 'index'],['class'=>'btn btn-primary pull-right']) ?>
</div>
