<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RingGroup $ringGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ring Group'), ['action' => 'edit', $ringGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ring Group'), ['action' => 'delete', $ringGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ringGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ring Group'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ring Group'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ringGroup view large-9 medium-8 columns content">
    <h3><?= h($ringGroup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Group') ?></th>
            <td><?= h($ringGroup->id_group) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($ringGroup->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ringGroup->id) ?></td>
        </tr>
    </table>
</div>
