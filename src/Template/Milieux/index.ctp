<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milieux[]|\Cake\Collection\CollectionInterface $milieux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Milieux'), ['action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('Send email'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="milieux index large-9 medium-8 columns content">
    <h3><?= __('Milieux') ?></h3>
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
            <?php foreach ($milieux as $milieux): ?>
            <tr>
                <td><?= $this->Number->format($milieux->id) ?></td>
                <td><?= h($milieux->name) ?></td>
                <td><?= h($milieux->slug) ?></td>
                <td><?= h($milieux->created) ?></td>
                <td><?= h($milieux->modified) ?></td>
                <td><?= h($milieux->adress) ?></td>
                <td><?= h($milieux->city) ?></td>
                <td><?= h($milieux->province) ?></td>
                <td><?= h($milieux->zipcode) ?></td>
                <td><?= h($milieux->expectations) ?></td>
                <td><?= h($milieux->name_admin) ?></td>
                <td><?= h($milieux->title) ?></td>
                <td><?= $this->Number->format($milieux->telephone) ?></td>
                <td><?= $this->Number->format($milieux->fax) ?></td>
                <td><?= h($milieux->email) ?></td>
                <td><?= h($milieux->adress_admin) ?></td>
                <td><?= h($milieux->city_admin) ?></td>
                <td><?= h($milieux->province_admin) ?></td>
                <td><?= h($milieux->zipcode_admin) ?></td>
                <td><?= h($milieux->region) ?></td>
                <td><?= h($milieux->precision_facilities) ?></td>
                <td><?= h($milieux->precision_task) ?></td>
                <td><?= h($milieux->other_remark) ?></td>
                <td><?= h($milieux->type_milieux) ?></td>
                <td><?= h($milieux->type_family) ?></td>
                <td><?= h($milieux->profile) ?></td>
                <td><?= h($milieux->info_solicitation) ?></td>
                <td><?= h($milieux->info_contract) ?></td>
                <td><?= h($milieux->remark) ?></td>
                <td><?= h($milieux->other_info) ?></td>
                <td><?= h($milieux->date_invitation) ?></td>
                <td><?= h($milieux->date_lastcall) ?></td>
                <td><?= h($milieux->active) ?></td>
                <td><?= $this->Number->format($milieux->number_application) ?></td>
                <td><?= h($milieux->other_cegep) ?></td>
                <td><?= h($milieux->type_establishment) ?></td>
                <td><?= h($milieux->type_client) ?></td>
                <td><?= h($milieux->missions) ?></td>
                <td><?= h($milieux->trp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $milieux->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $milieux->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $milieux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milieux->id)]) ?>
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
