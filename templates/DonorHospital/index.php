<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DonorHospital> $donorHospital
 */
?>
<div class="donorHospital index content">
    <?= $this->Html->link(__('New Donor Hospital'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donor Hospital') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('donorhospital_id') ?></th>
                    <th><?= $this->Paginator->sort('donor_id') ?></th>
                    <th><?= $this->Paginator->sort('hospital_id') ?></th>
                    <th><?= $this->Paginator->sort('appointment') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donorHospital as $donorHospital): ?>
                <tr>
                    <td><?= $this->Number->format($donorHospital->donorhospital_id) ?></td>
                    <td><?= $this->Number->format($donorHospital->donor_id) ?></td>
                    <td><?= $this->Number->format($donorHospital->hospital_id) ?></td>
                    <td><?= h($donorHospital->appointment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donorHospital->donorhospital_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donorHospital->donorhospital_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $donorHospital->donorhospital_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $donorHospital->donorhospital_id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>