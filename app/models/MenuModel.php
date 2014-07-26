<?php

class MenuModel {

    private static $menuItems = array(
        array('url' => '/', 'title' => 'Dashboard', 'icon' => 'icon-home'),
        array('url' => 'setting', 'title' => 'Setting', 'icon' => 'icon-home', 'submenu' =>
            array(
                array('url' => 'field-types', 'title' => 'Field Types', 'icon' => 'icon-home'),
                array('url' => 'fields', 'title' => 'Fields', 'icon' => 'icon-home'),
                array('url' => 'field-groups', 'title' => 'Field Groups', 'icon' => 'icon-home'),
                array('url' => 'group-rules', 'title' => 'Group Rules', 'icon' => 'icon-home'),
            )
        ),
    );

    public static function getObjectMenu() {

        $groups = DB::table(DBColumns::getTable('groups'))
                ->select(DBColumns::getTable('groups') . '.tag', DBColumns::getTable('groups') . '.name')
                ->get();

        return $groups;
    }

    private static function generateSubMenu($item,$baseURL,$segmentLevel,&$hasActive = false)
    {
        $subMenuUI = '';
        if (array_key_exists('submenu', $item))
        {
            $subMenuUI = "<ul class='sub-menu'>";
            foreach ($item['submenu']  as $subItem)
            {
                $url = URL::to($baseURL.'/'.$subItem['url']);
                $isActive = '';
                
                if (Request::segment($segmentLevel) != null)
                {
                    $segment = Request::segment($segmentLevel);
                    if ($subItem['url'] == $segment || $subItem['url'].'-add' == $segment || $subItem['url'].'-edit' == $segment)
                    {
                        $isActive = 'class= "active"';
                        $hasActive = true;
                    }
                    
                }
                
                $subItemUI = sprintf('<li %s><a href="%s"><i class="%s"></i> %s</a></li>',
                                        $isActive,$url,$subItem['icon'],$subItem['title']);
                
                $subMenuUI .= $subItemUI;
            }
            $subMenuUI .= "</ul>";
        }
        return $subMenuUI ;        
    }
            
    
    public static function generateMenu() {
        $segmentLevel = 1;        
        $menuUI = '';
        $isFirstItem = true;
        foreach (self::$menuItems as $item)
        {
            $class = '';
            
            if ($isFirstItem)
            {
                $class .= 'first';
                $isFirstItem = false;
            }
            
            $hasChildActive = false;
            $subMenuItem = self::generateSubMenu($item,$item['url'],$segmentLevel+1,$hasChildActive);
            $hasChildClass = '';
            if (array_key_exists('submenu', $item))
            {
                $hasChildClass = $hasChildActive?'<span class="arrow open"></span>':'<span class="arrow"></span>';
            }
            
            
            $isActive = (Request::segment($segmentLevel) == $item['url'] || 
                    Request::segment($segmentLevel) == null && $item['url'] == '/')?'active':'';
            $menuUIItem = sprintf('<li class="%s %s"><a href="%s"><i class="%s"></i> <span class="title">%s</span>%s</a>%s</li>',
                    $class,
                    $isActive,
                    URL::to($item['url']),
                    $item['icon'],
                    $item['title'],
                    $hasChildClass,
                    $subMenuItem
                    );
            
            $menuUI.=$menuUIItem;
        }
        
        //generate menu for object
        $groups = self::getObjectMenu();
        
        foreach ($groups as $g)
        {
            $url = URL::to('tung/'.$g->tag);
            $isActive = false;
            if (Request::segment(1) == 'tung')
            {
                $isActive = Request::segment(2) == $g->tag;
            }
            
            $hasActiveClass = $isActive?'class="active"':'';
            
            $menuUIItem = sprintf('<li %s><a href="%s"><i class="icon-object"></i> <span class="title">%s</span></a></li>',
                    $hasActiveClass,
                    $url,
                    $g->name
                    );
            
            $menuUI .= $menuUIItem;
        }
        
        return $menuUI;
        
    }

}
