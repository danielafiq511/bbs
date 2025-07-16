<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hospital> $hospital
 */
?>
<div class="hospital index content">
    <?= $this->Html->link(__('New Hospital'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hospital') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('hospital_id') ?></th>
                    <th><?= $this->Paginator->sort('hospital_name') ?></th>
                    <th><?= $this->Paginator->sort('hospital_address') ?></th>
                    <th><?= $this->Paginator->sort('hospital_contact') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hospital as $hospital): ?>
                <tr>
                    <td><?= $this->Number->format($hospital->hospital_id) ?></td>
                    <td><?= $this->Number->format($hospital->hospital_name) ?></td>
                    <td><?= $this->Number->format($hospital->hospital_address) ?></td>
                    <td><?= $this->Number->format($hospital->hospital_contact) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hospital->hospital_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hospital->hospital_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $hospital->hospital_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $hospital->hospital_id),
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