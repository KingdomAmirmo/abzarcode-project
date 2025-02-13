@if(session('swal-error'))

    <script>
        // $(document).ready(function (){
            Swal.fire({
                title: '<h3>خطا</h3>',
                 text: '{{ session('swal-error') }}',
                 icon: 'error',
                 confirmButtonText: 'باشه',
      });
        // });
    </script>

@endif
