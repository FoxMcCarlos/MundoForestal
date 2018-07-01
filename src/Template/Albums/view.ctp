<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Album'), ['action' => 'edit', $album->IdAlbum]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Album'), ['action' => 'delete', $album->IdAlbum], ['confirm' => __('Are you sure you want to delete # {0}?', $album->IdAlbum)]) ?> </li>
        <li><?= $this->Html->link(__('List Albums'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Album'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="albums view large-9 medium-8 columns content">
    <h3><?= h($album->IdAlbum) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($album->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAlbum') ?></th>
            <td><?= $this->Number->format($album->IdAlbum) ?></td>
        </tr>
    </table>
</div>
