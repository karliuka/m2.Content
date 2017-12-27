<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Api\Data;

/**
 * Post Interface
 */
interface PostInterface
{
    /**
     * Post Id Field Name
     */       
    const POST_ID = 'post_id';
    
    /**
     * Title Field Name
     */     
    const TITLE = 'title';
    
    /**
     * Url Key Field Name
     */     
    const URL_KEY  = 'url_key';
    
    /**
     * Meta Title Field Name
     */     
    const META_TITLE = 'meta_title';
    
    /**
     * Meta Keywords Field Name
     */      
    const META_KEYWORDS = 'meta_keywords';
    
    /**
     * Meta Description Field Name
     */      
    const META_DESCRIPTION = 'meta_description'; 
    
    /**
     * Page Layout Field Name
     */      
    const PAGE_LAYOUT = 'page_layout';
    
    /**
     * Layout Update Xml Field Name
     */     
    const LAYOUT_UPDATE_XML = 'layout_update_xml'; 
    
    /**
     * Custom Theme From Field Name
     */    
    const CUSTOM_THEME_FROM = 'custom_theme_from';
    
    /**
     * Custom Theme To Field Name
     */    
    const CUSTOM_THEME_TO = 'custom_theme_to'; 
    
    /**
     * Custom Theme Field Name
     */     
    const CUSTOM_THEME = 'custom_theme';
    
    /**
     * Custom Page Layout Field Name
     */      
    const CUSTOM_PAGE_LAYOUT = 'custom_page_layout'; 
    
    /**
     * Custom Layout Update Xml Field Name
     */    
    const CUSTOM_LAYOUT_UPDATE_XML = 'custom_layout_update_xml'; 
    
    /**
     * Is Active Field Name
     */    
    const IS_ACTIVE = 'is_active';

    /**
     * Retrieve Post Id
     *
     * @api
     * @return int|null
     */
    public function getId();

    /**
     * Set Post Id
     *
     * @api
     * @param int $Id
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setId($Id);

    /**
     * Retrieve Post Title
     *
     * @api
     * @return string|null
     */
    public function getTitle();

    /**
     * Set Post Title
     *
     * @api
     * @param string $title
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setTitle($title);
    
    /**
     * Retrieve Post Url Key
     *
     * @api
     * @return string|null
     */
    public function getUrlKey();    
    
    /**
     * Set Post Url Key
     *
     * @api
     * @param string $urlKey
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setUrlKey($urlKey);

    /**
     * Retrieve Post Meta Title
     *
     * @api
     * @return string|null
     */
    public function getMetaTitle();

    /**
     * Set Post Meta Title
     *
     * @api
     * @param string $metaTitle
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaTitle($metaTitle);

    /**
     * Retrieve Post Meta Keywords
     *
     * @api
     * @return string|null
     */
    public function getMetaKeywords();

    /**
     * Set Post Meta Keywords
     *
     * @api
     * @param string $metaKeywords
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaKeywords($metaKeywords);
    
    /**
     * Retrieve Post Meta Description
     *
     * @api
     * @return string|null
     */
    public function getMetaDescription();

    /**
     * Set Post Meta Description
     *
     * @api
     * @param string $metaDescription
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaDescription($metaDescription);    

    /**
     * Retrieve Post Page Layout
     *
     * @api
     * @return string|null
     */
    public function getPageLayout();

    /**
     * Set Post Page Layout
     *
     * @api
     * @param string $pageLayout
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setPageLayout($pageLayout);
    
    /**
     * Retrieve Post Layout Update Xml
     *
     * @api
     * @return string|null
     */
    public function getLayoutUpdateXml();

    /**
     * Set Post Layout Update Xml
     *
     * @api
     * @param string $layoutUpdateXml
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setLayoutUpdateXml($layoutUpdateXml);

    /**
     * Retrieve Post Custom Theme From
     *
     * @api
     * @return string|null
     */
    public function getCustomThemeFrom();

    /**
     * Set Post Custom Theme From
     *
     * @api
     * @param string $customThemeFrom
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomThemeFrom($customThemeFrom);

    /**
     * Retrieve Post Custom Theme To
     *
     * @api
     * @return string|null
     */
    public function getCustomThemeTo();

    /**
     * Set Post Custom Theme To
     *
     * @api
     * @param string $customThemeTo
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomThemeTo($customThemeTo);

    /**
     * Retrieve Post Custom Theme
     *
     * @api
     * @return string|null
     */
    public function getCustomTheme();

    /**
     * Set Post Custom Theme
     *
     * @api
     * @param string $customTheme
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomTheme($customTheme);

    /**
     * Retrieve Post Custom Page Layout
     *
     * @api
     * @return string|null
     */
    public function getCustomPageLayout();

    /**
     * Set Post Custom Page Layout
     *
     * @api
     * @param string $customPageLayout
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomPageLayout($customPageLayout);

    /**
     * Retrieve Post Custom Layout Update Xml
     *
     * @api
     * @return string|null
     */
    public function getCustomLayoutUpdateXml();

    /**
     * Set Post Custom Layout Update Xml
     *
     * @api
     * @param string $customLayoutUpdateXml
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomLayoutUpdateXml($customLayoutUpdateXml);
	
    /**
     * Is Active
     *
     * @api     
     * @return bool
     */
    public function isActive();
	
    /**
     * Set Is Active
     *
     * @api     
     * @param int|bool $isActive
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setIsActive($isActive);	
}
