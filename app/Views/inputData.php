<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card {
            background-color: #ffff;
            padding: 20px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .card-content {
            padding: 15px;
            background-color: #87D5C8;
        }

        .header {
            margin-top: 30px;
            position: relative;
            padding-bottom: 20px;
        }

        .line-separator {
            width: 100%;
            height: 2px;
            background-color: #000;
            border: none;
            margin-top: 20px;
        }

        .textcontent {
            margin-top: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .line-separatorkecil {
            width: 10%;
            height: 2px;
            background-color: #000;
            margin: 10px 0;
        }

        .input-smaller {
            width: 65%;
        }
    </style>
</head>

<body class="card-content">
    <!-- start text header and line -->
    <div class="container">
        <div class="header">
            <h2>Input Data Content</h2>
            <hr class="line-separator">
        </div>
        <!-- end text header and line -->

        <div class="card">
            <!-- start nama data -->
            <div class="textcontent">
                <h5>Media Sosial</h5>
                <hr class="line-separatorkecil">
            </div>
            <!-- end nama data -->

            <!-- start table medsos -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Media Sosial</th>
                        <th scope="col">Warna Sosial Media (HEX Code)</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td contenteditable="true">Youtube</td>
                        <td contenteditable="true">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 20px; height: 20px; background-color: #87D5C8; border: 1px solid #000; margin-right: 5px;"></div>
                                <span>#87D5C8</span>
                            </div>

                        </td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm delete-content-type" style="width: 100%; min-width: 80px;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-3">New Data</th>
                        <td><input type="text" id="newNamaContentType" class="form-control" placeholder="Nama Media Sosial"></td>
                        <td><input type="color" id="newWarnaSosialMedia" class="form-control" value="#000000"></td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm" id="addContentType" style="width: 100%; min-width: 80px;">Add Data</button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <!-- end table medsos -->


            <!-- start nama data -->
            <div class="textcontent mt-5">
                <h5>Content Type</h5>
                <hr class="line-separatorkecil">
            </div>
            <!-- end nama data -->

            <!-- start table content type -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Content Type</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td contenteditable="true">Feed Gambar</td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm delete-content-type" style="width: 100%; min-width: 80px;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-3">New Data</th>
                        <td><input type="text" id="newNamaContentType" class="form-control" placeholder="Data Content Type"></td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm" id="addContentType" style="width: 100%; min-width: 80px;">Add Data</button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <!-- end table content type -->


            <!-- start nama data -->
            <div class="textcontent mt-5">
                <h5>Content Pillar</h5>
                <hr class="line-separatorkecil">
            </div>
            <!-- end nama data -->

            <!-- start table content pillar -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Content Pillar</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td contenteditable="true">Foto</td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm delete-content-type" style="width: 100%; min-width: 80px;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-3">New Data</th>
                        <td><input type="text" id="newNamaContentType" class="form-control" placeholder="Data Content Pillar"></td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm" id="addContentType" style="width: 100%; min-width: 80px;">Add Data</button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <!-- end table content pillar -->


            <!-- start nama data -->
            <div class="textcontent mt-5">
                <h5>Status Content</h5>
                <hr class="line-separatorkecil">
            </div>
            <!-- end nama data -->

            <!-- start table Status -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Status Content</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td contenteditable="true">Planning</td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm delete-content-type" style="width: 100%; min-width: 80px;">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-3">New Data</th>
                        <td><input type="text" id="newNamaContentType" class="form-control" placeholder="Status Content"></td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm" id="addContentType" style="width: 100%; min-width: 80px;">Add Data</button>
                        </td>
                    </tr>

                </tbody>
            </table>
            <!-- end table status -->



        </div>
    </div>


</body>

</html>