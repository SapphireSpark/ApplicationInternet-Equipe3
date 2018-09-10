<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milieux $milieux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Milieux'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="milieux form large-9 medium-8 columns content">
    <?= $this->Form->create($milieux) ?>
    <fieldset>
        <legend><?= __('Add Milieux') ?></legend>
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
            echo $this->Form->control('region');
            echo $this->Form->control('precision_facilities');
            echo $this->Form->control('precision_task');
            echo $this->Form->control('other_remark');
            echo $this->Form->control('type_milieux');
            echo $this->Form->control('type_family');
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
            echo $this->Form->control('type_establishment');
            echo $this->Form->control('type_client');
            echo $this->Form->control('missions');
            echo $this->Form->control('trp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
