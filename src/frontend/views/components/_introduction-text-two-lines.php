<?php
use mobilejazz\yii2\cms\common\models\Components;
use mobilejazz\yii2\cms\common\models\ContentComponent;
use mobilejazz\yii2\cms\common\models\Fields;

/**
 * @var yii\web\View     $this
 * @var int              $size
 * @var ContentComponent $component
 */

$fields = Components::getFieldsFromComponentAsArray($component);
?>
<!-- FIXME : Is there any difference between this component and _introduction-text ?
 -->
<div class="introduction-text">
    <div class="row">
        <div class="small-12 columns">
            <h1 class="<?= isset($fields[ Fields::FIELD_CMS_COLOR_PALETTE_TEXT ]) ? $fields[ Fields::FIELD_CMS_COLOR_PALETTE_TEXT ] : '' ?>"><?php echo $fields[ Fields::FIELD_TITLE_BOLD ]; ?> <br><span
                    class="text-light"><?php echo $fields[ Fields::FIELD_TITLE_NON_BOLD ]; ?></span></h1>
        </div>
        
        <div class="small-12 columns">
            <?php echo $fields[ Fields::FIELD_TEXT_AREA ]; ?>
        </div>
    </div>
</div>