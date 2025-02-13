@extends('livewire.admin.layout.master')


@section('content')

    <section class="w-100 p-8">
        <div>
            <div class="border-bottom border-1 border-shades-1 mb-4">
                <h3 class="fs-4 text-center text-shades-1">پاسخ به نظر</h3>
            </div>
            <div class="input-group mb-2 bg-blue text-white p-3 rounded-3">
                <div>
                    <span>نویسنده :</span>
                    <label for="">{{ $comment->user->fullName }}</label>
                </div>
                <div style="margin-right: 2rem;">
                    <span>نظر :</span>
                    <label for="">{{ $comment->body }}</label>
                </div>

                @if($comment->parent_id !== null)
                    <div style="margin-right: 2rem;">
                        <span>پاسخ داده شده به :</span>
                        <label for="">{{ $comment->parent->body }}</label>
                    </div>
                @endif
            </div>
            <a href="{{ route('admin.product.comment.index') }}" class="btn bg-red my-5">بازگشت</a>


            @if($comment->parent_id == null)
                <form action="{{ route('admin.product.comment.answer', $comment->id) }}" class="form-control" method="post">
                @csrf
                <div>پاسخ ادمین :</div>
                <div class="mb-6">
                    <textarea name="body" id="" cols="30" rows="10" class="form-control border-1" placeholder="متن..."></textarea>
                    @error('answer')
                            <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <button type="submit" class="btn w-100 fs-6">
                    ثبت
                </button>
            </form>
            @endif
        </div>
    </section>


@endsection

