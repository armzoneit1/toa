<!doctype html>
<html lang="en">

<head>
      @include("layout.css")
</head>
<style>
      .swal2-backdrop-show{
            background: rgba(216, 33, 88, 0.226)!important;
      }
      .swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, 0.226)!important;
      }
</style>

<body data-sidebar="dark">

      <!-- Script Zone -->
      @include("layout.script")
      <script>
            const url = '{{@$url}}';
            $(function() {
                  Swal.fire({
                        title: "สำเร็จ",
                        text: "ระบบได้ทำการบันทึกข้อมูลเรียบร้อย",
                        icon: "success",
                        allowOutsideClick: false,
                  }).then((result) => {
                        if (url == '') {
                              window.location = window.location.href;
                        } else {
                              window.location = url
                        }
                  });
            })
      </script>

</body>

</html>