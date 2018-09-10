<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milieux $milieux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $milieux->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $milieux->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Milieux'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="milieux form large-9 medium-8 columns content">
    <?= $this->Form->create($milieux) ?>
    <fieldset>
        <legend><?= __('Edit Milieux') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
