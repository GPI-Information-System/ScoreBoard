<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="datatable/bootstrap.min.css">
</head>

<body>
  <div style="padding: 100px;">
    <table id="dataTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>a</th>
          <th>s</th>
          <th>d</th>
          <th>f</th>
          <th>g</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>q</td>
          <td>w</td>
          <td>e</td>
          <td>r</td>
          <td>t</td>
        </tr>
        <tr>
          <td>q</td>
          <td>w</td>
          <td>e</td>
          <td>r</td>
          <td>a</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="datatable/jquery-3.6.0.min.js"></script>
  <script src="datatable/jquery.dataTables.min.js"></script>
  <script src="datatable/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
</body>

</html>