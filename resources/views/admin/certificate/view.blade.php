<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">

    <title>certificate</title>
    <style>
        /* .certificate {
            background: url(img/certificate.png);
            background-repeat: no-repeat;
            background-size: cover;
        } */

        @font-face {
            font-family: Avasangtor;
            src: url(fonts/roboto/Apache\ License.txt );
        }

        .bg-img {
            position: absolute;
            z-index: -9999;
            top: 0;
            left: 0;
        }

        .certi-text .c-txt {
            font-family: Avasangtor;
            font-size: 40px;
            font-weight: 700;

        }

        .certi-text .a-txt {
            font-family: Avasangtor;
            font-size: 20px;
            font-weight: 500;
            line-height: 0.0;
        }

        .t-text {
            font-size: 16px;
            font-weight: 500;
        }

        .name-txt {
            font-family: Avasangtor;
            font-size: 35px;
            font-weight: 900;
            font-style: italic;
        }

        .slog-txt {
            font-size: 14px;
            font-weight: 500;
        }

        @media screen and (min-device-width: 320px) and (max-device-width: 467px) {
            .certi-text .c-txt {
                font-family: Avasangtor;
                font-size: 20px;
                font-weight: 600;

            }

            .mt-5,
            .my-5 {
                margin-top: 0rem !important;
            }

            .certi-text .a-txt {
                font-family: Avasangtor;
                font-size: 12px;
                font-weight: 500;
                margin-top: -10px;
            }

            .t-text {
                font-size: 10px;
                font-weight: 500;
                margin-top: -15px;
            }

            .name-txt {
                font-family: Avasangtor;
                font-size: 20px;
                font-weight: 600;
                font-style: italic;
                margin-top: -18px;
            }

            .slog-txt {
                font-size: 9px;
                font-weight: 400;
                margin-top: -18px;
                padding: 14px;
                line-height: 1.0;
            }

            .img-row {
                margin-top: -20px!important;
            }
        }

        @media screen and (min-device-width: 468px) and (max-device-width: 570px) {
            .certi-text .c-txt {
                font-family: Avasangtor;
                font-size: 20px;
                font-weight: 600;

            }

            .mt-5,
            .my-5 {
                margin-top: 0rem !important;
            }

            .certi-text .a-txt {
                font-family: Avasangtor;
                font-size: 12px;
                font-weight: 500;
                margin-top: -10px;
            }

            .t-text {
                font-size: 10px;
                font-weight: 500;
                margin-top: -14px;
            }

            .name-txt {
                font-family: Avasangtor;
                font-size: 20px;
                font-weight: 600;
                font-style: italic;
                margin-top: -18px;
            }

            .slog-txt {
                font-size: 9px;
                font-weight: 400;
                margin-top: -18px;
                padding: 14px;
                line-height: 1.0;
            }

            .img-row {
                margin-top: -24px;
            }
        }

        @media screen and (min-device-width: 414px) and (max-device-width: 896px) {
            .t-text {
                font-size: 10px;
                font-weight: 500;
                margin-top: -8px;
            }

            .slog-txt {
                font-size: 9px;
                font-weight: 400;
                margin-top: -23px;
                padding: 18px;
                line-height: 1.3;
            }

            .img-row {
                margin-top: -24px;
            }
        }
        @media screen and (min-device-width: 820px) and (max-device-width: 1180px) {
            .certi-text .c-txt {
                font-family: Avasangtor;
                font-size: 32px;
                font-weight: 600;

            }

            .mt-5,
            .my-5 {
                margin-top: 1rem !important;
            }

            .certi-text .a-txt {
                font-family: Avasangtor;
                font-size: 18px;
                font-weight: 500;
                margin-top: -10px;
            }

            .t-text {
                font-size: 10px;
                font-weight: 500;
                margin-top: -13px;
            }

            .name-txt {
                font-family: Avasangtor;
                font-size: 20px;
                font-weight: 600;
                font-style: italic;
                margin-top: -18px;
            }

            .slog-txt {
                font-size: 10px;
                font-weight: 500;
                margin-top: 0px;
            }

            .img-row {
                margin-top: 9px;

            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <a data-size="lg"  class="btn btn-icon btn-outline-primary" data-toggle="tooltip" title="View" href="{{ route('admin.certificate.index') }}">
            <i class="feather icon-corner-up-left"></i>
        </a>
        <div class="row justify-content-md-center">
            <div class="col-md-10 certificate">
                <img src="{{ asset('assets/certificate/img.png') }}" class="img-fluid bg-img">
                <div class="row justify-content-md-center mt-4">
                    <div class="col-md-6 text-center mt-5 certi-text">
                        <p class="c-txt"> CERTIFICATE </p>
                        <p class="a-txt">OF ACHIEVEMENT</p>
                    </div>
                </div>
                <div class="row justify-content-md-center mt-4">
                    <div class="col-md-7 text-center mt-5 certi-text">
                        <p class="t-text">{{ $certificate->title }}</p>
                        <h1 class="name-txt">@foreach($users as $user)
                                            @if($user['id']==$certificate->user_id)
                                            {{ $user['name']}}
                                            @endif
                                            @endforeach</h1>
                        <p class="slog-txt">{{ $certificate->description }}</p>
                        <!-- 
                                <img src="img/sign.png" class="img-fluid user" width="30%">
                            <img src="img/dark-logo-1-1.png" class="img-fluid lg-certificate" width="30%">
                            <img src="img/sign.png" class="img-fluid atho" width="30%">
                         -->
                    </div>
                </div>
                <div class="row img-row">
                    <div class="col-md-2 col-2"></div>
                    <div class="col-md-2 col-2">
                        <img src="{{ asset('assets/certificate/sign.png') }}" class="img-fluid user">
                    </div>
                    <div class="col-1 col-md-1"></div>
                    <div class="col-3 col-md-3">
                        <img src="{{ asset('assets/certificate/dark-logo-1-1.png') }}" class="img-fluid lg-certificate">
                    </div>
                    <div class="col-2 col-md-2  justify-content-md-center">
                        <img src="{{ asset('assets/certificate/sign.png') }}" class="img-fluid atho">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>