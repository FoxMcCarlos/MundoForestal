<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scientificname $scientificname
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scientificname'), ['action' => 'edit', $scientificname->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scientificname'), ['action' => 'delete', $scientificname->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $scientificname->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scientificnames'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scientificname'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scientificnames view large-9 medium-8 columns content">
    <h3><?= h($scientificname->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($scientificname->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($scientificname->Id) ?></td>
        </tr>
    </table>
</div>
