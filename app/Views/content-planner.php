<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Content Planner</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #e0e0e0;
        }

        .card {
            background-color: #ffff;
            padding: 20px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .card-content {
            padding: 15px;
            background-color: #87d5c8;
        }

        .container {
            margin-top: 20px;
        }

        .header {
            margin-top: 30px;
            position: relative;
            padding-bottom: 20px;
        }

        .upload-box {
            border: 2px dashed #757575;
            border-radius: 10px;
            height: 300px;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #555;
            position: relative;
            overflow: hidden;
        }

        .upload-input {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            cursor: pointer;
            opacity: 0;
        }

        .line-separator {
            width: 100%;
            height: 2px;
            background-color: #000;
            border: none;
            margin-top: 20px;
        }

        .upload-box svg {
            width: 60px;
            /* Increase icon size */
            height: 60px;
            /* Increase icon size */
            margin-bottom: 10px;
        }

        .upload-box p {
            margin-bottom: 3px;
        }

        .date {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .calendar-icons {
            display: flex;
            justify-content: flex-end;
        }

        .calendar-icons i {
            margin-left: 10px;
            cursor: pointer;
        }

        .form-control,
        .btn {
            border-radius: 0.25rem;
            /* Bootstrap default border-radius */
        }

        .calendar-controls button {
            border: none;
        }
    </style>
</head>

<body class="card-content">
    <!-- start text header and line -->
    <div class="container">
        <div class="header">
            <h2>Content Planner</h2>
            <hr class="line-separator" />
        </div>
        <!-- end text header and line -->

        <div class="card">

            <div class="container mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">September 2024</h5>
                    <div class="calendar-controls d-flex align-items-center">
                        <button class="btn btn-light me-3">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="btn btn-light">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <input type="datetime-local" class="ms-3">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Upload Box -->
                <div class="col-md-5 mb-4">
                    <div class="upload-box">
                        <input type="file" class="upload-input" id="file-upload" style="display: none" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4-4m0 0l4 4m-4-4v12m4-12l4 4m0 0l4-4m-4 4v12" />
                        </svg>
                        <p>Drag and Drop File</p>
                        <p>or</p>
                        <label class="btn btn-primary custom-file-upload">
                            Browse
                            <input type="file" class="upload-input" id="file-upload" />
                        </label>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-md-7">
                    <form>
                        <div class="row">
                            <!-- Content Type -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="content-type">Content Type</label>
                                    <select id="status" class="form-control" required>
                                        <option value="Instagram" selected>Instagram</option>
                                        <option value="draft">Draft</option>
                                        <option value="scheduled">Scheduled</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Content Pillar -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="content-pillar">Content Pillar</label>
                                    <select id="status" class="form-control" required>
                                        <option value="Instagram" selected>Instagram</option>
                                        <option value="draft">Draft</option>
                                        <option value="scheduled">Scheduled</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Status -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" class="form-control" required>
                                        <option value="Instagram" selected>Instagram</option>
                                        <option value="draft">Draft</option>
                                        <option value="scheduled">Scheduled</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="caption">Social Media</label>
                            <select id="status" class="form-control" required>
                                <option value="Instagram" selected>Instagram</option>
                                <option value="draft">Draft</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="published">Published</option>
                                <option value="archived">Archived</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <textarea class="form-control" rows="5" placeholder="Caption"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="CTA">CTA / Link</label>
                            <textarea type="text" class="form-control" placeholder="Cta / Link"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Hashtag">Hashtag</label>
                            <textarea type="text" class="form-control" placeholder="Hashtag"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" id="date" class="form-control" required />
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>