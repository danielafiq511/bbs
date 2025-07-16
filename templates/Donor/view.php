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
            <?= $this->Html->link(__('Edit Donor'), ['action' => 'edit', $donor->donor_ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donor'), ['action' => 'delete', $donor->donor_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $donor->donor_ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="donor view content">
            <h3><?= h($donor->donor_ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Donor ID') ?></th>
                    <td><?= $this->Number->format($donor->donor_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Name') ?></th>
                    <td><?= $this->Number->format($donor->donor_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Contact') ?></th>
                    <td><?= $this->Number->format($donor->donor_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Address') ?></th>
                    <td><?= $this->Number->format($donor->donor_address) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>