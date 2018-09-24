<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Candidature $candidature
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Candidature'), ['action' => 'edit', $candidature->offre_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Candidature'), ['action' => 'delete', $candidature->offre_id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidature->offre_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Candidatures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Candidature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="candidatures view large-9 medium-8 columns content">
    <h3><?= h($candidature->offre_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Environment') ?></th>
            <td><?= $candidature->has('environment') ? $this->Html->link($candidature->environment->name, ['controller' => 'Environments', 'action' => 'view', $candidature->environment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $candidature->has('user') ? $this->Html->link($candidature->user->id, ['controller' => 'Users', 'action' => 'view', $candidature->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($candidature->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($candidature->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($candidature->modified) ?></td>
        </tr>
    </table>
</div>
