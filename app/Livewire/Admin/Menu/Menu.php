<?php

namespace App\Livewire\Admin\Menu;

use App\Http\Requests\Admin\Menu\MenuRequest;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Menu as MenuModel;

class Menu extends Component
{
    #[Title('منو ها')]

    public function create()
    {
        $parent_menus = MenuModel::all();
        return view('livewire.admin.menu.create', compact('parent_menus'));
    }
    public function store(MenuRequest $request)
    {
        $inputs = $request->all();
        $menu = MenuModel::create($inputs);
        return to_route('admin.menu.index')->with('swal-success', "منو جدید شما با موفقیت ثبت شد");
    }

    public function edit(MenuModel $menu)
    {
        $parent_menus = MenuModel::all()->except($menu->id);
        return view('livewire.admin.menu.edit', compact('menu', 'parent_menus'));
    }

    public function update(MenuRequest $request, MenuModel $menu)
    {
        $inputs = $request->all();
        $menu->update($inputs);
        return to_route('admin.menu.index')->with('swal-success', "منو شما با موفقیت ویرایش شد");
    }

    public function destroy(MenuModel $menu)
    {
        $menu->delete();
        return to_route('admin.menu.index')->with('swal-success', "منو مورد نظر با موفقیت حذف شد");
    }
    public function render()
    {
        $menus = MenuModel::orderBY('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.menu.index', compact('menus'));
    }
}
