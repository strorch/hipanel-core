<?php
/**
 * HiPanel core package.
 *
 * @link      https://hipanel.com/
 * @package   hipanel-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\grid;

use hipanel\widgets\XEditable;

/**
 * Class XEditableColumn.
 */
class XEditableColumn extends \hiqdev\xeditable\grid\XEditableColumn
{
    public function init()
    {
        parent::init();

        if (!isset($this->widgetOptions['class'])) {
            $this->widgetOptions['class'] = XEditable::class;
        }
    }
}
