<?php
namespace MageHelper\LayoutHandler\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $yourConditionHere = "Condition";
        if($yourConditionHere){
            $resultPage->addHandle('layout_handler_one_index');
        }else{
            $resultPage->addHandle('layout_handler_two_index');
        }
        
        $resultPage->getConfig()->getTitle()->prepend(__('MageHelper LayoutHandler Index'));
 
        return $resultPage;
    }
}