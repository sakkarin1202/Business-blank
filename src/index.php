<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>CRUD Customer Information</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>รายชื่อลูกค้า <a href="_____________________________________" class="btn btn-info float-end">+เพิ่มข้อมูล</a> </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead align="center">                        
                            <tr>
                                <th width="10%">รหัสลูกค้า</th>
                                <th width="20%">ชื่อ-นามสกุล</th>
                                <th width="20%">____________</th>
                                <th width="25%">____________</th>
                                <th width="10%">____________</th>
                                <th width="10%">____________</th>
                                <th width="5%">แก้ไข</th>
                                <th width="5%">____________</th>
                            </tr>                       
                        </thead>

                        <tbody>
                          <?php
                            require '____________';
                            $sql =  ____________
                            $stmt = ____________
                            $stmt->____________
                            $result = ____________->fetchAll();
                            ____________ ($result as _______) { ?>
                            <tr>
                                <td><?= $r['____________'] ?></td>
                                <td><?= $r['____________'] ?></td>
                                <td><?= $r['____________'] ?></td>
                                <td><?= $r['____________'] ?></td>
                                <td><?= $r['____________'] ?></td>
                                <td><?= $r['____________'] ?></td>
                                <td><a href="________________________<?= $r['CustomerID'] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="_______________________________________________" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                            </tr>
                          <?php 
                            ____________
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
    </body>
</html>