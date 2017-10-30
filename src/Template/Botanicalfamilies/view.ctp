<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Botanicalfamily $botanicalfamily
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Botanicalfamily'), ['action' => 'edit', $botanicalfamily->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Botanicalfamily'), ['action' => 'delete', $botanicalfamily->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $botanicalfamily->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Botanicalfamilies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Botanicalfamily'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="botanicalfamilies view large-9 medium-8 columns content">
    <h3><?= h($botanicalfamily->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($botanicalfamily->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($botanicalfamily->Id) ?></td>
        </tr>
    </table>
</div>
