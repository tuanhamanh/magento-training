<?php
/**
 * Created by PhpStorm.
 * User: tuanha
 * Date: 6/30/19
 * Time: 11:08 PM
 */

namespace NoOne\Training\Model;

use Magento\Framework\Model\AbstractModel;
use NoOne\Training\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends AbstractModel implements PostInterface, IdentityInterface
{

    const CACHE_TAG = 'blog_post';

    protected function _construct()
    {
        $this->_init(\NoOne\Training\Model\ResourceModel\Post::class);
    }

    /**
     * Get identities
     *
     * @return []
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId(), self::CACHE_TAG . '_' . $this->getIdentifier()];
    }

    /**
     * get indentifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getData(self::IDENTIFIER);
    }
}