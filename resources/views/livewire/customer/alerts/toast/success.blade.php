@if(session('toast-success'))

{{--    <section class="toast" data-delay="5000">--}}

{{--        <section class="toast-body py-3 d-flex bg-success text-white">--}}
{{--            <strong class="ml-auto">{{ session('toast-success') }}</strong>--}}
{{--            <button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--              </button>--}}
{{--        </section>--}}
{{--    </section>--}}

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small class="text-muted">11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>

        <script>
            // $(document).ready(function () {
                $('.toast').toast('show');
            // })
        </script>


@endif
