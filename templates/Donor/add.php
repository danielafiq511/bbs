<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donor $donor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Donor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="donor form content">
            <?= $this->Form->create($donor) ?>
            <fieldset>
                <legend><?= __('Add Donor') ?></legend>
                <?php
                    echo $this->Form->control('donor_name');
                    echo $this->Form->control('donor_contact');
                    echo $this->Form->control('donor_address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
