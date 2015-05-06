<?php

class Explanation {
    private $id;
    private $private;
    private $seller_name;
    private $email;
    private $allow_mails = ' ';
    private $phone;
    private $location_id;
    private $category_id;
    private $title;
    private $description;
    private $price;
    private $time;
    
    public function __construct($exp) {
        if (isset($exp['id'])) {
            $this->id=$exp['id'];
        }
        $this->private = $exp['private'];
        $this->seller_name = $exp['seller_name'];
        $this->email = $exp['email'];
        $this->allow_mails = $exp['allow_mails'];
        $this->phone = $exp['phone'];
        $this->location_id = $exp['location_id'];
        $this->category_id = $exp['category_id'];
        $this->title = $exp['title'];
        $this->description = $exp['description'];
        $this->price = $exp['price'];
        $this->time=$exp['time'];
    }

    public function save() {
        global $mysqli;
        $vars = get_object_vars($this);
        $mysqli->query('REPLACE INTO explanations(?#) VALUES(?a)',  array_keys($vars),  array_values($vars));
    }
    
    public function get() {
        return get_object_vars($this);
    }
}

class CorporateExplanation extends Explanation {
    private $status;
    
    public function __construct($exp) {
        parent::__construct($exp);
//        $this->status = $stat;
    }
    
    public function getStatus() {
        return $this->status;
    }
}