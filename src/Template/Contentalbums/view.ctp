<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contentalbum $contentalbum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contentalbum'), ['action' => 'edit', $contentalbum->IdAlbumContent]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contentalbum'), ['action' => 'delete', $contentalbum->IdAlbumContent], ['confirm' => __('Are you sure you want to delete # {0}?', $contentalbum->IdAlbumContent)]) ?> </li>
        <li><?= $this->Html->link(__('List Contentalbums'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contentalbum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contentalbums view large-9 medium-8 columns content">
    <h3><?= h($contentalbum->IdAlbumContent) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdAlbumContent') ?></th>
            <td><?= $this->Number->format($contentalbum->IdAlbumContent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAlbum') ?></th>
            <td><?= $this->Number->format($contentalbum->IdAlbum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdContent') ?></th>
            <td><?= $this->Number->format($contentalbum->IdContent) ?></td>
        </tr>
    </table>
</div>