<?php 

   class FrontController extends AbstractController {

   	  protected $meta_key;
   	  protected $meta_desc;
   	  protected $title;
   	  protected $section_id;
   	  protected $mail;
   	  protected $url_active;

   public function __construct() {
   	  parent::__construct(new View(Config::DIR_TMPL));
	  $this->url_active = URLHandler::deleteGET(URLHandler::current(), "page");
   }

   public function action404() {
   	header("HTTP/1.1 404 Not Found");
    header("Status: 404 Not Found");
    $this->title = "Страница не найдена - 404";
    $this->meta_desc = "Запрошенная страница не существует.";
    $this->meta_key = "страница не найдена, страница не существует, 404";

    echo "Страница не найдена, ошибка 404, если вы уверены что страница должна быть обратитесь к администратору";
		
   }

  }

 ?>