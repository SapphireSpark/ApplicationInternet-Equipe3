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
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= h($milieux->adress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($milieux->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= h($milieux->province) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($milieux->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expectations') ?></th>
            <td><?= h($milieux->expectations) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Admin') ?></th>
            <td><?= h($milieux->name_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($milieux->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($milieux->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress Admin') ?></th>
            <td><?= h($milieux->adress_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Admin') ?></th>
            <td><?= h($milieux->city_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Admin') ?></th>
            <td><?= h($milieux->province_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode Admin') ?></th>
            <td><?= h($milieux->zipcode_admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($milieux->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precision Facilities') ?></th>
            <td><?= h($milieux->precision_facilities) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precision Task') ?></th>
            <td><?= h($milieux->precision_task) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Remark') ?></th>
            <td><?= h($milieux->other_remark) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Milieux') ?></th>
            <td><?= h($milieux->type_milieux) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Family') ?></th>
            <td><?= h($milieux->type_family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= h($milieux->profile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Solicitation') ?></th>
            <td><?= h($milieux->info_solicitation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Contract') ?></th>
            <td><?= h($milieux->info_contract) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remark') ?></th>
            <td><?= h($milieux->remark) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Info') ?></th>
            <td><?= h($milieux->other_info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Establishment') ?></th>
            <td><?= h($milieux->type_establishment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Client') ?></th>
            <td><?= h($milieux->type_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Missions') ?></th>
            <td><?= h($milieux->missions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trp') ?></th>
            <td><?= h($milieux->trp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($milieux->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= $this->Number->format($milieux->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= $this->Number->format($milieux->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Application') ?></th>
            <td><?= $this->Number->format($milieux->number_application) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($milieux->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($milieux->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Invitation') ?></th>
            <td><?= h($milieux->date_invitation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Lastcall') ?></th>
            <td><?= h($milieux->date_lastcall) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $milieux->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Cegep') ?></th>
            <td><?= $milieux->other_cegep ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
