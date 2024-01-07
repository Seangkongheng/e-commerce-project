 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="js/sweatalert.min.js"></script>

    <?php
          if(isset($_SESSION['success']) && $_SESSION['success'] !='')
          {
            ?>
     
            <script>
                  swal({
                  title: "<?php echo $_SESSION['success'];?>",
                  text: "You clicked the button!",
                  icon: "success",
                  button: "OK",
                  });
    </script>
            <?php
            unset($_SESSION['success']);
          }

        
        ?>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
  
  $(document).ready(function () {
    $('#datatableID').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch ",
      }
    });
});
</script>
<!--serch product-->
<script>
  
  $(document).ready(function () {
    $('#datatableIDProduct').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch product ",
      }
    });
});
</script>

</script>
<!--serch admin-->
<script>
  
  $(document).ready(function () {
    $('#datatableIDadmin').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch admin... ",
      }
    });
});
</script>

<!--serch order-->
<script>
  
  $(document).ready(function () {
    $('#datatableOrder').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch admin... ",
      }
    });
});

</script>
<!--datatableReportOder-->
<script>
  
  $(document).ready(function () {
    $('#datatableOrderReport').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch... ",
      }
    });
    
});

</script>
<!--calender-->
<script>
  $(function()
  {
    $('#pickdate').pickdate();
  });
</script>
