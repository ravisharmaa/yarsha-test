<?php

namespace App\Http\Controllers;
use App\Helpers\MenuHierarchy;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    protected $view_path    = 'backend.menu';
    protected $base_route   = 'menu';

    public function index(MenuHierarchy $menuHierarchy)
    {
//        $menus = Menu::all();
//        $menuHierarchy->setMenu($menus);
//        $menuHierarchy->createItemTree();
        $menus = Menu::select('id','title','url')->parent()->with('allChildren')->get();
        return view($this->view_path.'.index',compact('menus'));
    }

    public function create()
    {
        $data = Menu::pluck('title','id');
        return view($this->view_path.'.create',compact('data'));
    }

    public function save(Request $request)
    {
        $data = Menu::create([
            'title'     =>  $request->get('title'),
            'url'       =>  str_slug($request->get('url')),
            'order'     =>  $this->setOrderOnCreate(),
            'type'      =>  $request->get('type'),
            'parent_id' =>  !empty($request->get('parent_id')) ? $request->get('parent_id'): null,
        ]);

        return redirect()->route($this->base_route.'.index');
    }



    protected function setOrderOnCreate()
    {
        $order = Menu::max('order');
        return $order = is_null($order) ? 1 : $order+1;
    }

    public function frontView()
    {
        $menus = Menu::select('id','title','url')->parent()->with('allChildren')->get();
        return view($this->view_path.'.front_view',compact('menus'));
    }
}