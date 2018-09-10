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
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
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
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($environments as $environment): ?>
            <tr>
                <td><?= $this->Number->format($environment->id) ?></td>
                <td><?= h($environment->name) ?></td>
                <td><?= h($environment->slug) ?></td>
                <td><?= h($environment->created) ?></td>
                <td><?= h($environment->modified) ?></td>
                <td><?= h($environment->adress) ?></td>
                <td><?= h($environment->city) ?></td>
                <td><?= h($environment->province) ?></td>
                <td><?= h($environment->zipcode) ?></td>
                <td><?= h($environment->expectations) ?></td>
                <td><?= h($environment->name_admin) ?></td>
                <td><?= h($environment->title) ?></td>
                <td><?= $this->Number->format($environment->telephone) ?></td>
                <td><?= $this->Number->format($environment->fax) ?></td>
                <td><?= h($environment->email) ?></td>
                <td><?= h($environment->adress_admin) ?></td>
                <td><?= h($environment->city_admin) ?></td>
                <td><?= h($environment->province_admin) ?></td>
                <td><?= h($environment->zipcode_admin) ?></td>
                <td><?= h($environment->region) ?></td>
                <td><?= h($environment->precision_facilities) ?></td>
                <td><?= h($environment->precision_task) ?></td>
                <td><?= h($environment->other_remark) ?></td>
                <td><?= h($environment->type_milieux) ?></td>
                <td><?= h($environment->type_family) ?></td>
                <td><?= h($environment->profile) ?></td>
                <td><?= h($environment->info_solicitation) ?></td>
                <td><?= h($environment->info_contract) ?></td>
                <td><?= h($environment->remark) ?></td>
                <td><?= h($environment->other_info) ?></td>
                <td><?= h($environment->date_invitation) ?></td>
                <td><?= h($environment->date_lastcall) ?></td>
                <td><?= h($environment->active) ?></td>
                <td><?= $this->Number->format($environment->number_application) ?></td>
                <td><?= h($environment->other_cegep) ?></td>
                <td><?= h($environment->type_establishment) ?></td>
                <td><?= h($environment->type_client) ?></td>
                <td><?= h($environment->missions) ?></td>
                <td><?= h($environment->trp) ?></td>
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
