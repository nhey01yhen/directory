<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <?= $this->Form->create($user) ?>
  <fieldset>
    <legend>Update User Information</legend>
    <br />
    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->control('email',['placeholder'=>'Enter your Email','class'=>'form-control']); ?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->control('username',['placeholder'=>'Enter your CS Username','class'=>'form-control']); ?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->control('password',['type'=>'password', 'placeholder'=>'Enter your password','class'=>'form-control']); ?>
      </div>
    </div>
    <?= $this->Form->button(__('Signup'), ['class'=>'btn btn-primary']) ?>
  </fieldset>
<?= $this->Form->end() ?>

</div>
