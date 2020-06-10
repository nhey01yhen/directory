
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RingGroup $ringGroup
 */
?>

<div class="container">

    <?= $this->Form->create($featuredcode) ?>
			<h2>Add new Dial Pattern and Featured Code</h2>
      <br />
			<div class="form-group">
      <?php echo $this->Form->control('featured_code',['class'=>'form-control','label'=>'Featured Code']); ?>
		</div>
		<div class="form-group">
      <label>Action</label>
      <?php echo $this->Form->textarea('action',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
		</div>
    <button class="btn btn-primary pull-right" type="submit">Submit</button>
    <?= $this->Form->end() ?>


</div>
