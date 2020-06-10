<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupList $groupList
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupList->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Group List'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="groupList form large-9 medium-8 columns content">
    <?= $this->Form->create($groupList) ?>
    <fieldset>
        <legend><?= __('Edit Group List') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
