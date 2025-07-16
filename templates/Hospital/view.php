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
            <?= $this->Html->link(__('Edit Hospital'), ['action' => 'edit', $hospital->hospital_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hospital'), ['action' => 'delete', $hospital->hospital_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->hospital_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hospital'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hospital'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospital view content">
            <h3><?= h($hospital->hospital_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hospital Id') ?></th>
                    <td><?= $this->Number->format($hospital->hospital_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospital Name') ?></th>
                    <td><?= $this->Number->format($hospital->hospital_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospital Address') ?></th>
                    <td><?= $this->Number->format($hospital->hospital_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospital Contact') ?></th>
                    <td><?= $this->Number->format($hospital->hospital_contact) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Hospital') ?></h4>
                <?php if (!empty($hospital->hospital)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Hospital Id') ?></th>
                            <th><?= __('Hospital Name') ?></th>
                            <th><?= __('Hospital Address') ?></th>
                            <th><?= __('Hospital Contact') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospital->hospital as $hospital) : ?>
                        <tr>
                            <td><?= h($hospital->hospital_id) ?></td>
                            <td><?= h($hospital->hospital_name) ?></td>
                            <td><?= h($hospital->hospital_address) ?></td>
                            <td><?= h($hospital->hospital_contact) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hospital', 'action' => 'view', $hospital->hospital_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hospital', 'action' => 'edit', $hospital->hospital_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Hospital', 'action' => 'delete', $hospital->hospital_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $hospital->hospital_id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>