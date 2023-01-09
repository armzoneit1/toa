

<!doctype html>
<html lang="en">

<head>

      @include("layout.css")
</head>

<body data-sidebar="dark">

      <!-- Script Zone -->
      @include("layout.script")
      <script>
            const url = '{{@$url}}';
            $(function() {
                  Swal.fire({
                        title: "ไม่สำเร็จ",
                        text: "เกิดข้อผิดพลาด กรุณาทำใหม่อีกครั้ง",
                        icon: "error",
                        closeOnClickOutside: false,
                  }).then((result) => {
                        if (url == '') {
                              window.location = window.location.href;
                        } else {
                              window.location = url
                        }
                  });
            });
      </script>

</body>

</html>