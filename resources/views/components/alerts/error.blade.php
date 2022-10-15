<script type="text/javascript">
    @if (session()->has('error'))
    const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            textColor:'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true
        })
        Toast.fire({
            icon:'error',
            text:"{{session('error')}}"
        })
    @endif
</script>