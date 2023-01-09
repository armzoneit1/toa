<base href="{{ url('/th') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta charset="utf-8">
<link href="{{asset('backend/dist/images/logo.svg')}}" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="">
<title>Backend System</title>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<link rel="stylesheet" href="{{asset('backend/dist/css/app.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend/libs/toastr/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/dist/css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/dist/css/_app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/libs/fontawesome/icons.min.css')}}">
<!-- Sweet Alert-->
<link href="{{ asset('backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>



<style>

.swal2-container {
  z-index: 99999 !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    border-radius: 0.2rem;
    border: 1px solid #dee2e6;
    background: #ffffff;
    color: #fff !important;
}
/* hover ปุ่มเปลี่ยนหน้า*/
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #003EA3 !important;
    color: #fff !important;
    border: 1px solid #ffffff !important;
}
/* หน้าที่เลือกแล้ว hover */
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    background: #003EA3 !important;
    color:#fff !important;
    border: 1px solid #ffffff !important;
}
/* ปหน้าที่เลือก */
.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #003EA3 !important;
    color:#fff !important;

}
table.dataTable.no-footer {
    border-bottom: none !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover{
  background: #003EA3 !important;
    color:#fff !important;
}


</style>