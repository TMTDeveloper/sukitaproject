<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SUKITA | Supaya Kita Tahu</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/Bootstrap/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/Bootstrap/style5.css">
    </head>
    <body>



        <div class="wrapper">

<!-- """""""""""""""""""""""""""""""""""""""""""""""""""""""""SIDEBAR""""""""""""""""""""""""""""""""""""""""""""""""""""""""" -->
        <?php $this->load->view($sidebar); ?>

<!-- """""""""""""""""""""""""""""""""""""""""""""""""""""""""HEADER""""""""""""""""""""""""""""""""""""""""""""""""""""""""" -->
            <div id="content">
              <?php $this->load->view($header); ?>
                
<!-- """"""""""""""""""""""""""""""""""""""""""""""""""""""MAIN CONTENT"""""""""""""""""""""""""""""""""""""""""""""""""""""" -->

                <?php $this->load->view($content); ?>
            </div>

<!-- """"""""""""""""""""""""""""""""""""""""""""""""""""""MAIN CONTENT"""""""""""""""""""""""""""""""""""""""""""""""""""""" -->
        </div>

        <!-- jQuery CDN -->
         <script src="<?= base_url(); ?>assets/Bootstrap/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="<?= base_url(); ?>assets/Bootstrap/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    

</body></html>