<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist $dirlist
 */
?>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Update Directory List</h3>
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
          <?php echo $this->Form->control('username',['class'=>'form-control']) ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-6 form-group">
          <?php echo $this->Form->control('group_list',['class'=>'form-control','style'=>'text-transform:uppercase;']) ?>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-xs-12 col-md-12 form-group">

        <button class="btn btn-primary pull-right" type="submit">Submit</button>
            <?= $this->Form->end() ?>


            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Delete', $dirlist->id],
                ['escape' => false, 'class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $dirlist->id)]
            ) ?>
        </div>
      </div>
    </div>
  </div>
</div>
