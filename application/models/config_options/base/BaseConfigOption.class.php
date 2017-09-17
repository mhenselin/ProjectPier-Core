<?php

  /**
  * BaseConfigOption class
  *
  * @http://www.projectpier.org/
  */
  abstract class BaseConfigOption extends DataObject {
  
    // -------------------------------------------------------
    //  Access methods
    // -------------------------------------------------------
  
    /**
    * Return value of 'id' field
    *
    * @access public
    * @param void
    * @return integer 
    */
    static function getId() {
      return $this->getColumnValue('id');
    } // getId()
    
    /**
    * Set value of 'id' field
    *
    * @access public   
    * @param integer $value
    * @return boolean
    */
    static function setId($value) {
      return $this->setColumnValue('id', $value);
    } // setId() 
    
    /**
    * Return value of 'category_name' field
    *
    * @access public
    * @param void
    * @return string 
    */
    static function getCategoryName() {
      return $this->getColumnValue('category_name');
    } // getCategoryName()
    
    /**
    * Set value of 'category_name' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    static function setCategoryName($value) {
      return $this->setColumnValue('category_name', $value);
    } // setCategoryName() 
    
    /**
    * Return value of 'name' field
    *
    * @access public
    * @param void
    * @return string 
    */
    static function getName() {
      return $this->getColumnValue('name');
    } // getName()
    
    /**
    * Set value of 'name' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    static function setName($value) {
      return $this->setColumnValue('name', $value);
    } // setName() 
    
    /**
    * Return value of 'value' field
    *
    * @access public
    * @param void
    * @return string 
    */
    static function getValue() {
      return $this->getColumnValue('value');
    } // getValue()
    
    /**
    * Set value of 'value' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    static function setValue($value) {
      return $this->setColumnValue('value', $value);
    } // setValue() 
    
    /**
    * Return value of 'config_handler_class' field
    *
    * @access public
    * @param void
    * @return string 
    */
    static function getConfigHandlerClass() {
      return $this->getColumnValue('config_handler_class');
    } // getConfigHandlerClass()
    
    /**
    * Set value of 'config_handler_class' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    static function setConfigHandlerClass($value) {
      return $this->setColumnValue('config_handler_class', $value);
    } // setConfigHandlerClass() 
    
    /**
    * Return value of 'is_system' field
    *
    * @access public
    * @param void
    * @return boolean 
    */
    static function getIsSystem() {
      return $this->getColumnValue('is_system');
    } // getIsSystem()
    
    /**
    * Set value of 'is_system' field
    *
    * @access public   
    * @param boolean $value
    * @return boolean
    */
    static function setIsSystem($value) {
      return $this->setColumnValue('is_system', $value);
    } // setIsSystem() 
    
    /**
    * Return value of 'option_order' field
    *
    * @access public
    * @param void
    * @return integer 
    */
    static function getOptionOrder() {
      return $this->getColumnValue('option_order');
    } // getOptionOrder()
    
    /**
    * Set value of 'option_order' field
    *
    * @access public   
    * @param integer $value
    * @return boolean
    */
    static function setOptionOrder($value) {
      return $this->setColumnValue('option_order', $value);
    } // setOptionOrder() 
    
    /**
    * Return value of 'dev_comment' field
    *
    * @access public
    * @param void
    * @return string 
    */
    static function getDevComment() {
      return $this->getColumnValue('dev_comment');
    } // getDevComment()
    
    /**
    * Set value of 'dev_comment' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    static function setDevComment($value) {
      return $this->setColumnValue('dev_comment', $value);
    } // setDevComment() 
    
    
    /**
    * Return manager instance
    *
    * @access protected
    * @param void
    * @return ConfigOptions 
    */
    static function manager() {
      if (!($this->manager instanceof ConfigOptions)) {
        $this->manager = ConfigOptions::instance();
      }
      return $this->manager;
    } // manager
  
  } // BaseConfigOption 

?>