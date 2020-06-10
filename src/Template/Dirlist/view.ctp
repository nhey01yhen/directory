<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist $dirlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dirlist'), ['action' => 'edit', $dirlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dirlist'), ['action' => 'delete', $dirlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dirlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dirlist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dirlist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dirlist view large-9 medium-8 columns content">
    <h3><?= h($dirlist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Did Number') ?></th>
            <td><?= h($dirlist->did_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ext Number') ?></th>
            <td><?= h($dirlist->ext_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dept') ?></th>
            <td><?= h($dirlist->dept) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($dirlist->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group List') ?></th>
            <td><?= h($dirlist->group_list) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dirlist->id) ?></td>
        </tr>
    </table>
</div>
