<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cover[]|\Cake\Collection\CollectionInterface $covers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cover'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="covers index large-9 medium-8 columns content">
    <h3><?= __('Covers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCover') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAlbum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cover') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($covers as $cover): ?>
            <tr>
                <td><?= $this->Number->format($cover->idCover) ?></td>
                <td><?= $this->Number->format($cover->idAlbum) ?></td>
                <td><?= h($cover->Cover) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cover->idCover]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cover->idCover]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cover->idCover], ['confirm' => __('Are you sure you want to delete # {0}?', $cover->idCover)]) ?>
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
