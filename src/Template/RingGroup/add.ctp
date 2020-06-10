<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RingGroup $ringGroup
 */
?>

<div class="container">

    <?= $this->Form->create($ringGroup) ?>
			<h2>Add new Ring Group / Queue</h2>
      <br />
			<div class="form-group">
      <?php echo $this->Form->control('id_group',['class'=>'form-control','label'=>'Ring Group/Queue']); ?>
		</div>
		<div class="form-group">
      <label>Description</label>
      <?php echo $this->Form->textarea('description',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
		</div>
    <button class="btn btn-primary pull-right" type="submit">Submit</button>
    <?= $this->Form->end() ?>


</div>
