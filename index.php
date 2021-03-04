<?php
$db=mysqli_connect("localhost","root","","ems");
$query=mysqli_query($db, "SELECT * FROM employee");


?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<link rel="stylesheet"  href="css/bootstrap.min.css">
<link rel="stylesheet"  href="css/datatable.bootstrap.min.css">
</head>

<body>
<div class="container" style="margin-top: 40px">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>photo</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>photo</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </tfoot>
        <tbody>
            <?php while ($r = mysqli_fetch_object($query)): ?>

                <tr>
                    <td><?php echo $r->photo?></td>
                     <td><?php echo $r->name?></td>
                      <td><?php echo $r->email?></td>
                       <td><?php echo $r->phone?></td> 
                       <td><?php echo $r->city?></td> 
                       <td><?php echo $r->country?></td>


                </tr>
            <?php  endwhile;?>
            
        </tbody>
       </table>
   </div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="datatable.jquery.min.js"></script>
<script type="text/javascript" src="datatable.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>