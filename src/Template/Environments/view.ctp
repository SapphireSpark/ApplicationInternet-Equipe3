<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment $environment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Environment'), ['action' => 'edit', $environment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Environment'), ['action' => 'delete', $environment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $environment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="environments view large-9 medium-8 columns content">
    <h3><?= h($environment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($environment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($environment->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= h($environment->adress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($environment->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= h($environment->province) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($environment->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expectations') ?></th>
            <td><?= h($environment->expectations) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Admin') ?></th>
            <td><?= h($environment->name_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($environment->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($environment->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress Admin') ?></th>
            <td><?= h($environment->adress_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Admin') ?></th>
            <td><?= h($environment->city_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Admin') ?></th>
            <td><?= h($environment->province_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode Admin') ?></th>
            <td><?= h($environment->zipcode_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($environment->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precision Facilities') ?></th>
            <td><?= h($environment->precision_facilities) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precision Task') ?></th>
            <td><?= h($environment->precision_task) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Remark') ?></th>
            <td><?= h($environment->other_remark) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Milieux') ?></th>
            <td><?= h($environment->type_milieux) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Family') ?></th>
            <td><?= h($environment->type_family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= h($environment->profile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Solicitation') ?></th>
            <td><?= h($environment->info_solicitation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Contract') ?></th>
            <td><?= h($environment->info_contract) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remark') ?></th>
            <td><?= h($environment->remark) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Info') ?></th>
            <td><?= h($environment->other_info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Establishment') ?></th>
            <td><?= h($environment->type_establishment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Client') ?></th>
            <td><?= h($environment->type_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Missions') ?></th>
            <td><?= h($environment->missions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trp') ?></th>
            <td><?= h($environment->trp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($environment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= $this->Number->format($environment->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= $this->Number->format($environment->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Application') ?></th>
            <td><?= $this->Number->format($environment->number_application) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($environment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($environment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Invitation') ?></th>
            <td><?= h($environment->date_invitation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Lastcall') ?></th>
            <td><?= h($environment->date_lastcall) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $environment->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Cegep') ?></th>
            <td><?= $environment->other_cegep ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Offers') ?></h4>
        <?php if (!empty($environment->offers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Environment Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Specalisation') ?></th>
                <th scope="col"><?= __('Jobs Open') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($environment->offers as $offers): ?>
            <tr>
                <td><?= h($offers->id) ?></td>
                <td><?= h($offers->environment_id) ?></td>
                <td><?= h($offers->name) ?></td>
                <td><?= h($offers->specalisation) ?></td>
                <td><?= h($offers->jobs_open) ?></td>
                <td><?= h($offers->slug) ?></td>
                <td><?= h($offers->created) ?></td>
                <td><?= h($offers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Offers', 'action' => 'view', $offers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Offers', 'action' => 'edit', $offers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offers', 'action' => 'delete', $offers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
