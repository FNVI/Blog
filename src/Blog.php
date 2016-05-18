<?php

namespace FNVi\Blog;
use FNVi\Blog\Collections\BlogPosts;

/**
 * Description of Blog
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Blog {
    
    public $collection;
    
    public function __construct() {
        $this->collection = new BlogPosts();
    }
    
    public function getFeed($blogName = null){
        
    }
    
    
    
}
