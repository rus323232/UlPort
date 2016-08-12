<?php 

  class Select extends AbstractSelect {}

  	function __construct() {
  		parent::__construct(DataBase::getDBO());
  	}

  }
 ?>