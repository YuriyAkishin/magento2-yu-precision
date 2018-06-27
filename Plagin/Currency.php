<?php
/**
 *
 * @author Yu
 */
namespace Yu\Precision\Plagin;

class Currency 
{
    
    /**
     * Format price value
     * 
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $subject
     * @param \Closure $proceed
     * @param float $amount
     * @param bool $includeContainer
     * @param int $precision
     * @param null|string|bool|int|\Magento\Framework\App\ScopeInterface $scope
     * @param \Magento\Framework\Model\AbstractModel|string|null $currency
     * @return float
     */
    public function aroundFormat(
            \Magento\Framework\Pricing\PriceCurrencyInterface $subject,
            \Closure $proceed,
            $amount,
            $includeContainer = true,
            $precision = 0,
            $scope = null,
            $currency = null
    )
    {
        return $proceed($amount,$includeContainer,0,$scope,$currency);
    }
}