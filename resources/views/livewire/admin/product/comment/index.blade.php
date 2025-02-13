<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">نظرات</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center mb-2 mb-sm-7">
                <div class="title title-color purple me-5 mb-4 mb-sm-0">نظرات محصولات</div>
                <div class="search-input input-group me-sm-5 mb-3 mb-sm-0 order-2 order-sm-1">
                    <button class="input-group-text transparent">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <input class="form-control input-small input-action rounded-2" type="text" placeholder="جستجو نظرات">
                </div>
            </div>
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="sheet-table d-block d-md-table">
{{--                        <div class="border-bottom border-md-none d-table-row">--}}
{{--                            <div class="d-none d-md-table-cell pb-4 px-3 caption">نظرات</div>--}}
{{--                            <div class="d-none d-md-table-cell pb-4 px-3 caption"> محصولات</div>--}}
{{--                        </div>--}}
                        <div class="border-bottom sheet-row comments-block smileys-wrapper position-relative d-block d-md-table-row pb-4 mb-4">

                                <div class="products tab-content">
                                    <div class="tab-pane fade active show" id="tab-products" role="tabpanel">
                                        <div class="row g-0">
                                            <div class="sheet-table d-block d-md-table">
                                                <div class="border-bottom d-none d-md-table-row">
                                                    <div class="d-table-cell pb-4 px-3 caption">#</div>
                                                    <div class="d-table-cell pb-4 px-3 caption">نظر</div>
                                                    <div class="d-table-cell pb-4 px-3 caption">پاسخ به</div>
                                                    <div class="d-table-cell pb-4 px-3 caption">محصول</div>
                                                    <div class="d-table-cell pb-4 px-3 caption">وضعیت تایید نظر</div>
                                                    <div class="d-none d-lg-table-cell pb-4 px-3 caption">تنظیمات</div>
                                                </div>

                                                @foreach($comments as $comment)
                                                    <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-6 mb-4">
                                                        <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                            <div class="badge min green-light">{{ $loop->iteration }}</div>
                                                        </div>
                                                        <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                                                class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                                                data-bs-target="#modal-product">
{{--                                                                @if($comment->user->profile_photo_path)--}}
                                                                    <div class="sheet-table-preview md-horizontal-image flex-shrink-0 ms-5">
                                                                        <img src="{{ asset($comment->user->profile_photo_path ?? "images/unknown_user.jpg") }}" alt="{{ $comment->user->profile_photo_path }}" />
                                                                    </div>
{{--                                                                @endif--}}
                                                                <div class="sheet-table-details">
                                                                    <div class="sheet-table-title mb-2 mb-md-1 ms-8 ms-md-0">{{ \Illuminate\Support\Str::limit($comment->body, 20)  }}</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="badge common ms-3 d-block d-md-none"></div>
                                                                        <div class="caption">{{ $comment->user->id . '-' . $comment->user->fullName ?? '-' }}</div>
                                                                    </div>
                                                                </div>
                                                            </a></div>

                                                        <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">{{ $comment->parent_id ? \Illuminate\Support\Str::limit($comment->parent->body , 20) : '' }}</div>
                                                        <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                            <div class="d-inline-flex">
                                                                <div class="badge common me-1">{{ $comment->commentable->title }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                                            <div class="d-inline-block d-md-none caption">آدرس</div>
                                                            <div class="d-inline-flex align-items-center">
                                                                <div class="badge common ms-2">{{ $comment->approved == 0 ? "درانتظار تایید" : "تایید شده"}}</div>
                                                                <div class="progress">
                                                                    <div class="progress-bar blue" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="sheet-cell d-block d-md-none d-lg-table-cell py-2 py-md-4 px-0 px-md-3">
                                                            <div class="d-inline-flex align-items-center">
                                                                @if($comment->approved == 0)
                                                                    <a href="{{ route('admin.product.comment.approved', $comment) }}" class="btn bg-green btn-sm p-2">
                                                                        <svg class="icon icon-check">
                                                                            <use xlink:href="#icon-check"></use>
                                                                        </svg>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('admin.product.comment.approved', $comment) }}" class="btn bg-red btn-sm p-2">
                                                                        <svg class="icon icon-times">
                                                                            <use xlink:href="#icon-close"></use>
                                                                        </svg>
                                                                    </a>
                                                                @endif
                                                                <a href="{{ route('admin.product.comment.show', $comment) }}" class="btn btn-primary btn-sm p-2 m-lg-1">
                                                                        <i class="fa fa-eye p-1"></i>
                                                                </a>
                                                                <form class="d-inline" action="{{ route('admin.product.comment.destroy', $comment->id) }}" method="post">
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
                                            {{ $comments->links('pagination::bootstrap-5') }}
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


@section('script')
    @include("livewire.admin.alerts.sweetalert.delete-confirm", ['className'=> 'delete'])
@endsection
