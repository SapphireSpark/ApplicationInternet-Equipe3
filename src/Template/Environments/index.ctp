<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment[]|\Cake\Collection\CollectionInterface $environments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Candidatures'), ['controller' => 'Candidatures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Candidature'), ['controller' => 'Candidatures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Send email'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="environments index large-9 medium-8 columns content">
    <h3><?= __('Environments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($environments as $environment): ?>
            <tr>
                <td><?= h($environment->name) ?></td>           
                <td><?= h($environment->city) ?></td>
                <td><?= h($environment->province) ?></td>
                
                <td><?= $environment->has('establishment') ? $this->Html->link($environment->establishment->type, ['controller' => 'Establishments', 'action' => 'view', $environment->establishment->id]) : '' ?></td>
                <td><?= $environment->has('region') ? $this->Html->link($environment->region->type, ['controller' => 'Regions', 'action' => 'view', $environment->region->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $environment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $environment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $environment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $environment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
