<?php

namespace App\Livewire\Admin\ProductCategory;

use App\Http\Requests\Admin\Product\ProductUpdateRequest;
use App\Http\Requests\Admin\ProductCategory\ProductCategoryStoreRequest;
use App\Http\Requests\Admin\ProductCategory\ProductCategoryUpdateRequest;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\ProductCategory as ProductCategoryModel;

class ProductCategory extends Component
{
    #[Title('دسته بندی ها')]

    public function create()
    {
        $productCategories = ProductCategoryModel::all();
        return view('livewire.admin.product-category.create', compact('productCategories'));
    }

    public function store(ProductCategoryStoreRequest $request)
    {
        $inputs = $request->all();
        $file = $inputs['image'];
        $directory = date('Ymd');
        $fileName = date('His') . "." . $file->getClientOriginalExtension();
        $result = $file->move('images' . DIRECTORY_SEPARATOR . 'product-category' . DIRECTORY_SEPARATOR . $directory, $fileName);
        $inputs['image'] = $result->getPathname();
        $product = ProductCategoryModel::create($inputs);
        return to_route('admin.product-category.index')->with('swal-success', "دسته بندی جدید شما با موفقیت ثبت شد");
    }


    public function edit(ProductCategoryModel $productCategory)
    {
        $parent_categories = ProductCategoryModel::all()->except($productCategory->id);
        return view('livewire.admin.product-category.edit', compact('parent_categories', 'productCategory'));
    }

    public function update(ProductCategoryUpdateRequest $request, ProductCategoryModel $productCategory)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (unlink(public_path($productCategory->image))) {
                $file = $inputs['image'];
                $directory = date('Ymd');
                $fileName = date('His') . "." . $file->getClientOriginalExtension();
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'product-category' . DIRECTORY_SEPARATOR . $directory, $fileName);
                $inputs['image'] = $result->getPathname();
            }
            else {
                return to_route('admin.product-category.index')->with('swal-error', "آپلود تصویر با خطا مواجه شد");
            }
        }
        else {
            $inputs['image'] = $productCategory->image;
        }
        $productCategory->update($inputs);
        return to_route('admin.product-category.index')->with('swal-success', "دسته بندی شما با موفقیت ویرایش شد");
    }

    public function destroy(ProductCategoryModel $productCategory)
    {
        $productCategory->delete();
        return to_route('admin.product-category.index')->with('swal-success', "دسته بندی شما با موفقیت حذف شد");
    }
    public function render()
    {
        $categories = ProductCategoryModel::orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.admin.product-category.index', compact('categories'));
    }
}
