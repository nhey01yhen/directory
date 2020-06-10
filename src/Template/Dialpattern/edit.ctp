<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist $dirlist
 */
?>
<div class="container">
<div class="row">
<div class="col-sm-4">
<h3>Update Dial Pattern</h3>
</div>
</div>
<div class="row">
<br />
<div class="col-sm-12 contact-form">
<?= $this->Form->create($dialpattern) ?>

  <br />
  <div class="row">
  <div class="col-md-12 form-group">
    <div class="row">
      <div class="col-xs-6 col-md-6 form-group">
        <?php echo $this->Form->control('country',['class'=>'form-control']); ?>
      </div>
      <div class="col-xs-6 col-md-6 form-group">
        <label>Dialing Code</label>
        <?php echo $this->Form->textarea('dialing_code',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="col-xs-6 col-md-6 form-group">
        <label>Mobile Pattern</label>
        <?php echo $this->Form->textarea('mobile_pattern',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
      </div>
      <div class="col-xs-6 col-md-6 form-group">
        <label>Remarks</label>
        <?php echo $this->Form->textarea('mobile_comment',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="col-xs-6 col-md-6 form-group">
        <label>Landline Pattern</label>
        <?php echo $this->Form->textarea('landline_pattern',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
      </div>
      <div class="col-xs-6 col-md-6 form-group">
        <label>Remarks</label>
        <?php echo $this->Form->textarea('landline_comment',['class'=>'form-control', 'cols'=>'3','rows'=>'2']) ?>
      </div>
    </div>

  <button class="btn btn-primary pull-right" type="submit">Submit</button>
<?= $this->Form->end() ?>

</div>
</div>
</div>
</div>
</div>
