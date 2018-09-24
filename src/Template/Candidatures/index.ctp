<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Candidature[]|\Cake\Collection\CollectionInterface $candidatures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Candidature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="candidatures index large-9 medium-8 columns content">
    <h3><?= __('Candidatures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('environment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candidatures as $candidature): ?>
            <tr>
                <td><?= $candidature->has('environment') ? $this->Html->link($candidature->environment->name, ['controller' => 'Environments', 'action' => 'view', $candidature->environment->id]) : '' ?></td>
                <td><?= $candidature->has('user') ? $this->Html->link($candidature->user->id, ['controller' => 'Users', 'action' => 'view', $candidature->user->id]) : '' ?></td>
                <td><?= h($candidature->slug) ?></td>
                <td><?= h($candidature->created) ?></td>
                <td><?= h($candidature->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $candidature->offre_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $candidature->offre_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $candidature->offre_id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidature->offre_id)]) ?>
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
