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
        @import url('https://fonts.googleapis.com/css?family=Laila');

        #verification-rules-section h4 {
          color: #fff;
          font-size: 20px;
          text-align: center;
          line-height: 25px;
        }

        #verification-rules-section ul {
          color: #fff;
          list-style-type: decimal;
          line-height: 27px;
        }
        .main-section li {
            font-size: 14px;
            margin: 10px 0px;
        }

        .main-section {
          margin: 0 auto;
          padding: 20px 0px;
          margin-top: 10px;
          background-color: #1d2939!important;
          border: 1px solid #1d2939!important;
        }
        body{
            padding-top: 50px;
            font-family: 'Laila', serif;
        }
        .file-preview {
          border-radius: 0px;
          border: 1px solid #25364f;
          margin-bottom: 20px;
        }
        .file-drop-zone {
          border: 1px dashed #4d4d4d;
          border-radius: 0px;

        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
        .header{
          color: #fff;
          font-size: 19px;
        }
        .bg-danger {
            background-color: #1e2a3b !important;
        }
        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
            color: #fff;
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
        .btn-primary:visited{
            border: none;
        }
        .pull-right {
            color: #ED2B7C !important;
            background: transparent !important;
            border: none !important;
            font-size: 13.5px !important;
        }
        .pull-right:hover {
            color: #c92569!important;
            background: transparent !important;
            border: none !important;
        }
        .pull-right:visited {
            color: #c92569!important;
            background: transparent !important;
            border: none !important;
        }
        .form-control{
            border-radius: 0px;
        }
        .note{
            color: #ED2B7C;
            font-size: 14px;
            text-align: center !important;
            font-weight: 300 !important;
        }

    </style>
</head>
<body class="bg-danger">
    <div class="container">


        <!-- <a href="/escort/dashboard" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i>  Back to dashboard</a> -->
        <div class="row">

            <div class="col-md-12">
                <a href="/escort/dashboard" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i>  Back to dashboard</a>
            </div>

            <div class="col-md-5">
              <div class="main-section" id="verification-rules-section">

                  <h4>Rules for xcort.ng escort account verification.</h4>

                  <ul>
                    <li>Make sure your account has at least three images of you. Note that accounts without a minimum of 3 images that clearly assures your clients about you, will not be approved.</li>
                    <li>If you haven't fulfilled the above condition, <a href="{{route('image.view')}}">click here</a> to upload at least 3 images for your account</li>
                    <li>Upload an image that clearly shows your face and your xcort.ng username written boldly on a plain white paper.</li>
                    <li>Do not upload image more than once.</li>
                    <li>Remember to click the <i class="fa fa-upload"></i> icon to complete your upload</li>
                  </ul>

              </div>
            </div>

            <div class="col-md-7">

                <div class="main-section">
                  <h4 class="text-center header">Verify your Xcort.ng account <br>
                      <span class="text-center note">You are allow to upload a maximum of 1 image only for verification</span>
                  </h4>

                  <form class="" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-max-file-count="1" data-min-file-count="1">
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
            uploadUrl: "/verify-escort",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'jpeg', 'png'],
            overwriteInitial: false,
            maxFileSize : 3500,
            maxFilesNum: 1,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>


</body>
</html>
