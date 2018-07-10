<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $query = "SELECT * FROM `siteTracker` ";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Testing out datatable </title>  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
           <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


          <script type="text/javascript">
              var dataSet = [
//              [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
//              ["1023A","Central","2018-12-2","2018-01-2"],
              
              <?php  
         
                  while($row = mysqli_fetch_array($result))  
                  {  
                       echo "[";
                       echo "\"".$row["siteid"]."\",";
                       echo "\"".$row["region"]."\",";
                       echo "\"".$row["csi"]."\",";
                       echo "\"".$row["cme"]."\"";
                       echo "],";                   
                     }    
              ?>  
              
          ];
           
          $(document).ready(function() {
              $('#example').DataTable( {
                  data: dataSet,
                  columns: [
                      { title: "SiteID" },
                      { title: "Region" },
                      { title: "CSI" },
                      { title: "CME." }
                      
                  ]
              } );
          } );        
          </script>

      </head>  
      <body>  
            <table id="example" class="display compact" style="width:100%">
           </table>
      </body>  
 </html>  