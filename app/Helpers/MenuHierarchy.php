<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2017
 * Time: 11:25 PM
 */

namespace App\Helpers;


class MenuHierarchy
{
    private $menus;

    public function setMenu($menus)
    {
        return $this->menus = $menus;
    }

    public function createItemTree()
    {
        $result = [];
        foreach ($this->menus as $menu)
        {
                $childMenus = [];
                $childMenus['title']        =   $menu->title;
                $childMenus['parent_id']    =   $menu->parent_id;
                $childMenus['id']           =   $menu->id;
                $childMenus['children']     =   $this->findChildren($menu);
                array_push($result , $childMenus);
        }
        return $result;
    }

    public function getChildren($menu)
    {
        $result = [];
        foreach ($menu as $i)
        {
            if($i->parent_id == $menu->id)
            {
                $result[] = $i;
            }
        }

       return $result;

    }

    public function findChildren($menu)
    {
        dd($menu);
        $result = [];
        $this->getChildren($menu);
    }
}