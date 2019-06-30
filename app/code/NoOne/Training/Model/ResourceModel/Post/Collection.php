<?php
/**
 * Created by PhpStorm.
 * User: tuanha
 * Date: 6/30/19
 * Time: 11:27 PM
 */

namespace NoOne\Training\Model\ResourceModel\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\NoOne\Training\Model\Podt::class, \NoOne\Training\Model\ResourceModel\Post::class);
    }
}