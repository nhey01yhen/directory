<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist $dirlist
 */
?>
<div class="container">
<div class="row">
<div class="col-sm-4">
<h3>Add new Directory List</h3>
</div>
</div>
<div class="row">
<br />
<div class="col-sm-12 contact-form">
<?= $this->Form->create($dirlist) ?>
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<?php echo $this->Form->control('did_number',['class'=>'form-control']) ?>
</div>
<div class="col-xs-6 col-md-6 form-group">
<?php echo $this->Form->control('ext_number',['class'=>'form-control']) ?>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<?php echo $this->Form->control('dept',['class'=>'form-control']) ?>
</div>
<div class="col-xs-6 col-md-6 form-group">
<?php echo $this->Form->control('username',['class'=>'form-control','error' => false]) ?>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<label>Group</label>
<?php
echo $this->Form->select(
    'group_list',
    ['HUB', 'CLIENT'],
    ['empty' => 'Select Group',
    'class' => 'form-control',
    'required' => 'required']
);
 ?>
</div>

</div>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">

<button class="btn btn-primary pull-right" type="submit">Submit</button>
    <?= $this->Form->end() ?>

</div>
</div>
</div>
</div>
</div>
