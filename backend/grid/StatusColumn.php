<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-21 19:36
 */

namespace backend\grid;

use common\libs\Constants;

/**
 * @inheritdoc
 */
class StatusColumn extends DataColumn
{

    public $attribute = 'status';

    public $headerOptions = ['width' => '25px'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->contentOptions = ['class' => 'align-center'];
        $this->content = function ($model, $key, $index, $gridView) {
            return Constants::getYesNoItems($model->status);
        };
    }
}