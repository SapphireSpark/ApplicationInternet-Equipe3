<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offre'), ['action' => 'edit', $offre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offre'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Candidatures'), ['controller' => 'Candidatures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Candidature'), ['controller' => 'Candidatures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offres view large-9 medium-8 columns content">
    <h3><?= h($offre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($offre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specalisation') ?></th>
            <td><?= h($offre->specalisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($offre->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Environment Id') ?></th>
            <td><?= $this->Number->format($offre->environment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jobs Open') ?></th>
            <td><?= $this->Number->format($offre->jobs_open) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($offre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($offre->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Candidatures') ?></h4>
        <?php if (!empty($offre->candidatures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offre->candidatures as $candidatures): ?>
            <tr>
                <td><?= h($candidatures->offre_id) ?></td>
                <td><?= h($candidatures->user_id) ?></td>
                <td><?= h($candidatures->slug) ?></td>
                <td><?= h($candidatures->created) ?></td>
                <td><?= h($candidatures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Candidatures', 'action' => 'view', $candidatures->offre_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Candidatures', 'action' => 'edit', $candidatures->offre_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Candidatures', 'action' => 'delete', $candidatures->offre_id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidatures->offre_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
