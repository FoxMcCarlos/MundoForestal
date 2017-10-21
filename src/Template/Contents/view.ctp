<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->IdContent]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->IdContent], ['confirm' => __('Are you sure you want to delete # {0}?', $content->IdContent)]) ?> </li>
        <li><?= $this->Html->link(__('List Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Content'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contents view large-9 medium-8 columns content">
    <h3><?= h($content->IdContent) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($content->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdContent') ?></th>
            <td><?= $this->Number->format($content->IdContent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCategory') ?></th>
            <td><?= $this->Number->format($content->IdCategory) ?></td>
        </tr>
    </table>
</div>
