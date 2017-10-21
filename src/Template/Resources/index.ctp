<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource[]|\Cake\Collection\CollectionInterface $resources
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resource'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resources index large-9 medium-8 columns content">
    <h3><?= __('Resources') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IdResource') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IdContent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Resource') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resources as $resource): ?>
            <tr>
                <td><?= $this->Number->format($resource->IdResource) ?></td>
                <td><?= $this->Number->format($resource->IdContent) ?></td>
                <td><?= h($resource->Resource) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resource->IdResource]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resource->IdResource]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resource->IdResource], ['confirm' => __('Are you sure you want to delete # {0}?', $resource->IdResource)]) ?>
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
