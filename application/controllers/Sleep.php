<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Sleep.php
 *
 * ------------------------------------------------------------------------
 */
class Sleep extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */