<?php


class Page{
	
	public static $items = array(
		1  => array('title'=>'Start',  'url'=>'./assets/start.html'),
		2  => array('title'=>'About',  'url'=>'./assets/about.html'),
		3  => array('title'=>'Top List', 'url'=>'./assets/topList.html'),
	);
    
	public static function renderMenu($activeElement) 
    {		
        $html = '';
        
		foreach(self::$items as $key => $value)      
        {
            $html .= '<li class="navigation__menu-item">';
            
			if($key == $activeElement)
			{
				$html .= '<a class="navigation__menu-item-link navigation__menu-item-link_theme_allotted">'."{$value['title']}</a></li>";
			}
			else
			{
				$html .= "<a class='navigation__menu-item-link' href='index.php?page=$key'>{$value['title']}</a></li>";  
			}
		}
        
		$html .= "</ul></nav>";
		return $html;
        
	}
    
//	public static function getPage($pageNumber) {
//		if (!array_key_exists($pageNumber, self::$items)) return file_get_contents("./assets/index.html");
//		else
//		{
//			$my_file = file_get_contents(self::$items[$pageNumber]['url']);
//			return $my_file;
//		}
//	}
    
    public static function getPage($pageNumber){
        
		if (array_key_exists($pageNumber, self::$items)) 
        {
            return file_get_contents(self::$items[$pageNumber]['url']);
        }
        else
        {
            return file_get_contents("./assets/index.html");
        }            
	}
}
