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
            <?= $this->Html->link(__('Edit Donor Hospital'), ['action' => 'edit', $donorHospital->donorhospital_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donor Hospital'), ['action' => 'delete', $donorHospital->donorhospital_id], ['confirm' => __('Are you sure you want to delete # {0}?', $donorHospital->donorhospital_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donor Hospital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donor Hospital'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="donorHospital view content">
            <h3><?= h($donorHospital->appointment) ?></h3>
            <table>
                <tr>
                    <th><?= __('Appointment') ?></th>
                    <td><?= h($donorHospital->appointment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donorhospital Id') ?></th>
                    <td><?= $this->Number->format($donorHospital->donorhospital_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Id') ?></th>
                    <td><?= $this->Number->format($donorHospital->donor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospital Id') ?></th>
                    <td><?= $this->Number->format($donorHospital->hospital_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>