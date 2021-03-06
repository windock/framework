<?php

class Article extends Mad_Model_Base
{
    protected $_validity;
    protected $_is_good;

    // relationships and validation
    protected function _initialize()
    {
        $this->belongsTo('User', array('include' => 'Comments'));
        $this->hasMany('Comments');
        $this->hasAndBelongsToMany('Categories');
        $this->hasMany('Tags', array('through' => 'Taggings'));

        $this->hasMany('Fax_Attachments');
        $this->hasMany('Fax_Jobs', array('through' => 'Fax_Attachments'));
        

        // serializable properties
        $this->attrAccessor('validity', 'is_good');
    }

    public function foo()
    {
        return 'test serializer foo';
    }
    
    public function bar()
    {
        return 'test serializer bar';
    }
    
    public function intMethod()
    {
        return 123;
    }

    public function floatMethod()
    {
        return 1.23;
    }

    public function boolMethod()
    {
        return true;
    }
}
