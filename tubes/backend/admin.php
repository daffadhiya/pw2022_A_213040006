<?php
include '../config/connection.php';
// query view class
$classQuery = "SELECT k.id, k.tipe_membership_id, k.nama as nama, k.gambar, kt.nama as nama_kategori, tk.nama as nama_tingkat_kelas
               FROM kelas as k
               JOIN tingkat_kelas as tk ON k.tingkat_kelas_id = tk.id
               JOIN kategori as kt ON k.kategori_id = kt.id";
$classes = mysqli_query($db, $classQuery);

// query get class level
$classLevelQuery = "SELECT * FROM tingkat_kelas";
$classLevels = mysqli_query($db, $classLevelQuery);

// query get category
$categoryQuery = "SELECT * FROM kategori";
$categories = mysqli_query($db, $categoryQuery);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Kelas
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <a href="./login/logout.php" class="nav-link" id="profile-tab" >Logout
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                 tabindex="0">
                <h3 class="text-center mt-3" style="font-family: 'Tw Cen MT Condensed'; font-size: 55px" >Daftar Kelas</h3>
                <div class="row">
                    <div class="col-md-2 mt-3">
                        <div class="mb-3">
                            <input type="text" class="form-control col-12" placeholder="Cari Kelas" id="keyword">
                        </div>
                    </div>
                    <div class="col-md-2 mt-3 ml-2">
                        <button class="btn btn-primary btn-sm mt-1" onclick="openModalAdd()"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </div>



                <div class="row mt-3" id="container">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Tingkat Kelas</th>
                            <th>Kategori</th>
                            <th>Membership</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $i = 1; foreach ($classes as $class) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $class['nama'] ?></td>
                                <td><?= $class['nama_tingkat_kelas'] ?></td>
                                <td><?= $class['nama_kategori'] ?></td>
                                <td><?= $class['tipe_membership_id'] ?></td>

                                <td class="text-center">
                                    <a href="#" onclick="openModalEdit(<?= $class['id'] ?>)" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" onclick="destroy(<?= $class['id'] ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                ...
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name">Nama Kelas</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Contoh: Geografi">
                    </div>
                    <div class="form-group">
                        <label for="class_level_id">Tingkat Kelas</label>
                        <select name="class_level_id" class="form-control" id="class_level_id">
                            <option value="">-- Pilih Tingkat Kelas --</option>
                            <?php foreach ($classLevels as $level) : ?>
                                <option value="<?= $level['id'] ?>"><?= $level['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" class="form-control" id="category_id">
                            <option value="">-- Pilih Kategori --</option>
                          <?php foreach ($categories as $category) : ?>
                              <option value="<?= $category['id'] ?>"><?= $category['nama'] ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipe_membership_id">Membership</label>
                        <select name="tipe_membership_id" class="form-control" id="tipe_membership_id">
                            <option value="">-- Pilih Membership --</option>
                            <option value="Standar">Standar</option>
                            <option value="Sukses">Sukses</option>
                            <option value="Juara">Juara</option>
                        </select>

                    </div>

                    
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="submit()">Submit</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    //menambhakan kotak input
    let url;
    const openModalAdd = () => {
        $('#exampleModal').modal('show');
        url = 'tambah_kelas.php'
    }

    //mengedit data
    const openModalEdit = (id) => {
        $('#exampleModal').modal('show');
        url = 'update_kelas.php'
        $.ajax({
            url: 'edit_kelas.php',
            type: 'get',
            data: {id: id},
            dataType: 'json',
            success: function (response) {
                $('#id').val(response.data.id);
                $('#name').val(response.data.nama);
                $('#class_level_id').val(response.data.tingkat_kelas_id);
                $('#category_id').val(response.data.kategori_id);
                $('#tipe_membership_id').val(response.data.tipe_membership_id);
            },
            error: function (xhr, status, error) {
                alert(status + " : " + error);
            }
        })
    }

    //kirim data ke server
    const submit = () => {
        const id = $('#id').val();
        const name = $('#name').val();
        const classLevelId = $('#class_level_id').val();
        const categoryId = $('#category_id').val();
        const membershipid = $('#tipe_membership_id').val();
        const image = $('#image')[0].files[0];
        const formData = new FormData();
        formData.append('id', id);
        formData.append('name', name);
        formData.append('class_level_id', classLevelId);
        formData.append('category_id', categoryId);
        formData.append('tipe_membership_id', membershipid)
        formData.append('image', image);
        $.ajax({
            url: url,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.status === 200) {
                    alert(response.message);
                    location.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr, status, error) {
                alert(status + " : " + error);
            }
        })
    }

    //hapus data
    const destroy = (id) => {
        console.log(id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'hapus_kelas.php',
                    type: 'POST',
                    data: {id: id},
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 200) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert(status + " : " + error);
                    }
                })
            }
        })
    }
 
    //masukan foto
    $('input[type=file]').change(function () {
        const val = $(this).val().toLowerCase(),
            regex = new RegExp("(.*?)\.(jpg|png|jpeg)$");
        if (!(regex.test(val))) {
            $(this).val('');
            alert('Format yang diizinkan jpg, png, dan jpeg');
        } else if (this.files[0].size > 1000024) {
            $(this).val('');
            alert('Maximum file size of 1 MB');
        }
    });

    $("#keyword").on("keyup",function (){
        $.ajax({
            url: 'cari_kelas.php',
            type: 'get',
            data: {search: $(this).val()},
            success: function (response) {
               console.log(response);
               $("#container").html(response);
            },
            error: function (xhr, status, error) {
                alert(status + " : " + error);
            }
        })
    });
</script>
</body>
</html>
