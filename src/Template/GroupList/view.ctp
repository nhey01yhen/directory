<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupList $groupList
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group List'), ['action' => 'edit', $groupList->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group List'), ['action' => 'delete', $groupList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupList->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Group List'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group List'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupList view large-9 medium-8 columns content">
    <h3><?= h($groupList->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($groupList->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($groupList->id) ?></td>
        </tr>
    </table>
</div>
