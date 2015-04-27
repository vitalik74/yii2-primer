<?php
use vitalik74\primer\Blankslate;

?>
<div class="site-blankslate">
    <?= Blankslate::blankslate('Text', ['id' => 'blankslate']) ?>
    <?= Blankslate::blankslate('Text', ['id' => 'spacious'], 'spacious') ?>
    <?= Blankslate::blankslate('Text', ['id' => 'clean'], 'clean') ?>
    <?= Blankslate::blankslate('Text', ['id' => 'capped'], 'capped') ?>
    <?= Blankslate::blankslate('Text', ['id' => 'fixed'], 'fixed') ?>
    <?= Blankslate::blankslate('Text', ['id' => 'no_set'], 'no_set') ?>
    <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons']) ?>
    <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_commit'], ['commit']) ?>
    <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_branch'], ['branch']) ?>
    <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_tag'], ['tag']) ?>
</div>