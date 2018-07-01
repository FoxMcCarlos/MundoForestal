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
    <h3> Información del contenido </h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($content->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ScientificName') ?></th>
            <td><?php  if ($content->ScientificName == ""){
                echo "No tiene";
            }else {
              echo  $content->ScientificName ;
            }

             ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Content') ?></th>
            <td><?= $this->Number->format($content->IdContent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $content->category->Description?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Botanical Family') ?></th>
            <td><?php  if ($content->IdBotanicalFamily == 0){
                echo "No tiene";
            }else {
              echo  $content->botanicalfamily->Description ;
            }

             ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($content->Description)); ?>
    </div>
</div>
