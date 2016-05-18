<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FNVi\Blog\Schemas;
use FNVi\Mongo\Schema;
/**
 * Description of BlogPost
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class BlogPost extends Schema{
    
    public $user;
    public $body;
    public $timestamp;
    public $tags;
    public $type;
    
    public function __construct($user, $body, $type = "text", $tags = []) {
        $this->user = $user;
        $this->body = $body;
        $this->timestamp = $this->timestamp();
        $this->tags = $tags;
        parent::__construct();
    }
}
