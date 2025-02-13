<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">مدیریت دسته بندی ها</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center justify-content-between mb-2 mb-sm-7">
                <div class="nav gx-4 me-auto flex-nowrap d-flex mb-4 mb-sm-0 order-1 order-sm-2">
                    <a class="btn-sort shadow-sm" href="{{ route('admin.product-category.create') }}">
                        <svg class="icon icon-plus">
                            <use xlink:href="#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body p-0 over-scroll">
                <div class="drafts tab-content">
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel">
                        <div class="row g-0">
                            <div class="sheet-table d-table white-nowrap">
                                <div class="border-bottom d-table-row">
                                    <div class="d-table-cell py-4 px-3">
                                        #
                                    </div>
                                    <div class="d-table-cell pb-4 px-3 caption">تصویر</div>
                                    <div class="d-table-cell pb-4 px-3 caption">نام دسته بندی</div>
                                    <div class="d-table-cell pb-4 px-3 caption">دسته والد</div>
                                    <div class="d-table-cell pb-4 px-3 caption">وضعیت</div>
                                </div>

                             @foreach($categories as $category)
                                    <div
                                        class="border-bottom sheet-row position-relative d-table-row pb-4 mb-4">
                                        <div class="col checkbox-cell sheet-cell d-table-cell py-2 py-md-4 px-3">
                                            {{ $loop->iteration }}
                                        </div>
                                        <div class="col col-md-2 sheet-cell  d-table-cell py-2 py-md-4 px-0 px-md-3 pb-6">
                                            <a class="sheet-table-item d-flex align-items-sm-center">
                                                <div class="flex-shrink-0 align-middle sheet-table-preview md-horizontal-image">
                                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" />
                                                </div>
                                            </a>
                                            <div
                                                class="table-btn-actions position-absolute d-block d-md-none mt-2 mt-md-3">
                                                <div class="action-item">
                                                    <button class="action-head btn-action-small">
                                                        <svg class="icon icon-more-horizontal">
                                                            <use xlink:href="#icon-more-horizontal"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="action-body p-3">
                                                        <button class="action-item">
                                                            <a href="{{ route('admin.product-category.edit', $category) }}" class="text-shades-2">
                                                                <svg class="icon icon-edit">
                                                                    <use xlink:href="#icon-edit"></use>
                                                                </svg>ویرایش عنوان و توضیحات
                                                            </a>
                                                        </button>
                                                        <button class="action-item">
                                                            <a href="#" class="text-shades-2">
                                                                <svg class="icon icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg>Delete
                                                            </a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col col-md-2 d-table-cell align-middle py-2 py-md-4 px-3 px-md-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="text-neutral-4">
                                                        {{ $category->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col col-md-2 d-table-cell align-middle py-2 py-md-4 px-3 px-md-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="text-neutral-4">
                                                        {{ $category->parent->name ?? 'دسته اصلی' }}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="col col-md-4 d-table-cell align-middle py-2 py-md-4 px-3 px-md-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="text-neutral-4">
                                                        @if($category->status == 0)
                                                            <a href="#" class="badge red-light">غیر فعال</a>
                                                        @elseif($category->status == 1)
                                                            <a href="#" class="badge green-light">فعال</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex align-items-center">
                                                    <a href="{{ route('admin.product-category.edit', $category) }}" class="btn btn-primary btn-sm p-2">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>
                                                    </a>
                                                    <form class="d-inline" action="{{ route('admin.product-category.destroy', $category->id) }}" method="post">
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
                                    </div>
                             @endforeach


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
