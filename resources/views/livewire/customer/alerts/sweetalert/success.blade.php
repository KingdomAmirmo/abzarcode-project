@if(session('swal-success'))

    <script>
        // $(document).ready(function (){
            Swal.fire({
                title: '<h3>عملیات با موفقیت انجام شد</h3>',
                 text: '{{ session('swal-success')  }}',
                 icon: 'success',
                 confirmButtonText: 'باشه',
            });
        // });
    </script>

@endif
