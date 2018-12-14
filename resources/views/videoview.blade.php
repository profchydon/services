<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 50px;
            background: #16141a;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            border: 1px solid #0e0d10;
        }
        body{
            padding-top: 50px;
        }
        .file-preview {
          border-radius: 0px;
          border: 1px solid #3a3543;
          margin-bottom: 20px;
        }
        .file-drop-zone {
          border: 1px dashed #494949;
          border-radius: 0px;

        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
        .header{
          color: #fff;
        }
        .bg-danger {
            background-color: #1A1920 !important;
        }

        .btn-primary {
            color: #fff;
            background-color: #ED2B7C !important;
            border-color: #ED2B7C;
            border-radius: 0px;
        }
        .btn-primary:hover{
            border: 1px solid #c92569 !important;
            background: #c92569 !important
        }
        .pull-right {
            color: #ED2B7C !important;
            background: transparent !important;
            border: none !important;
        }
        .pull-right:hover {
            color: #c92569!important;
            background: transparent !important;
            border: none !important;
        }
        .form-control{
            border-radius: 0px;
        }
        .note{
            color: red;
            font-size: 14px;
            text-align: center !important;
        }

    </style>
</head>
<body class="bg-danger">
    <div class="container">


        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-8">

                <a href="/escort/dashboard" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i>  Back to dashboard</a>

                <div class="main-section">
                  <h4 class="text-center header">Upload your Videos <br>
                      <span class="text-center note">You are allow to uplaod a maximum of 6 videos only</span> <br>
                      <span class="text-center note">Maximum file size for each video is 20MB</span>
                  </h4>

                  <form class="" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                        </div>
                    </div>

                  </form>
                </div>

            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/video-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['mp4', 'avi', 'mkv', 'WEBM' , 'mpeg'],
            overwriteInitial: false,
            maxFileSize : 20000,
            maxFilesNum: 12,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>


</body>
</html>
