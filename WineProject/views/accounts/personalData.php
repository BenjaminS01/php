<h1>your personal data</h1>

<?php

if(isset($_GET['j'])||isset($_POST['submitEdit'])){
    include_once __DIR__.'/personalDataEdit.php';
}
else{

 include_once __DIR__.'/personalDataNoEdit.php';
}

if(isset($_POST['firstName'])
 &&isset($_POST['lastName'])
 &&isset($_POST['email'])
 &&isset($_POST['phoneNumber'])){
    
    validatePersonalDataChange($this->_params['error']
    , $this->_params['customer'][0]['gender'], $this->_params['customer'][0]['addressID']
    ,$this->_params['customer'][0]['dateOfBirth'],$this->_params['account'][0]['id']
    ,$this->_params['account'][0]['email'],$this->_params['account'][0]['password']);
 }




/*<?php isset($_POST['firstName'])
 ? htmlspecialchars($_POST['firstName']): isset($this->_params['customer'][0]['firstName'])
 ?htmlspecialchars($this->_params['customer'][0]['firstName']):'';?>*/