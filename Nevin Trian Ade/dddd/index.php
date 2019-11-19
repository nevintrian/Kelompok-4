<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include 'koneksi.php';
  ?>
  <div class="col-sm-6" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>DataTabels dengan PHP dan Bootstrap Suckittrees.Com</h3>
    <hr>
      <table class="table table-stripped table-hover datatab">
        <thead>
          <tr>
            
            <th>Id</th>
            <th>Nama</th>
            <th>Action</th>                         
          </tr>
        </thead>  
        <tbody>
          <?php 
          $query = mysqli_query($konek, "SELECT * FROM pt");
         
          while ($data = mysqli_fetch_assoc($query)) 
          {
          ?>
            <tr>
              
              <td><?php echo $data['KD_PT']; ?></td>
              <td><?php echo $data['NAMA_PT']; ?></td>
      
              <td>
                <!-- Button untuk modal -->
                <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['KD_PT']; ?>">Edit</a>
                <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1<?php echo $data['KD_PT']; ?>">Delete</a>
              </td>
            </tr>
            <!-- Modal Edit Mahasiswa-->
            <div class="modal fade" id="myModal<?php echo $data['KD_PT']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="editmhs.php" method="get">
                        <?php
                        $KD_PT = $data['KD_PT']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM pt WHERE KD_PT='$KD_PT'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="KD_PT" value="<?php echo $row['KD_PT']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="NAMA_PT" class="form-control" value="<?php echo $row['NAMA_PT']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="myModal1<?php echo $data['KD_PT']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="delmhs.php" method="get">
                        <?php
                        $KD_PT = $data['KD_PT']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM pt WHERE KD_PT='$KD_PT'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="KD_PT" value="<?php echo $row['KD_PT']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="NAMA_PT" class="form-control" value="<?php echo $row['NAMA_PT']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Delete</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>


          <?php               
          } 
          ?>
        </tbody>
      </table>          
  </div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</html>