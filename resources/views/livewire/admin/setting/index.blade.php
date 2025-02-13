<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">تنظیمات وبسایت</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-body p-0">
                <div class="drafts tab-content">


                    <div class="products tab-content">
                        <div class="tab-pane fade active show" id="tab-products" role="tabpanel">
                            <div class="row g-0">
                                <div class="sheet-table d-block d-md-table">
                                    <div class="border-bottom d-none d-md-table-row">
                                        <div class="d-table-cell pb-4 px-3 caption">#</div>
                                        <div class="d-table-cell pb-4 px-3 caption">لوگو</div>
                                        <div class="d-table-cell pb-4 px-3 caption">وضعیت</div>
                                        <div class="d-table-cell pb-4 px-3 caption">کلمات کلیدی</div>
                                        <div class="d-table-cell pb-4 px-3 caption">توضیحات</div>
                                        <div class="d-table-cell pb-4 px-3 caption">آیکون</div>
                                        <div class="d-none d-lg-table-cell pb-4 px-3 caption">تنظیمات</div>
                                    </div>

                                        <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-6 mb-4">
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="badge min green-light">1</div>
                                            </div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                                    class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                                    data-bs-target="#modal-product">
                                                    <div class="sheet-table-preview md-horizontal-image flex-shrink-0 ms-5"><img
                                                            src="{{ asset($setting->logo) }}" alt="{{ $setting->logo }}" /></div>
                                                    <div class="sheet-table-details">
                                                        <div class="sheet-table-title mb-2 mb-md-1 ms-8 ms-md-0">{{ $setting->title }}</div>
                                                    </div>
                                                </a></div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-block d-md-none caption">وضعیت</div>
                                                <div class="badge min green-light">{{ $setting->status == 0 ? "غیرفعال" : "فعال" }}</div>
                                            </div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-flex">
                                                    <div class="badge common me-1">{{ \Illuminate\Support\Str::limit($setting->keywords, 20) }}</div>
                                                </div>
                                            </div>                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-flex">
                                                    <div class="badge common me-1">{{ \Illuminate\Support\Str::limit($setting->description, 20) }}</div>
                                                </div>
                                            </div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-block d-md-none caption">آدرس</div>
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="badge common ms-2">
                                                        <img src="{{ asset($setting->icon) }}" alt="{{ $setting->icon }}" width="85">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sheet-cell d-block d-md-none d-lg-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-flex align-items-center">
                                                    <a href="{{ route('admin.setting.edit', $setting) }}" class="btn btn-primary btn-sm p-2">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
