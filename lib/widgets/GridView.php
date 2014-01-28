<?php
/**
 *
 * @author Ivo Kund <ivo@opus.ee>
 * @date 24.01.14
 */

namespace opus\ecom\widgets;

/**
 * Base Grid View for lists that deal with ecom elements. Provides default formatter
 *
 * @author Ivo Kund <ivo@opus.ee>
 * @package opus\ecom\widgets
 */
class GridView extends \yii\grid\GridView
{
    /**
     * @inheritdoc
     */
    public $formatter = ['class' => '\opus\ecom\Formatter'];
} 