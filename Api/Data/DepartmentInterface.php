<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Api\Data;

/**
 * Department Interface
 */
interface DepartmentInterface
{
    /**
     * Department Id Field Name
     */       
    const DEPARTMENT_ID = 'department_id';
    
    /**
     * Name Field Name
     */     
    const NAME = 'name';
    
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
     * Position Field Name
     */     
    const POSITION = 'position';
    
    /**
     * Is Active Field Name
     */    
    const IS_ACTIVE = 'is_active';

    /**
     * Retrieve Department Id
     *
     * @api
     * @return int|null
     */
    public function getId();

    /**
     * Set Department Id
     *
     * @api
     * @param int $Id
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setId($Id);

    /**
     * Retrieve Department Name
     *
     * @api
     * @return string|null
     */
    public function getName();

    /**
     * Set Department Name
     *
     * @api
     * @param string $name
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setName($name);
    
    /**
     * Retrieve Department Url Key
     *
     * @api
     * @return string|null
     */
    public function getUrlKey();    
    
    /**
     * Set Department Url Key
     *
     * @api
     * @param string $urlKey
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setUrlKey($urlKey);

    /**
     * Retrieve Department Meta Title
     *
     * @api
     * @return string|null
     */
    public function getMetaTitle();

    /**
     * Set Department Meta Title
     *
     * @api
     * @param string $metaTitle
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setMetaTitle($metaTitle);

    /**
     * Retrieve Department Meta Keywords
     *
     * @api
     * @return string|null
     */
    public function getMetaKeywords();

    /**
     * Set Department Meta Keywords
     *
     * @api
     * @param string $metaKeywords
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setMetaKeywords($metaKeywords);
    
    /**
     * Retrieve Department Meta Description
     *
     * @api
     * @return string|null
     */
    public function getMetaDescription();

    /**
     * Set Department Meta Description
     *
     * @api
     * @param string $metaDescription
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setMetaDescription($metaDescription);    

    /**
     * Retrieve Department Page Layout
     *
     * @api
     * @return string|null
     */
    public function getPageLayout();

    /**
     * Set Department Page Layout
     *
     * @api
     * @param string $pageLayout
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setPageLayout($pageLayout);
    
    /**
     * Retrieve Department Layout Update Xml
     *
     * @api
     * @return string|null
     */
    public function getLayoutUpdateXml();

    /**
     * Set Department Layout Update Xml
     *
     * @api
     * @param string $layoutUpdateXml
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setLayoutUpdateXml($layoutUpdateXml);

    /**
     * Retrieve Department Custom Theme From
     *
     * @api
     * @return string|null
     */
    public function getCustomThemeFrom();

    /**
     * Set Department Custom Theme From
     *
     * @api
     * @param string $customThemeFrom
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setCustomThemeFrom($customThemeFrom);

    /**
     * Retrieve Department Custom Theme To
     *
     * @api
     * @return string|null
     */
    public function getCustomThemeTo();

    /**
     * Set Department Custom Theme To
     *
     * @api
     * @param string $customThemeTo
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setCustomThemeTo($customThemeTo);

    /**
     * Retrieve Department Custom Theme
     *
     * @api
     * @return string|null
     */
    public function getCustomTheme();

    /**
     * Set Department Custom Theme
     *
     * @api
     * @param string $customTheme
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setCustomTheme($customTheme);

    /**
     * Retrieve Department Custom Page Layout
     *
     * @api
     * @return string|null
     */
    public function getCustomPageLayout();

    /**
     * Set Department Custom Page Layout
     *
     * @api
     * @param string $customPageLayout
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setCustomPageLayout($customPageLayout);

    /**
     * Retrieve Department Custom Layout Update Xml
     *
     * @api
     * @return string|null
     */
    public function getCustomLayoutUpdateXml();

    /**
     * Set Department Custom Layout Update Xml
     *
     * @api
     * @param string $customLayoutUpdateXml
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setCustomLayoutUpdateXml($customLayoutUpdateXml);

    /**
     * Retrieve Department Position
     *
     * @api
     * @return int|null
     */
    public function getPosition();

    /**
     * Set Department Position
     *
     * @api
     * @param int $position
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setPosition($position);
	
    /**
     * Is Active
     *
     * @return bool
     */
    public function isActive();
	
    /**
     * Set Is Active
     *
     * @param int|bool $isActive
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     */
    public function setIsActive($isActive);	
}
