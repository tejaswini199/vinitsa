
<style>
table,th,td{
  border:1px solid #000;
}
td{
  padding:5px;
}
</style>
<?php
$serverName = "198.71.225.145"; //serverName\instanceName
$connectionInfo = array( "Database"=>"111Waytoabroad", "UID"=>"waytoabroad", "PWD"=>"@WSXzaq1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
  /* Set up and execute the query. */
  $tsql = "SELECT cName,cMobile,cEmail,cMassege,cWebsite,dtCreatedDate1 from ContactDetails ORDER BY id DESC";
  $stmt = sqlsrv_query( $conn, $tsql);
  ?>
    <table id="tblData">
<tr>
  <th >cName</th>
   <th >cMobile</th>
   <th >cEmail</th>
   <th >cMassege</th>
   <th >cWebsite</th>
     <th >dtCreatedDate1</th>
</tr>
<?php
  if( $stmt === false)
  {
       echo "Error in query preparation/execution.\n";
       die( print_r( sqlsrv_errors(), true));
  }

  /* Retrieve each row as an associative array and display the results.*/
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
  {
    ?>
  
    <tr>
     
      <td >
        <?php echo $row['cName'];?>
      </td>
      <td >
        <?php echo $row['cMobile'];?>
      </td>
      <td >
        <?php echo $row['cEmail'];?>
      </td>
      <td>
        <?php echo $row['cMassege'];?>
      </td>
      <td >
        <?php echo $row['cWebsite'];?>
      </td>
        <td >
        <?php echo $row['dtCreatedDate1'];?>
      </td>

    </tr>


    <?php
     
  }

  /* Free statement and connection resources. */
  sqlsrv_free_stmt( $stmt);
  sqlsrv_close( $conn);
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
  </table>
<div>

  <button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>

</div>
<script>
  function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

  </script>