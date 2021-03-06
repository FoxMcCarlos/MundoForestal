<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album[]|\Cake\Collection\CollectionInterface $albums
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <img src="/img/logoGreen.png" id="logo" >
        <li class="heading" style="color:green;"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Album'), ['action' => 'add']) ?></li>
        <li class="heading" style="color:green; fontsize:18px"><?= __('Other Actions') ?></li>
        <li class="heading" style="color:	#483D8B;"><?= __('Go To:') ?></li>
        <li><a class="nav-link" href="/Resources/index">Resources</a></li>
        <li><a class="nav-link" href="/Contents/index">Contents</a></li>
        <li><a class="nav-link" href="/Botanicalfamilies/index">Botanical Families</a></li>
        <li><a class="nav-link" href="/Categories/index">Categories</a></li>
        <li><a class="nav-link" href="/Contentalbums/index">Content album</a></li>
        <li><a class="nav-link" href="/ScientificFamilies/index">Scientific Families</a></li>

    </ul>
</nav>
<div class="albums index large-9 medium-8 columns content">
    <h3 ><?= __('Albums') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IdAlbum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($albums as $album): ?>
            <tr>
                <td><?= $this->Number->format($album->IdAlbum) ?></td>
                <td><?= h($album->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $album->IdAlbum]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $album->IdAlbum]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $album->IdAlbum], ['confirm' => __('Are you sure you want to delete # {0}?', $album->IdAlbum)]) ?>
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
