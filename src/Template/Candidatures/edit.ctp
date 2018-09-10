<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Candidature $candidature
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $candidature->offre_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $candidature->offre_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Candidatures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="candidatures form large-9 medium-8 columns content">
    <?= $this->Form->create($candidature) ?>
    <fieldset>
        <legend><?= __('Edit Candidature') ?></legend>
        <?php
            echo $this->Form->control('environment_id');
            echo $this->Form->control('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
