<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cover $cover
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cover'), ['action' => 'edit', $cover->idCover]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cover'), ['action' => 'delete', $cover->idCover], ['confirm' => __('Are you sure you want to delete # {0}?', $cover->idCover)]) ?> </li>
        <li><?= $this->Html->link(__('List Covers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cover'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="covers view large-9 medium-8 columns content">
    <h3><?= h($cover->idCover) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cover') ?></th>
            <td><?= h($cover->Cover) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCover') ?></th>
            <td><?= $this->Number->format($cover->idCover) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAlbum') ?></th>
            <td><?= $this->Number->format($cover->idAlbum) ?></td>
        </tr>
    </table>
</div>
