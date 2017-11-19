<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contentalbum[]|\Cake\Collection\CollectionInterface $contentalbums
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contentalbum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contentalbums index large-9 medium-8 columns content">
    <h3><?= __('Contentalbums') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IdAlbumContent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IdAlbum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IdContent') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contentalbums as $contentalbum): ?>
            <tr>
                <td><?= $this->Number->format($contentalbum->IdAlbumContent) ?></td>
                <td><?= $this->Number->format($contentalbum->IdAlbum) ?></td>
                <td><?= $this->Number->format($contentalbum->IdContent) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contentalbum->IdAlbumContent]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contentalbum->IdAlbumContent]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contentalbum->IdAlbumContent], ['confirm' => __('Are you sure you want to delete # {0}?', $contentalbum->IdAlbumContent)]) ?>
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
