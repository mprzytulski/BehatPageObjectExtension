<?php

namespace SensioLabs\Behat\PageObjectExtension\PageObject;

use Behat\Mink\Session;
use SensioLabs\Behat\PageObjectExtension\Context\PageFactoryInterface;
use SensioLabs\Behat\PageObjectExtension\PageObject\Selector\SelectorFactoryInterface;

class InlineElement extends Element
{
    /**
     * @var array|string $selector
     */
    protected $selector = null;

    /**
     * @param array|string             $selector
     * @param Session                  $session
     * @param PageFactoryInterface     $pageFactory
     * @param SelectorFactoryInterface $selectorFactory
     */
    public function __construct($selector, Session $session, PageFactoryInterface $pageFactory, SelectorFactoryInterface $selectorFactory)
    {
        $this->selector = $selector;

        parent::__construct($session, $pageFactory, $selectorFactory);
    }
}
