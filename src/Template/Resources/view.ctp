<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resource'), ['action' => 'edit', $resource->IdResource]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resource'), ['action' => 'delete', $resource->IdResource], ['confirm' => __('Are you sure you want to delete # {0}?', $resource->IdResource)]) ?> </li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resource'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resources view large-9 medium-8 columns content">
    <h3><?= h($resource->IdResource) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resource') ?></th>
            <td><?= h($resource->Resource) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdResource') ?></th>
            <td><?= $this->Number->format($resource->IdResource) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdContent') ?></th>
            <td><?= $this->Number->format($resource->IdContent) ?></td>
        </tr>
    </table>
</div>
