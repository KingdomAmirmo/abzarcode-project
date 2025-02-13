<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">سوالات متداول</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center mb-2 mb-sm-7">
                <div class="title title-color purple me-5 mb-4 mb-sm-0">سوالات متداول</div>
                <div class="order- order-md-1 me-auto mb-4 mb-sm-0">
                    <a class="input-group-text p-1" href="{{ route('admin.faq.create') }}">
                        <svg class="icon icon-plus">
                            <use xlink:href="#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="sheet-table d-block d-md-table">
                        <div class="border-bottom border-md-none d-table-row">
                            <div class="checkbox-cell d-none d-md-table-cell py-4 px-3">
                                #
                            </div>
                            <div class="d-none d-md-table-cell pb-4 px-3 fs-5">سوال</div>
                            <div class="d-none d-md-table-cell pb-4 px-3 fs-5">سوال</div>
                            <div class="d-none d-md-table-cell pb-4 px-3 fs-5">وضعیت</div>
                        </div>
                        @foreach($faqs as $faq)
                            <div class="border-bottom sheet-row comments-block smileys-wrapper position-relative d-block d-md-table-row pb-4 mb-4">
                                <div class="col checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                    {{ $loop->iteration }}
                                </div>
                                <div class="col-4 col-md-8 sheet-cell d-table-cell py-2 py-md-4 px-0 px-md-3">
                                    <div class="d-flex">
                                        <div class="me-2 w-100">
                                            <div class="mb-4 fs-7">
                                                {{ $faq->question }}
                                            </div>
                                            <div class="comment-collapse show" id="comment-actions-0">
                                                <div class="table-comment-actions d-flex">
                                                    <a class="table-comment-reply ms-6" href="{{ route('admin.faq.edit', $faq->id) }}">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>
                                                    </a>
                                                    <form class="d-inline" action="{{ route('admin.faq.destroy', $faq->id) }}" method="post">
                                                        @csrf
                                                        {{ method_field('delete') }}
                                                        <button class="ms-6 delete">
                                                            <svg class="icon icon-trash">
                                                                <use xlink:href="#icon-trash"></use>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-4 d-table-cell py-2 py-md-4 px-3">
                                    <a class="sheet-table-item d-flex align-items-sm-center" data-bs-toggle="modal" data-bs-target="#modal-product">
                                        <div class="sheet-table-details">
                                            <div class="caption">{{ $faq->answer }}</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                    <div class="d-inline-block d-md-none caption">وضعیت</div>
                                    <div class="d-inline-flex align-items-center">
                                        <div class="badge common ms-2">{{ $faq->status == 0 ? "غیرفعال" : "فعال"}}</div>
                                        <div class="progress">
                                            <div class="progress-bar @if($faq->status == 0) red @else blue @endif" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="d-flex justify-content-center mt-5">
                    {{ $faqs->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
</div>


@section('script')
    @include("livewire.admin.alerts.sweetalert.delete-confirm", ['className'=> 'delete'])
@endsection
