<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DonorHospital $donorHospital
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Donor Hospital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="donorHospital form content">
            <?= $this->Form->create($donorHospital) ?>
            <fieldset>
                <legend><?= __('Add Donor Hospital') ?></legend>
                <?php
                    echo $this->Form->control('donor_id');
                    echo $this->Form->control('hospital_id');
                    echo $this->Form->control('appointment');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
