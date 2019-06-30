<?php
/**
 * Created by PhpStorm.
 * User: tuanha
 * Date: 6/30/19
 * Time: 11:33 PM
 */

namespace NoOne\Training\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use NoOne\Training\Api\Data\PostInterfaceFactory as PostFactory;


class Index extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    protected $postFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        PostFactory $postFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->postFactory       = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $postModel = $this->postFactory->create();
        $post = $postModel->load(1);

        $pageResult = $this->resultPageFactory->create();
        return $pageResult;

    }
}