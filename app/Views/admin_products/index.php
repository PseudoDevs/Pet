<?php 

echo view('layouts/header');
echo view('layouts/sidenav');

?>

<div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Products</h1>
                        </div>
                    </div>
                </div>

                <a href="/add-product" class="btn btn-primary">Add Product</a>

                <div class="row clearfix">
                    <div class="col-lg-12 mt-2">
                        <div class="card">
                            <div class="header">
                                <h2> Products List </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Thumbnail</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($products as $product): ?>
                                            <tr>
                                                <td><?= $product['p_name'] ?></td>
                                                <td><img src="/uploads/<?= $product['p_thumbnail'] ?>" class="img-fluid" height="100" width="100"></td>
                                                <td><?= $product['p_stocks'] ?></td>
                                                <td>₱ <?= $product['p_price'] ?></td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-id="<?= $product['id'] ?>" data-target="#edit"  class="btn btn-success btn-sm edit_p">Edit</button>
                                                    <button type="button" data-toggle="modal" data-id="<?= $product['id'] ?>" data-target="#delete" class="btn btn-danger btn-sm delete_p">Delete</button>
                                                    <button type="button" data-toggle="modal" data-id="<?= $product['id'] ?>" data-target="#view" class="btn btn-secondary btn-sm view_p">View</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php 

echo view('layouts/footer');
echo view('admin_products/delete');
echo view('admin_products/edit');
echo view('admin_products/view');

?>

<script>

    
// function refreshTable() {
//             $.get("/fetch-official-roles", function(data, status) {
//                 $('.dataTable').DataTable().clear().destroy();
//                 $('.dataTable').find("tbody").empty();
//                 $('.dataTable tbody').append(data);
//                 var table = $("dataTable").DataTable();

//             });
//         }

//         $(document).ready(function() {
//             $.get("/fetch-official-roles", function(data, status) {
//                 $('.dataTable').DataTable().clear().destroy();
//                 $('.dataTable').find("tbody").empty();
//                 $('.dataTable tbody').append(data);
//                 var table = $(".dataTable").DataTable();

//             });

//         });

var isSomethingTrue = true;
        $(".dataTable").on('click', '.delete_p', function() {
            var id = $(this).data('id');
            $("#deleteProducts").click(function() {
                if (isSomethingTrue) {
                    $.get("/delete-product/" + id, {
                            id: id,
                        },
                        function(data, status) {
                            alert("Product Deleted Successfully");
                            location.reload();
                        });
                } else {
                    console.log("Error Deleting Role!");
                }
            });
        });


        $(".dataTable").on('click', '.edit_p', function() {

            var id = $(this).data('id');

            $.get("/view-product/" + id, function(data, status) {
                const result = JSON.parse(data);
                $('#productIdEdit').val(result.id);
                $('#p_name').val(result.p_name);
                $('#p_desc').val(result.p_description);
                $('#p_price').val(result.p_price);
                $('#p_stocks').val(result.p_stocks);
                // $('#p_thumbnail').val(result.rolename);

                console.log(data);
            });
        });

            // $("#update_products").click(function() {
            //     const id = $("#productIdEdit").val();
            //     const roleEditedName = $('#roleNameEdit').val();
            //     $.post("/edit-official-roles/" + id, {
            //             roleNameEdit: roleEditedName,
            //         },
            //         function(data, status) {
            //             const result = JSON.parse(data);
            //             $('div.alert-content').html(result.success);
            //             if (status == 'success') {
            //                 $('#roleNameEdit').val('');
            //                 $('#editRole').modal("hide");
            //             }
            //             refreshTable();
            //         });
            // });

</script>