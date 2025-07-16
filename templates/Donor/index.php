<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Donor> $donor
 */
?>
<div class="donor index content">
    <?= $this->Html->link(__('New Donor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('donor_ID') ?></th>
                    <th><?= $this->Paginator->sort('donor_name') ?></th>
                    <th><?= $this->Paginator->sort('donor_contact') ?></th>
                    <th><?= $this->Paginator->sort('donor_address') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donor as $donor): ?>
                <tr>
                    <td><?= $this->Number->format($donor->donor_ID) ?></td>
                    <td><?= $this->Number->format($donor->donor_name) ?></td>
                    <td><?= $this->Number->format($donor->donor_contact) ?></td>
                    <td><?= $this->Number->format($donor->donor_address) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donor->donor_ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donor->donor_ID]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $donor->donor_ID],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $donor->donor_ID),
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