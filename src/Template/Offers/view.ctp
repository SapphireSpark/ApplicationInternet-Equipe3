<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offer $offer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offer'), ['action' => 'edit', $offer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offer'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offers view large-9 medium-8 columns content">
    <h3><?= h($offer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Environment') ?></th>
            <td><?= $offer->has('environment') ? $this->Html->link($offer->environment->name, ['controller' => 'Environments', 'action' => 'view', $offer->environment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($offer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specalisation') ?></th>
            <td><?= h($offer->specalisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($offer->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jobs Open') ?></th>
            <td><?= $this->Number->format($offer->jobs_open) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($offer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($offer->modified) ?></td>
        </tr>
    </table>
</div>
