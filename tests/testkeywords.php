<?php

namespace wise\src\lib;

require_once '\wise\src\lib\KeywordFactory.php';

 class KeywordFactoryTest extends KeywordFactory
 {
     public function testCheckForFunctioninsertKeyDef()
     {
         $obj = new KeywordFactory();
         $testReturn = $obj->insertKeyDef();
     }
     public function testCheckForFunctionlookupKeyword()
     {
         $obj = new KeywordFactory();
         $testReturn = $obj->lookupKeyword();
     }
 }
