<script>
        jQuery(document).ready(function ($) {
          $('.delete-link').on('click', function () {
            var getLink = $(this).attr('href');
            swal({
              title: 'Apakah kamu yakin ?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#ff3333',
              cancelButtonColor: '#d33',
              cancelButtonText: 'Batal',
              confirmButtonText: 'Ya, Dihapus!'
            }, function () {
              window.location.href = getLink
            });
            return false;
          });
        });
    </script>
