<?php 

    abstract class AbstractObjectDB {

    	private $id = null;
    	private $properties = array ();
    	private $format_date = "";

    	protected $table_name = "";
    	protected static $db;


    	public function __construct ($table_name, $format_date = "%d.%m.%Y %H:%M:%S") {
    		$this->table_name = $table_name;
            $this->format_date = $format_date; 
    	}

    	public static function setDB ($db) {
    		self::$db = $db;
    	}

    	public function load($id) {
		    $id = (int) $id;
		    if ($id < 0) return false;
		    $select = new Select(self::$db);
		    $select = $select->from($this->table_name, $this->getSelectFields())
			    ->where("`id` = ".self::$db->getSQ(), array($id));
		    $row = self::$db->selectRow($select);
	    }

	    public function isSaved() {
		    return $this->getID() > 0;
	    } 
	
	    public function getID() {
		    return (int) $this->id;
	    }
    }
 ?>