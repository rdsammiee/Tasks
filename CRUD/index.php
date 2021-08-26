<?php
require_once("../CRUD/PHP/component.php");
require_once ("../CRUD/PHP/operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TASK</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--custom stylesheet-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<main>

    <div class="container text-center">
        <h1 class ="py=4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>TASK LIST</h1>

        <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
            <div class="pt-2">
                <?php inputElement("<i class='fas fa-id-badge'></i>","ID","ID","");
                ?>
            </div>
            <div class="pt-2">
                <?php inputElement("<i class='fas fa-globe-asia'></i>","URL","URL","");
                ?>
            </div>
            <div class="pt-2">
                <?php inputElement("<i class='fas fa-sticky-note'></i>","Des","Des","");
                ?>
            </div>
            <div class="row pt-2">
                <div class="col">
                        <?php inputElement("<i class='fas fa-rupee-sign'></i>","Price","Price","");
                        ?>
                </div>
                        <div class="col ">
                                <?php inputElement("<i class='fas fa-question'></i>","status","Status","");
                                ?>
                        </div>

            </div>
            <div class="d-flex justify-content-center">
                <?php buttonElement("btn-create","btn-success","<i class ='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='create'")?>
                <?php buttonElement("btn-read","btn-primary","<i class ='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='read'")?>
                <?php buttonElement("btn-update","btn-light border","<i class ='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='update'")?>
                <?php buttonElement("btn-delete","btn-danger","<i class ='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='delete'")?>
            </div>
        </div>

        </form>
        <div class="d-flex table-data">
            <table class ="table table-stripped table-dark">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>DESC</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                    <th>EDIT</th>
                </tr>
                </thead>
                <tbody id="tbody">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fas fa-edit btnedit"></i> </td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>

     </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>