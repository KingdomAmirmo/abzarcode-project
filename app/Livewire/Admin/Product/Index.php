<?php

namespace App\Livewire\Admin\Product;

use App\Http\Requests\Admin\Product\ProductUpdateRequest;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Http\Requests\Admin\Product\ProductStoreRequest;

class Index extends Component
{
    #[Title('مدیریت محصولات')]

    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('livewire.admin.product.create', compact('productCategories'));
    }
    public function store(ProductStoreRequest $request)
    {
        $inputs = $request->all();
        //for set tags input
        $inputs['tags'] = $inputs['tags_product'];
        $file = $inputs['image'];
        $directory = date('Ymd');
        $fileName = date('His') . "." . $file->getClientOriginalExtension();
        $result = $file->move('images' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . $directory, $fileName);
        $inputs['image'] = 'images'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $fileName;
        $product = Product::create($inputs);
        return to_route('admin.product.index')->with('swal-success', "محصول شما با موفقیت ثبت شد");
    }

    public function edit(Product $product)
    {
        $productCategories = ProductCategory::all();
        return view('livewire.admin.product.edit', compact('product', 'productCategories'));
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (unlink(public_path($product->image))) {
                $file = $inputs['image'];
                $directory = date('Ymd');
                $fileName = date('His') . "." . $file->getClientOriginalExtension();
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . $directory, $fileName);
                $inputs['image'] = 'images'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $fileName;
            }
            else {
                return to_route('admin.product.index')->with('swal-error', "آپلود تصویر با خطا مواجه شد");

            }

        }
        else {
            $inputs['image'] = $product->image;
        }
        $product->update($inputs);
        return to_route('admin.product.index')->with('swal-success', "محصول شما با موفقیت ویرایش شد");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('admin.product.index')->with('swal-success', "محصول با موفقیت حذف شد");

    }

    public function render()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.product.index', compact('products'));
    }
}
