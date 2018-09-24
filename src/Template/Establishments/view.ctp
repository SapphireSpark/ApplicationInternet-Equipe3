<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Establishment $establishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment'), ['action' => 'edit', $establishment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment'), ['action' => 'delete', $establishment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishments view large-9 medium-8 columns content">
    <h3><?= h($establishment->type) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($establishment->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishment->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Environments') ?></h4>
        <?php if (!empty($establishment->environments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Adress') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Province') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('Expectations') ?></th>
                <th scope="col"><?= __('Name Admin') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Adress Admin') ?></th>
                <th scope="col"><?= __('City Admin') ?></th>
                <th scope="col"><?= __('Province Admin') ?></th>
                <th scope="col"><?= __('Zipcode Admin') ?></th>
                <th scope="col"><?= __('Precision Facilities') ?></th>
                <th scope="col"><?= __('Precision Task') ?></th>
                <th scope="col"><?= __('Other Remark') ?></th>
                <th scope="col"><?= __('Profile') ?></th>
                <th scope="col"><?= __('Info Solicitation') ?></th>
                <th scope="col"><?= __('Info Contract') ?></th>
                <th scope="col"><?= __('Remark') ?></th>
                <th scope="col"><?= __('Other Info') ?></th>
                <th scope="col"><?= __('Date Invitation') ?></th>
                <th scope="col"><?= __('Date Lastcall') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Number Application') ?></th>
                <th scope="col"><?= __('Other Cegep') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Trp') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establishment->environments as $environments): ?>
            <tr>
                <td><?= h($environments->id) ?></td>
                <td><?= h($environments->name) ?></td>
                <td><?= h($environments->slug) ?></td>
                <td><?= h($environments->created) ?></td>
                <td><?= h($environments->modified) ?></td>
                <td><?= h($environments->adress) ?></td>
                <td><?= h($environments->city) ?></td>
                <td><?= h($environments->province) ?></td>
                <td><?= h($environments->zipcode) ?></td>
                <td><?= h($environments->expectations) ?></td>
                <td><?= h($environments->name_admin) ?></td>
                <td><?= h($environments->title) ?></td>
                <td><?= h($environments->telephone) ?></td>
                <td><?= h($environments->fax) ?></td>
                <td><?= h($environments->email) ?></td>
                <td><?= h($environments->adress_admin) ?></td>
                <td><?= h($environments->city_admin) ?></td>
                <td><?= h($environments->province_admin) ?></td>
                <td><?= h($environments->zipcode_admin) ?></td>
                <td><?= h($environments->precision_facilities) ?></td>
                <td><?= h($environments->precision_task) ?></td>
                <td><?= h($environments->other_remark) ?></td>
                <td><?= h($environments->profile) ?></td>
                <td><?= h($environments->info_solicitation) ?></td>
                <td><?= h($environments->info_contract) ?></td>
                <td><?= h($environments->remark) ?></td>
                <td><?= h($environments->other_info) ?></td>
                <td><?= h($environments->date_invitation) ?></td>
                <td><?= h($environments->date_lastcall) ?></td>
                <td><?= h($environments->active) ?></td>
                <td><?= h($environments->number_application) ?></td>
                <td><?= h($environments->other_cegep) ?></td>
                <td><?= h($environments->establishment_id) ?></td>
                <td><?= h($environments->trp) ?></td>
                <td><?= h($environments->region_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Environments', 'action' => 'view', $environments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Environments', 'action' => 'edit', $environments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Environments', 'action' => 'delete', $environments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $environments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
