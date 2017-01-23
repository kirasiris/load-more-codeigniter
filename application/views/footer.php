      <footer>
        <p>&copy; 2016 SMK TI- Tambak Beras, All Rights Reserved.</p>
      </footer>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script>
      $('.carousel').carousel({
        interval: 6000
        });

        $(document).ready(function(){
            berita(0);

            $("#load_more").click(function(e){
                e.preventDefault();
                var page = $(this).data('val');
                berita(page);

            });
            //video_baru();
        });

        var url = 'http://localhost/~maulayyacyber/crud_ci/'

        var berita = function(page){
            $("#loader").show();
            $("#load_more").show();
            $.ajax({
                url:  url+"web/get_berita",
                type:'GET',
                data: {page:page}
            }).done(function(response){
                $("#berita").append(response);
                $("#loader").hide();
                $('#load_more').data('val', ($('#load_more').data('val')+1));
                //scroll();
                if(response == ""){
                    $("#load_more").hide();
                }
            });

        };      
    </script>
  </body>
</html>