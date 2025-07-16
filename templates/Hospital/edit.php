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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hospital->hospital_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->hospital_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hospital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospital form content">
            <?= $this->Form->create($hospital) ?>
            <fieldset>
                <legend><?= __('Edit Hospital') ?></legend>
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
