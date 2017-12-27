<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Plugin\Sitemap\Model;

/**
 * Sitemap Plugin
 */
class Sitemap
{
    /**
     * Collect All Sitemap Items
     * 
     * @param Subject $subject	 
     * @param string $result
     * @return void
     */
    public function afterCollectSitemapItems(Subject $subject, $result)
    {
        $storeId = $subject->getStoreId();
        
        
        
        return $result;
    }
}
