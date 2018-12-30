<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Botanicalfamily[]|\Cake\Collection\CollectionInterface $botanicalfamilies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <img src="/img/logoGreen.png" id="logo" >
    <ul class="side-nav">
        <li class="heading" style="color:green;"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Botanicalfamily'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="botanicalfamilies index large-9 medium-8 columns content">
    <h3><?= __('Botanicalfamilies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($botanicalfamilies as $botanicalfamily): ?>
            <tr>
                <td><?= $this->Number->format($botanicalfamily->Id) ?></td>
                <td><?= h($botanicalfamily->Description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $botanicalfamily->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $botanicalfamily->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $botanicalfamily->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $botanicalfamily->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
