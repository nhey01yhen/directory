<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dialpattern $dialpattern
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dialpattern'), ['action' => 'edit', $dialpattern->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dialpattern'), ['action' => 'delete', $dialpattern->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dialpattern->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dialpattern'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dialpattern'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dialpattern view large-9 medium-8 columns content">
    <h3><?= h($dialpattern->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($dialpattern->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dialing Code') ?></th>
            <td><?= h($dialpattern->dialing_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Pattern') ?></th>
            <td><?= h($dialpattern->mobile_pattern) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Comment') ?></th>
            <td><?= h($dialpattern->mobile_comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landline Pattern') ?></th>
            <td><?= h($dialpattern->landline_pattern) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landline Comment') ?></th>
            <td><?= h($dialpattern->landline_comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dialpattern->id) ?></td>
        </tr>
    </table>
</div>
