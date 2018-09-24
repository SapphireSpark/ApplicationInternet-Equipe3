<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment $environment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
        <legend><?= __('Add Environment') ?></legend>
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
<div class="environments form large-9 medium-8 columns content">
    <ol>
        <legend><?= __('Milieu Stage (Rajouter les milieux dans les informations autres)') ?></legend>
        <li>UTRF</li>
        <li>Soins de clientèle hébergée et hôpital de jour</li>
        <li>Soins de clientèle hébergée et externe</li>
        <li>Soins de clientèle externe, hospitalisée et hébergée, rééducation et renforcement au travail </li>
        <li>Soins de clientèle externe</li>
        <li>Soins clientèle hospitalisée</li>
        <li>Soins clientèle hébergée, soins de clientèle en convalescence</li>
        <li>Soins clientèle hébergée et hospitalisée</li>
        <li>Soins clientèle hébergée et externe</li>
        <li>Soins clientèle hébergé et possibilité de Centre de jour</li>
        <li>Soins clientèle externe, rééducation au travail</li>
        <li>Soins clientèle externe et interne</li>
        <li>Soins clientèle externe et hospitalisée</li>
        <li>Soins clientèle externe et hébergée</li>
        <li>Soins clientèle externe et à domicile</li>
        <li>Soins clientèle externe</li>
        <li>Soins clientèle à domicile et en hébergement, Centre de jour</li>
        <li>Soins clientèle à domicile et clientèle externe</li>
        <li>Soins clientèle à domicile</li>
        <li>Recherche clinique</li>
        <li>Principalement ortho/rhumato, un peu de perte d'autonomie</li>
        <li>Perte d'autonomie, orthopédie/rhumatologie, neuro, cardiorespiratoire</li>
        <li>Perte d'autonomie, orthopédie/rhumatologie, neuro</li>
        <li>Perte d'autonomie, Orthopédie/rhumatologie</li>
        <li>Perte d'autonomie, orthopédie/rhumato, neuro</li>
        <li>Perte d'autonomie, ortho/rhumato, cardiorespiratoire</li>
        <li>Perte d'autonomie, ortho/rhumato</li>
        <li>Perte d'autonomie, ortho, cardio, neuro</li>
        <li>Perte d'autonomie, neurologie (cas séquélaires et évolutifs)</li>
        <li>Perte d'autonomie, neuro et quelques cas ortho</li>
        <li>Perte d'autonomie, cardiorespiratoire, palliatif</li>
        <li>Perte d'autonomie un peu de neuro et d'ortho</li>
        <li>Perte d'autonomie et ortho/rhumato</li>
        <li>Perte d'autonomie</li>
        <li>Perte autonomie fonctionnelle</li>
        <li>Orthopédie/rhumatologie, Perte d'Autonomie</li>
        <li>Orthopédie/rhumatologie principalement</li>
        <li>Orthopédie/rhumatologie</li>
        <li>Ortho/rhumato et perte d'autonomie</li>
        <li>Ortho/rhumato</li>
        <li>Neurologie, pédiatrie poss d'ortho/rhumato</li>
        <li>Hôpital de jour</li>
        <li>Centre de jour, soins de clientèle hébergée</li>
        <li>Centre de jour et soins à domicile</li>
        <li>Centre de jour et hôpital de jour</li>
        <li>Centre de jour</li>
        <li>CDJ et soins clientèle hébergée</li>
   </ol>

    <ol>
        <legend><?= __('Mission Milieu (Rajouter les milieux dans les informations autres)') ?></legend>
        <li>UTRF</li>
        <li>Soins de clientèle hébergée et hôpital de jour</li>
        <li>Soins de clientèle hébergée et externe</li>
        <li>Soins de clientèle externe, hospitalisée et hébergée, rééducation et renforcement au travail</li>
        <li>Soins de clientèle externe</li>
        <li>Soins clientèle hospitalisée</li>
        <li>Soins clientèle hébergée, soins de clientèle en convalescence</li>
        <li>Soins clientèle hébergée et hospitalisée</li>
        <li>Soins clientèle hébergée et externe</li>
        <li>Soins clientèle hébergée</li>
        <li>Soins clientèle hébergé et possibilité de Centre de jour</li>
        <li>Soins clientèle externe, rééducation au travail</li>
        <li>Soins clientèle externe et interne</li>
        <li>Soins clientèle externe et hospitalisée</li>
        <li>Soins clientèle externe et hébergée</li>
        <li>Soins clientèle externe et à domicile</li>
        <li>Soins clientèle externe</li>
        <li>Soins clientèle à domicile et en hébergement, Centre de jour</li>
        <li>Soins clientèle à domicile et clientèle externe</li>
        <li>Soins clientèle à domicile</li>
        <li>Recherche clinique</li>
        <li>Hôpital de jour</li>
        <li>Centre de jour, soins de clientèle hébergée</li>
        <li>Centre de jour et soins à domicile</li>
        <li>Centre de jour et hôpital de jour</li>
        <li>Centre de jour</li>
        <li>CDJ et soins clientèle hébergée</li>
    </ol>
</div>