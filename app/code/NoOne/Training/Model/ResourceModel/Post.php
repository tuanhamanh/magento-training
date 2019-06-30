<?php
/**
 * Created by PhpStorm.
 * User: tuanha
 * Date: 6/30/19
 * Time: 11:24 PM
 */

namespace NoOne\Training\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mageplaza_blog_post', 'post_id');
    }
}