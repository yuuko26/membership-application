<style>
    .swal2-container .swal2-select{
        display: none !important;
    }
</style>

@if(session('success'))
    <script>
        $(function () {
            Swal.fire({
                title: '{{__('messages.success')}}',
                text: "{{ session('success') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 3000,
                heightAuto: false
            });
        })
    </script>
@endif

@if(session('success_notext'))
    <script>
        $(function () {
            Swal.fire({
                title: "{{ session('success_notext') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 3000,
                heightAuto: false
            });
        })
    </script>
@endif

@if(session('error'))
    <script>
        $(function () {
            Swal.fire({
                title: '{{__('messages.fail')}}',
                text: "{{ session('error') }}",
                icon: "error",
                showConfirmButton: false,
                timer: 3000,
                heightAuto: false
            });
        })
    </script>
@endif

@if(session('warning'))
    <script>
        $(function () {
            Swal.fire({
                title: '{{__('messages.fail')}}',
                text: '{{ session('warning') }}',
                icon: "warning",
                type: 'warning',
                showConfirmButton: false,
                timer: 3000,
                heightAuto: false
            });
        })
    </script>
@endif

@if(session('info'))
    <script>
        $(function () {
            Swal.fire({
                title: '{{__('messages.fail')}}',
                text: '{{ session('info') }}',
                icon: "info",
                type: 'info',
                showConfirmButton: false,
                timer: 3000,
                heightAuto: false
            });
        })
    </script>
@endif
