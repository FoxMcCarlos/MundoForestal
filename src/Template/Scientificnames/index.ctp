<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scientificname[]|\Cake\Collection\CollectionInterface $scientificnames
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <ul class="side-nav">
        <img src="/img/logoGreen.png" id="logo" >
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Scientificname'), ['action' => 'add']) ?></li>
        <li class="heading" style="color:green; fontsize:18px"><?= __('Other Actions') ?></li>
        <li class="heading" style="color:	#483D8B;"><?= __('Go To:') ?></li>
        <li><a class="nav-link" href="/Resources/index">Resources</a></li>
        <li><a class="nav-link" href="/Contents/index">Contents</a></li>
        <li><a class="nav-link" href="/Botanicalfamilies/index">Botanical Families</a></li>
        <li><a class="nav-link" href="/Categories/index">Categories</a></li>
        <li><a class="nav-link" href="/Contentalbums/index">Content album</a></li>
        <li><a class="nav-link" href="/Albums/index">Albums</a></li>
    </ul>
</nav>
<div class="scientificnames index large-9 medium-8 columns content">
    <h3><?= __('Scientificnames') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scientificnames as $scientificname): ?>
            <tr>
                <td><?= $this->Number->format($scientificname->Id) ?></td>
                <td><?= h($scientificname->Description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scientificname->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scientificname->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scientificname->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $scientificname->Id)]) ?>
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
