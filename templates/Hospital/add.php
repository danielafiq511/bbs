<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hospital $hospital
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Hospital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospital form content">
            <?= $this->Form->create($hospital) ?>
            <fieldset>
                <legend><?= __('Add Hospital') ?></legend>
                <?php
                    echo $this->Form->control('hospital_name');
                    echo $this->Form->control('hospital_address');
                    echo $this->Form->control('hospital_contact');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
