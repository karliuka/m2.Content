<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\Store\Model\StoreManagerInterface;
use Faonni\Content\Api\Data\PostInterface;

/**
 * Post Model
 */
class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    /**
     * Entity Type Code
     */
    const ENTITY_TYPE = 'content-post';
	
    /**
     * Post Store Id
     */
    const STORE_ID = 'store_id';
	
    /**
     * Cache Tag
     */	
	const CACHE_TAG = 'FAONNI_CONTENT_POST';
	
    /**
     * Post Status Enabled
     */
    const STATUS_ENABLED = 1;
    
    /**
     * Post Status Disabled
     */
    const STATUS_DISABLED = 0;    
	
    /**
     * Prefix Of Model Events Names
     *
     * @var string
     */
    protected $_eventPrefix = 'faonni_content_post';
	
    /**
     * Parameter Name In Event
     * In observe method you can use $observer->getEvent()->getObject() in this case
     *
     * @var string
     */
    protected $_eventObject = 'post';
	
    /**
     * Model Cache Tag For Clear Cache In After Save And After Delete
     * When you use true - all cache will be clean
     *
     * @var string|array|bool
     */
    protected $_cacheTag = self::CACHE_TAG; 
	
    /**
     * Store Manager
     *
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;  
    
    /**
     * Initialize Model
     *
     * @param Context $context
     * @param Registry $registry
     * @param StoreManagerInterface $storeManager	 
     * @param AbstractResource $resource
     * @param AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
		StoreManagerInterface $storeManager,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
		$this->_storeManager = $storeManager;
		
        parent::__construct(
			$context,
			$registry,
			$resource,
			$resourceCollection,
			$data
		);
    }
    
    /**
     * Model Construct That Should Be Used For Object Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();		
        $this->_init('Faonni\Content\Model\ResourceModel\Post');
    }
    
    /**
     * Retrieve Entity Type Code
     *
     * @return string
     */
    public function getEntityType()
    {
        return self::ENTITY_TYPE;
    }
	
    /**
     * Retrieve Post Id
     *
     * @api     
     * @return int|null
     */
    public function getId()
	{
		return $this->getData(self::POST_ID);
	}

    /**
     * Set Post Id
     *
     * @api     
     * @param int $id
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setId($id)
	{
		return $this->setData(self::POST_ID, $id);
	}

    /**
     * Retrieve Post Title
     *
     * @api     
     * @return string|null
     */
    public function getTitle()
	{
		return $this->getData(self::TITLE);
	}

    /**
     * Set Post Title
     *
     * @api     
     * @param string $title
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setTitle($title)
	{
		return $this->setData(self::TITLE, $title);
	}
		
    /**
     * Retrieve Post Description
     *
     * @api     
     * @return string|null
     */
    public function getDescription()
	{
		return $this->getData(self::DESCRIPTION);
	}

    /**
     * Set Post Description
     *
     * @api     
     * @param string $description
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setDescription($description)
	{
		return $this->setData(self::DESCRIPTION, $description);
	}
    
    /**
     * Retrieve Post Url Key
     *
     * @api     
     * @return string|null
     */
    public function getUrlKey()
    {
		return $this->getData(self::URL_KEY);
	}
    
    /**
     * Set Post Url Key
     *
     * @api     
     * @param string $urlKey
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setUrlKey($urlKey)
    {
		return $this->setData(self::URL_KEY, $urlKey);
	}

    /**
     * Retrieve Post Meta Title
     *
     * @api     
     * @return string|null
     */
    public function getMetaTitle()
    {
		return $this->getData(self::META_TITLE);
	}

    /**
     * Set Post Meta Title
     *
     * @api     
     * @param string $metaTitle
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaTitle($metaTitle)
    {
		return $this->setData(self::META_TITLE, $metaTitle);
	}

    /**
     * Retrieve Post Meta Keywords
     *
     * @api     
     * @return string|null
     */
    public function getMetaKeywords()
    {
		return $this->getData(self::META_KEYWORDS);
	}

    /**
     * Set Post Meta Keywords
     *
     * @api     
     * @param string $metaKeywords
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaKeywords($metaKeywords)
    {
		return $this->setData(self::META_KEYWORDS, $metaKeywords);
	}
    
    /**
     * Retrieve Post Meta Description
     *
     * @api     
     * @return string|null
     */
    public function getMetaDescription()
    {
		return $this->getData(self::META_DESCRIPTION);
	}

    /**
     * Set Post Meta Description
     *
     * @api     
     * @param string $metaDescription
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setMetaDescription($metaDescription)
    {
		return $this->setData(self::META_DESCRIPTION, $metaDescription);
	} 

    /**
     * Retrieve Post Page Layout
     *
     * @api     
     * @return string|null
     */
    public function getPageLayout()
    {
		return $this->getData(self::PAGE_LAYOUT);
	}

    /**
     * Set Post Page Layout
     *
     * @api     
     * @param string $pageLayout
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setPageLayout($pageLayout)
    {
		return $this->setData(self::PAGE_LAYOUT, $pageLayout);
	}
    
    /**
     * Retrieve Post Layout Update Xml
     *
     * @api     
     * @return string|null
     */
    public function getLayoutUpdateXml()
    {
		return $this->getData(self::LAYOUT_UPDATE_XML);
	}

    /**
     * Set Post Layout Update Xml
     *
     * @api     
     * @param string $layoutUpdateXml
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setLayoutUpdateXml($layoutUpdateXml)
    {
		return $this->setData(self::LAYOUT_UPDATE_XML, $layoutUpdateXml);
	}

    /**
     * Retrieve Post Custom Theme From
     *
     * @api     
     * @return string|null
     */
    public function getCustomThemeFrom()
    {
		return $this->getData(self::CUSTOM_THEME_FROM);
	}

    /**
     * Set Post Custom Theme From
     *
     * @api     
     * @param string $customThemeFrom
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomThemeFrom($customThemeFrom)
    {
		return $this->setData(self::CUSTOM_THEME_FROM, $customThemeFrom);
	}

    /**
     * Retrieve Post Custom Theme To
     *
     * @api     
     * @return string|null
     */
    public function getCustomThemeTo()
    {
		return $this->getData(self::CUSTOM_THEME_TO);
	}

    /**
     * Set Post Custom Theme To
     *
     * @api     
     * @param string $customThemeTo
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomThemeTo($customThemeTo)
    {
		return $this->setData(self::CUSTOM_THEME_TO, $customThemeTo);
	}

    /**
     * Retrieve Post Custom Theme
     *
     * @api     
     * @return string|null
     */
    public function getCustomTheme()
    {
		return $this->getData(self::CUSTOM_THEME);
	}

    /**
     * Set Post Custom Theme
     *
     * @api     
     * @param string $customTheme
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomTheme($customTheme)
    {
		return $this->setData(self::CUSTOM_THEME, $customTheme);
	}

    /**
     * Retrieve Post Custom Page Layout
     *
     * @api     
     * @return string|null
     */
    public function getCustomPageLayout()
    {
		return $this->getData(self::CUSTOM_PAGE_LAYOUT);
	}

    /**
     * Set Post Custom Page Layout
     *
     * @api     
     * @param string $customPageLayout
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomPageLayout($customPageLayout)
    {
		return $this->setData(self::CUSTOM_PAGE_LAYOUT, $customPageLayout);
	}

    /**
     * Retrieve Post Custom Layout Update Xml
     *
     * @api     
     * @return string|null
     */
    public function getCustomLayoutUpdateXml()
	{
		return $this->getData(self::CUSTOM_LAYOUT_UPDATE_XML);
	}

    /**
     * Set Post Custom Layout Update Xml
     *
     * @api     
     * @param string $image
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setCustomLayoutUpdateXml($customLayoutUpdateXml)
	{
		return $this->setData(self::CUSTOM_LAYOUT_UPDATE_XML, $customLayoutUpdateXml);
	}
	
    /**
     * Is Active
     *
     * @api     
     * @return bool
     */
    public function isActive()
	{
		return (bool)$this->getData(self::IS_ACTIVE);
	}
	
    /**
     * Set Is Active
     *
     * @api     
     * @param int|bool $isActive
     * @return \Faonni\Content\Api\Data\PostInterface
     */
    public function setIsActive($isActive)
	{
		return $this->setData(self::IS_ACTIVE, $isActive);
	}
	
    /**
     * Return Unique Id(S) For Each Object In System
     *
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    
    /**
     * Retrieve Canonical Post Url Path
     *
     * @return string
     */
    public function getCanonicalUrlPath()
    {
        return $this->_helper->getFrontName() . '/post/view/id/' . $this->getId();
    }
	
    /**
     * Retrieve Post Url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->getStore()->getUrl($this->getCanonicalUrlPath());
    }
	
    /**
     * Retrieve Store
     *
     * @return \Magento\Store\Api\Data\StoreInterface
     */
    public function getStore()
    {
        return $this->_storeManager->getStore();
    }
	
    /**
     * Receive Post Store Ids
     *
     * @return int[]
     */
    public function getStores()
    {
        return $this->hasData('stores') 
			? $this->getData('stores') 
			: (array)$this->getData(self::STORE_ID);
    }
}
