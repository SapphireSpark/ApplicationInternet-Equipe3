<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment $environment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $environment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $environment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establishments'), ['controller' => 'Establishments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment'), ['controller' => 'Establishments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Candidatures'), ['controller' => 'Candidatures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Candidature'), ['controller' => 'Candidatures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="environments form large-9 medium-8 columns content">
    <?= $this->Form->create($environment) ?>
    <fieldset>
        <legend><?= __('Edit Environment') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
            echo $this->Form->control('adress');
            echo $this->Form->control('city');
            echo $this->Form->control('province');
            echo $this->Form->control('zipcode');
            echo $this->Form->control('expectations');
            echo $this->Form->control('name_admin');
            echo $this->Form->control('title');
            echo $this->Form->control('telephone');
            echo $this->Form->control('fax');
            echo $this->Form->control('email');
            echo $this->Form->control('adress_admin');
            echo $this->Form->control('city_admin');
            echo $this->Form->control('province_admin');
            echo $this->Form->control('zipcode_admin');
            echo $this->Form->control('precision_facilities');
            echo $this->Form->control('precision_task');
            echo $this->Form->control('other_remark');
            echo $this->Form->control('profile');
            echo $this->Form->control('info_solicitation');
            echo $this->Form->control('info_contract');
            echo $this->Form->control('remark');
            echo $this->Form->control('other_info');
            echo $this->Form->control('date_invitation');
            echo $this->Form->control('date_lastcall');
            echo $this->Form->control('active');
            echo $this->Form->control('number_application');
            echo $this->Form->control('other_cegep');
            echo $this->Form->control('establishment_id', ['options' => $establishments]);
            echo $this->Form->control('trp');
            echo $this->Form->control('region_id', ['options' => $regions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
