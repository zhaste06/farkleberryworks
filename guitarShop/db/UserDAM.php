<?php
class UserDAM extends DAM {
    
    function __construct() {
        parent::__construct();
    }
    
    public function readUser($email){
        $query = 'SELECT * FROM users WHERE email = :email';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $userDB = $statement->fetch();
        if ($userDB == null){
            return null;
        }
        else {
            return new User($this->mapUserColsToVars($userDB));
        }
    }
    
    private function mapUserColsToVars($colArray){
        $varArray = array();
        foreach($colArray as $key=>$value){
            if ($key == 'firstname'){
                $varArray['firstName'] = $value;
            }
            else if ($key == 'lastname'){
                $varArray['lastName'] = $value;
            }
            else if ($key == 'email'){
                $varArray['email'] = $value;
            }
            else if ($key == 'phone'){
                $varArray['phone'] = $value;
            }
            else if ($key == 'address'){
                $varArray['address'] = $value;
            }
            else if ($key == 'city'){
                $varArray['city'] = $value;
            }
            else if ($key == 'zip'){
                $varArray['zip'] = $value;
            }
            else if ($key == 'country'){
                $varArray['country'] = $value;
            }
            else if ($key == 'state'){
                $varArray['state'] = $value;
            }
        }return $varArray;
    }
}