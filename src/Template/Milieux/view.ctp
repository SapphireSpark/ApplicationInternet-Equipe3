<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milieux $milieux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Milieux'), ['action' => 'edit', $milieux->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Milieux'), ['action' => 'delete', $milieux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milieux->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Milieux'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milieux'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="milieux view large-9 medium-8 columns content">
    <h3><?= h($milieux->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($milieux->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($milieux->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($milieux->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($milieux->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($milieux->modified) ?></td>
        </tr>
    </table>
</div>
