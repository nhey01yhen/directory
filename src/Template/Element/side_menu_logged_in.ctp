<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li role="separator" class="divider"></li>
      <li class="heading"><?php echo $viewName; ?></li>
        <li><?= $this->Html->link(__('New '.$viewName), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List '.$viewName), ['action' => 'index']) ?></li>

        <?php if($this->view == 'view' AND $isUserAuthorized == true){ ?>
        <li><?= $this->Html->link(__('Edit '.$viewName), ['action' => 'edit', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete '.$viewName), ['action' => 'delete', $user->id]) ?> </li>
        <?php } ?>
        <li role="separator" class="divider"></li>
        <li class="heading">My Account</li>
        <li><?= $this->Html->link(__('Change Password'), ['controller'=>'users','action' => 'change_password']) ?></li>
        <li role="separator" class="divider"></li>
        <li class="heading">Others</li>
        <li><?= $this->Html->link(__('Forgot Password'), ['controller'=>'users','action' => 'forgotPassword']) ?></li>
        <li><?= $this->Html->link(__('About Us'), ['controller'=>'users','action' => 'aboutus']) ?></li>
        <li role="separator" class="divider"></li>
        <li class="heading">Admin</li>
        <li><?= $this->Html->link(__('Users'), ['controller'=>'users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Roles'), ['controller'=>'roles','action' => 'index']) ?></li>
    </ul>

</nav>
