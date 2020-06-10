<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Featuredcode $featuredcode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Featuredcode'), ['action' => 'edit', $featuredcode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Featuredcode'), ['action' => 'delete', $featuredcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $featuredcode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Featuredcode'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Featuredcode'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="featuredcode view large-9 medium-8 columns content">
    <h3><?= h($featuredcode->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Featured Code') ?></th>
            <td><?= h($featuredcode->featured_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($featuredcode->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($featuredcode->id) ?></td>
        </tr>
    </table>
</div>
