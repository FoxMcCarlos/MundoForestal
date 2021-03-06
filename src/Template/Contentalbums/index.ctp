<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contentalbum[]|\Cake\Collection\CollectionInterface $contentalbums
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  
    <ul class="side-nav">
      <img src="/img/logoGreen.png" id="logo" >
        <li class="heading" style="color:green;"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contentalbum'), ['action' => 'add']) ?></li>
        <li class="heading" style="color:green; fontsize:18px"><?= __('Other Actions') ?></li>
        <li class="heading" style="color:	#483D8B;"><?= __('Go To:') ?></li>
        <li><a class="nav-link" href="/Resources/index">Resources</a></li>
        <li><a class="nav-link" href="/Contents/index">Contents</a></li>
        <li><a class="nav-link" href="/Botanicalfamilies/index">Botanical Families</a></li>
        <li><a class="nav-link" href="/Categories/index">Categories</a></li>
        <li><a class="nav-link" href="/ScientificFamilies/index">Scientific Families</a></li>
        <li><a class="nav-link" href="/Albums/index">Albums</a></li>
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
                <td><?= $contentalbum->album->Name ?></td>
                <td><?= $contentalbum->content->Name ?></td>
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
