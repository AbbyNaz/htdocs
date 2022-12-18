   </div>
   <!--this is the end of the all content wrapper-->

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">Are you sure you want to log out ?</div>
               <div class="modal-footer">
                   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   <a class="btn btn-primary" href="#">Logout</a>
               </div>
           </div> 
       </div>
   </div>



   <!-- jquery
        ============================================ -->
   <script src="js/vendor/jquery-1.12.4.min.js"></script>
   <!-- bootstrap JS
        ============================================ -->
   <script src="js/bootstrap.min.js"></script>  
   <!-- wow JS
        ============================================ -->
   <script src="js/wow.min.js"></script>
   <!-- price-slider JS
        ============================================ -->
   <script src="js/jquery-price-slider.js"></script>
   <!-- meanmenu JS
        ============================================ -->
   <script src="js/jquery.meanmenu.js"></script>
   <!-- owl.carousel JS
        ============================================ -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- sticky JS
        ============================================ -->
   <script src="js/jquery.sticky.js"></script>
   <!-- scrollUp JS
        ============================================ -->
   <script src="js/jquery.scrollUp.min.js"></script>
   <!-- counterup JS
        ============================================ -->
   <script src="js/counterup/jquery.counterup.min.js"></script>
   <script src="js/counterup/waypoints.min.js"></script>
   <script src="js/counterup/counterup-active.js"></script>
   <!-- mCustomScrollbar JS
        ============================================ -->
   <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
   <!-- metisMenu JS
        ============================================ -->
   <script src="js/metisMenu/metisMenu.min.js"></script>
   <script src="js/metisMenu/metisMenu-active.js"></script>
   <!-- morrisjs Js
        ============================================ -->
   <script src="js/sparkline/jquery.sparkline.min.js"></script>
   <script src="js/sparkline/jquery.charts-sparkline.js"></script>
   <script src="js/sparkline/sparkline-active.js"></script>
   <!-- calendar JS
        ============================================ -->
   <script src="js/calendar/moment.min.js"></script>
<!--    <script src="js/calendar/fullcalendar.min.js"></script>
   <script src="js/calendar/fullcalendar-active.js"></script> -->
   <!-- maskedinput JS
		============================================ -->
   <script src="js/jquery.maskedinput.min.js"></script>
   <script src="js/masking-active.js"></script>
   <!-- datepicker JS
		============================================ -->
   <script src="js/datepicker/jquery-ui.min.js"></script>
   <script src="js/datepicker/datepicker-active.js"></script>
   <!-- form validate JS
		============================================ -->
   <script src="js/form-validation/jquery.form.min.js"></script>
   <script src="js/form-validation/jquery.validate.min.js"></script>
   <script src="js/form-validation/form-active.js"></script>


   <!-- this is for the tables  -->
   <!-- data table JS
    		============================================ -->
   <!-- <script src="js/data-table/bootstrap-table.js"></script>
   <script src="js/data-table/tableExport.js"></script>
   <script src="js/data-table/data-table-active.js"></script>
   <script src="js/data-table/bootstrap-table-editable.js"></script>
   <script src="js/data-table/bootstrap-editable.js"></script>
   <script src="js/data-table/bootstrap-table-resizable.js"></script>
   <script src="js/data-table/colResizable-1.5.source.js"></script>
   <script src="js/data-table/bootstrap-table-export.js"></script> -->


   <!-- dropzone JS
		============================================ -->
   <script src="js/dropzone/dropzone.js"></script>
   <!-- tab JS
		============================================ -->
   <!-- plugins JS
        ============================================ -->
   <script src="js/plugins.js"></script>
   <!-- main JS
        ============================================ -->
   <script src="js/main.js"></script>
   <!-- tawk chat JS
        ============================================ -->
   <script src="js/tawk-chat.js"></script>
<!--    <script src="includes/try_calendar.js"></script> -->

   <!-- for the modal -->

   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> -->

   <script>
       // Ignore this in your implementation
       window.isMbscDemo = true;
   </script>

   <!-- Mobiscroll JS and CSS Includes -->
   <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
   <script src="js/mobiscroll.javascript.min.js"></script>


   <!-- SWEET ALERT NOTIF JS
        ============================================ -->
   <script src="js/sweetalert.min.js"></script>

    <?php
        // this is for registering the admin profile to the databse if success, not success and if password are matched in confirmpass
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

        ?>
       <script>
           swal({
               title: "<?php echo $_SESSION['status']; ?>",
               //    text: "You clicked the button!",
               icon: "<?php echo $_SESSION['status_code']; ?>",
               button: "Close",
           });
       </script>
   <?php
            unset($_SESSION['status']);
        }
    ?>

   </body>

   </html>