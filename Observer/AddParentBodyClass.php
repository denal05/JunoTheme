<?php

declare(strict_types=1);

namespace Denal05\JunoTheme\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use \Magento\Framework\View\Page\Config as PageConfig;

class AddParentBodyClass implements ObserverInterface
{
    public function __construct(
        private readonly PageConfig $config
    ) {}

    public function execute(Observer $observer)
    {
        $config = $this->config;

        dd($config->getPageLayout());
    }
}
