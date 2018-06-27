<?php
/**
 * Description of Amount
 *
 * @author Yu
 */
namespace Yu\Precision\Plagin;

use Magento\Framework\Pricing\PriceCurrencyInterface;

class Amount 
{
    private $priceCurrency;
    
    public function __construct(
        PriceCurrencyInterface $priceCurrency
    ) {
        $this->priceCurrency = $priceCurrency;
    }
    
    public function aroundFormatCurrency(
            \Magento\Framework\Pricing\Render\Amount $subject,
            \Closure $proceed,
            $amount,
            $includeContainer
    )
    {
        return $this->priceCurrency->format($amount, $includeContainer, 0);
    }
}