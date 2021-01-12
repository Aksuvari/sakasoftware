
<script >
    var options= toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    @if(\Illuminate\Support\Facades\Session::has('Success'))
    toastr.info("{!! \Illuminate\Support\Facades\Session::get('Success') !!}","Başarılı!")
    @elseif(\Illuminate\Support\Facades\Session::has('Info'))
    toastr.info("{!! \Illuminate\Support\Facades\Session::get('Info') !!}","Bilgi!",options)
    @elseif(\Illuminate\Support\Facades\Session::has('Error'))
    toastr.error("{!! \Illuminate\Support\Facades\Session::get('Error') !!}","Hata!",options)
    @elseif(\Illuminate\Support\Facades\Session::has('Warning'))
    toastr.warning("{!! \Illuminate\Support\Facades\Session::get('Warning') !!}","Uyarı!",options)
    @endif

</script>

