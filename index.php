<?php

    class User {

        public $username;
        protected $email;
        public $role = 'member';

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function __destruct() {
            echo "the user $this->username was removed". '<br>';
        }

        public function __clone() {
            $this->username = $this->username . '(cloned)<br>';
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        public function message() {
            return "$this->email sent a new message";
        }

        // getters
        public function getEmail() {
            return $this->email;
        }

        // setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    class Admin extends User {

        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function message() {
            return "$this->email, an admin, sent a new message";
        }

    }

    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

    $userOne = new User('mario', 'mario@gmail.com');
    $userTwo = new User('gabriel', 'gabriel@gmail.com');
    $userThree = new Admin('yoshi', 'yoshi@gmail.com', 5);

    //unset($userOne);
    $userFour = clone $userOne;
    echo $userFour->username;


?>

<html lang="en">
<head>
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
