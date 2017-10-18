<?php
    $itemType = null;
    if ($record instanceof Item) {
        $itemType = get_current_record('item')->getItemType();
    }
?>
<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
    <div class="element-set">
        <?php if ($showElementSetHeadings): ?>
            <h2><?php echo html_escape(__($setName)); ?></h2>
        <?php endif; ?>
        <?php foreach ($setElements as $elementName => $elementInfo): ?>
            <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
                <h3><?php echo html_escape(__($elementName)); ?></h3>
                <?php if ($setName === 'Dublin Core' && $elementName === 'Type'): ?>
                    <?php $dcTypeShown = true; ?>
                    <?php if ($itemType): ?>
                        <div class="element-text"><?php echo $itemType->name; ?></div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php foreach ($elementInfo['texts'] as $text): ?>
                    <div class="element-text"><?php echo $text; ?></div>
                <?php endforeach; ?>
            </div><!-- end element -->
        <?php endforeach; ?>

        <?php if (!isset($dcTypeShown) && $itemType): ?>
            <div id="<?php echo text_to_id('Dublin Core Type'); ?>" class="element">
                <h3><?php echo __('Type'); ?></h3>
                <div class="element-text"><?php echo $itemType->name; ?></div>
            </div><!-- end element -->
        <?php endif; ?>
    </div><!-- end element-set -->
<?php endforeach; ?>
