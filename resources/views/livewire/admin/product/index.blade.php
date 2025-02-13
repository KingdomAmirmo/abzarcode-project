<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">محصولات</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center justify-content-between mb-2 mb-sm-7">
                <div class="title title-color purple me-5 mb-4 mb-sm-0">نمونه کارها</div>
                <div class="search-input input-group me-sm-5 mb-3 mb-sm-0 order-2 order-sm-1">
                    <button class="input-group-text transparent">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <input class="form-control input-small input-action rounded-2" type="text" placeholder="جستجوی محصولات">
                </div>
                <div class="nav row gx-4 me-auto flex-nowrap d-flex mb-4 mb-sm-0 order-1 order-sm-2">
                    <a class="btn-sort col mx-2" href="{{ route('admin.product.create') }}">
                        <svg class="icon icon-plus">
                            <use xlink:href="#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="drafts tab-content">

                    <div class="products tab-content">
                        <div class="tab-pane fade active show" id="tab-products" role="tabpanel">
                            <div class="row g-0">
                                <div class="sheet-table d-block d-md-table">
                                    <div class="border-bottom d-none d-md-table-row">
                                        <div class="d-table-cell pb-4 px-3 caption">#</div>
                                        <div class="d-table-cell pb-4 px-3 caption">محصول</div>
                                        <div class="d-table-cell pb-4 px-3 caption">وضعیت</div>
                                        <div class="d-table-cell pb-4 px-3 caption">تگ</div>
                                        <div class="d-table-cell pb-4 px-3 caption">دسته بندی</div>
                                        <div class="d-table-cell pb-4 px-3 caption">آدرس URL</div>
                                        <div class="d-none d-lg-table-cell pb-4 px-3 caption">تنظیمات</div>
                                    </div>

                                    @foreach($products as $product)
                                        <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-6 mb-4">
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="badge min green-light">{{ $loop->iteration }}</div>
                                            </div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                                    class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                                    data-bs-target="#modal-product">
                                                    <div class="sheet-table-preview md-horizontal-image flex-shrink-0 ms-5"><img
                                                            src="{{ asset($product->image) }}" alt="{{ $product->image }}" /></div>
                                                    <div class="sheet-table-details">
                                                        <div class="sheet-table-title mb-2 mb-md-1 ms-8 ms-md-0">{{ $product->title }}</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="badge common ms-3 d-block d-md-none"></div>
                                                            <div class="caption">قالب آماده</div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-block d-md-none caption">وضعیت</div>
                                                <div class="badge min green-light">{{ $product->status == 0 ? "غیرفعال" : "فعال" }}</div>
                                            </div>
                                            <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">{{ $product->tags ?? "وجود ندارد" }}</div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-flex">
                                                    <div class="badge common me-1">{{ $product->category->name }}</div>
                                                </div>
                                            </div>
                                            <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-block d-md-none caption">آدرس</div>
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="badge common ms-2">{{ $product->url }}</div>
                                                    <div class="progress">
                                                        <div class="progress-bar blue" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sheet-cell d-block d-md-none d-lg-table-cell py-2 py-md-4 px-0 px-md-3">
                                                <div class="d-inline-flex align-items-center">
                                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-primary btn-sm p-2">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>
                                                    </a>
                                                    <form class="d-inline" action="{{ route('admin.product.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        {{ method_field('delete') }}
                                                        <button class="btn bg-red btn-sm p-2 m-lg-1 delete">
                                                            <svg class="icon icon-trash">
                                                                <use xlink:href="#icon-trash"></use>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                {{ $products->links('pagination::bootstrap-5') }}
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    @include("livewire.admin.alerts.sweetalert.delete-confirm", ['className'=> 'delete'])
@endsection
