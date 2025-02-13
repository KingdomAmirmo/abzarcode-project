<?php

namespace App\Livewire\Admin\Setting;

use App\Http\Requests\Admin\Setting\SettingRequest;
use Database\Seeders\SettingSeeder;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Setting as SettingModel;


class Setting extends Component
{
    #[Title('تنظیمات')]

    public function edit(SettingModel $setting)
    {
        return view('livewire.admin.setting.edit', compact('setting'));
    }

    public function update(SettingRequest $request, SettingModel $setting)
    {
        $inputs = $request->all();
        if ($request->hasFile('logo')) {
            if (unlink(public_path($setting->logo))) {
                $file = $inputs['logo'];
                $directory = date('Ymd');
                $fileName = date('His') . "." . $file->getClientOriginalExtension();
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'setting', 'logo.' . $file->getClientOriginalExtension());
                $inputs['logo'] = $result->getPathname();
            }
            else {
                return to_route('admin.setting.index')->with('swal-error', "آپلود تصویر با خطا مواجه شد");
            }
        }
        else {
            $inputs['logo'] = $setting->logo;
        }

        if ($request->hasFile('icon')) {
            if (unlink(public_path($setting->icon))) {
                $file = $inputs['icon'];
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'setting', 'icon.' . $file->getClientOriginalExtension());
                $inputs['icon'] = $result->getPathname();
            }
            else {
                return to_route('admin.setting.index')->with('swal-error', "آپلود تصویر با خطا مواجه شد");
            }
        }
        else {
            $inputs['icon'] = $setting->icon;
        }


        $setting->update($inputs);
        return to_route('admin.setting.index')->with('swal-success', "تنظیمات سایت با موفقیت ویرایش شد");
    }
    public function render()
    {
        $setting = SettingModel::first();
        if ($setting === null) {
            $default = new SettingSeeder();
            $default->run();
            $setting =  Setting::first();
        }
        return view('livewire.admin.setting.index', compact('setting'));
    }
}
