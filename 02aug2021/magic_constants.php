<?php
//__NAMESPACE__
namespace UserModel {
    class User {
        public function __construct() {
            echo 'I am in '.__CLASS__.'</br>';
        }
        public function showData() {
            echo 'I am in '.__METHOD__.'</br>';
        }
    }
   
    $obj = new User;
    $obj->showData();
    echo __NAMESPACE__;
    echo "<br>";
    echo User::class;  
    echo "<br>";
 
//__LINE__
    echo "You are at line number " . __LINE__ . "<br><br>";  
//__FILE__
    echo __FILE__ . "<br><br>";  
//__DIR__
    echo __DIR__ . "<br><br>";    
    echo dirname(__FILE__) . "<br><br>";  
//__FUNCTION__
    function test(){   
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();    
      
    function test_function(){    
        echo 'Hello';    
    }    
    test_function();     
    echo  __FUNCTION__ . "<br><br>";  
//__CLASS__
    class base  
    {    
    function test_first(){    
            echo __CLASS__;   
            echo "<br><br>";
        }    
    } 
    $t = new base;    
    $t->test_first(); 
//__TRAIT__    
    trait created_trait {    
        function test(){      
            echo __TRAIT__;  
            echo "<br><br>";
        }    
    }    
    class Company {    
        use created_trait;    
        }    
    $a = new Company;    
    $a->test();   
//__METHOD__    
    class method {    
        public function __construct() {    
      
                echo __METHOD__ . "<br><br>";   
            }    
        public function meth_fun(){    
         
                echo __METHOD__;   
        }    
    }    
    $a = new method;    
    $a->meth_fun();
}
?>
