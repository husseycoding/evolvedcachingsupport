<?php
class HusseyCoding_EvolvedCachingSupport_Model_Observer
{
    /**
     * Observer method allowing you to alter the header welcome message HTML elements and text
     */
    public function frontendEvolvedCachingBlockWelcomeRender($observer)
    {
        $renderdata = $observer->getRenderData();
        $complete = $renderdata->getComplete(); // the complete string for reference, changes ignored
        $before = $renderdata->getBefore(); // current welcome message opening HTML elements
        //$renderdata->setBefore(''); // alter welcome message opening HTML elements
        $middle = $renderdata->getMiddle(); // current welcome message text
        //$renderdata->setMiddle(''); // alter welcome message text
        $after = $renderdata->getAfter(); // current welcome message closing HTML elements
        //$renderdata->setAfter(''); // alter welcome message closing HTML elements
    }
    
    /**
     * Observer method allowing you to alter the product listing list mode add to cart button HTML elements and text
     */
    public function frontendEvolvedCachingBlockProductListListCartRender($observer)
    {
        $renderdata = $observer->getRenderData();
        $complete = $renderdata->getComplete(); // the complete string for reference, changes ignored
        $before = $renderdata->getBefore(); // current list mode add to cart button  opening HTML elements
        //$renderdata->setBefore(''); // alter list mode add to cart button opening HTML elements
        $middle = $renderdata->getMiddle(); // current list mode add to cart button text
        //$renderdata->setMiddle(''); // alter list mode add to cart button text
        $after = $renderdata->getAfter(); // current list mode add to cart button closing HTML elements
        //$renderdata->setAfter(''); // alter list mode add to cart button closing HTML elements
    }
    
    /**
     * Observer method allowing you to alter the product listing grid mode add to cart button HTML elements and text
     */
    public function frontendEvolvedCachingBlockProductListGridCartRender($observer)
    {
        $renderdata = $observer->getRenderData();
        $complete = $renderdata->getComplete(); // the complete string for reference, changes ignored
        $before = $renderdata->getBefore(); // current grid mode add to cart button opening HTML elements
        //$renderdata->setBefore(''); // alter grid mode add to cart button opening HTML elements
        $middle = $renderdata->getMiddle(); // current grid mode add to cart button text
        //$renderdata->setMiddle(''); // alter grid mode add to cart button text
        $after = $renderdata->getAfter(); // current grid mode add to cart button closing HTML elements
        //$renderdata->setAfter(''); // alter grid mode add to cart button closing HTML elements
    }
    
    /**
     * Observer method allowing you to alter the product listing out of stock HTML elements and text
     */
    public function frontendEvolvedCachingBlockProductListOutofstockCartRender($observer)
    {
        $renderdata = $observer->getRenderData();
        $complete = $renderdata->getComplete(); // the complete string for reference, changes ignored
        $before = $renderdata->getBefore(); // current out of stock opening HTML elements
        //$renderdata->setBefore(''); // alter out of stock opening HTML elements
        $middle = $renderdata->getMiddle(); // current out of stock text
        //$renderdata->setMiddle(''); // alter out of stock text
        $after = $renderdata->getAfter(); // current out of stock closing HTML elements
        //$renderdata->setAfter(''); // alter out of stock closing HTML elements
    }
    
    /**
     * Observer method allowing you to alter the regex used to match the header welcome message HTML
     */
    public function frontendEvolvedCachingBlockWelcomeRegex($observer)
    {
        $regex = $observer->getRegex();
        $pattern = $regex->getPattern(); // current regex used to match the header welcome message HTML
        //$regex->setPattern(''); // alter regex used to match the header welcome message HTML
    }
    
    /**
     * Observer method allowing you to alter the regex used to match the product listing list mode add to cart button HTML
     */
    public function frontendEvolvedCachingBlockProductListListCartRegex($observer)
    {
        $regex = $observer->getRegex();
        $pattern = $regex->getPattern(); // current regex used to match the product listing list mode add to cart button HTML
        //$regex->setPattern(''); // alter regex used to match the product listing list mode add to cart button HTML
    }
    
    /**
     * Observer method allowing you to alter the regex used to match the product listing grid mode add to cart button HTML
     */
    public function frontendEvolvedCachingBlockProductListGridCartRegex($observer)
    {
        $regex = $observer->getRegex();
        $pattern = $regex->getPattern(); // current regex used to match the product listing grid mode add to cart button HTML
        //$regex->setPattern(''); // alter regex used to match the product listing grid mode add to cart button HTML
    }
    
    /**
     * Observer method allowing you to alter the regex used to match the product page tier pricing HTML
     */
    public function frontendEvolvedCachingBlockProductInfoTierRegex($observer)
    {
        $regex = $observer->getRegex();
        $pattern = $regex->getPattern(); // current regex used to match the product page tier pricing HTML
        //$regex->setPattern(''); // alter regex used to match the product listing page tier pricing HTML
    }
}