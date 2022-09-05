<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apollos | Contenido Reportado</title>
    <style type="text/css">
        body {
            margin: 0;
        }

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            padding-bottom: 50px;
        }

        .main {
            background-color: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
            color: #171a1b;
        }

        .two-columns {
            text-align: center;
            font-size: 0;
        }

        .two-columns .column {
            width: 100%;
            max-width: 300px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }

        .Info-report {
            width: 100%;
            padding: 15px 0 15px;
        }

        .info-song,
        .info-song th,
        .info-song td {
            border-collapse: collapse;
            text-align: center;
            padding: 3px;
            border: 2px solid #0a0a0a;
        }

        .info-song th {
            color: #ffffff;
            background-color: #171a1b;
        }
    </style>
</head>

<body>

    <center class="wrapper">
        <table class="main" width="100%">
            <!-- TOP BORDER -->
            <tr>
                <td height="8px" style="background-color: #171a1b"></td>
            </tr>
            <!-- LOGO SECTION -->
            <tr>
                <td style="padding: 14px 0 4px;">
                    <table width="100%">
                        <tr>
                            <td class="two-columns">
                                <table class="column">
                                    <tr>
                                        <td style="padding: 0 62px 10px;">
                                            <a href="#"><img src="https://i.ibb.co/S0NDP9V/modern.png"
                                                    width="180" title="Apollo's Title"alt=""></a>
                                        </td>
                                    </tr>
                                </table>

                                <table class="column">
                                    <tr>
                                        <td style="padding:8px 124px 10px">
                                            <a href="#">
                                                <img src="https://i.ibb.co/zZHZgWb/Recurso-1.png" alt="Apollo's icon"
                                                    width="35">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- BANNER IMAGE -->

            <tr>
                <td>
                    <img src="https://i.ibb.co/yYg5WTv/Banner-test.png" alt="Banner" width="600"
                        style="max-width: 100%;">
                </td>
            </tr>
            <!-- TITLE, TEXT & BUTTON -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align: center; padding: 15px 0 10px;">
                                <p style="font-size: 22px;font-weight:bold; margin:0;">
                                    {{ auth()->user()->username }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding: 15px 0 15px;">
                                <p style="font-size: 16px;font-weight:bold; margin:0;">
                                    El CONTENIDO REPORTADO FUE
                                </p>
                                @if ($song->sencillo == 0)
                                    <p style="font-size: 14px;font-weight:bold; margin:0;">
                                        - {{ $song->name_song }} -
                                    </p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:5px 100px 25px">
                                <table class="info-song" width="100%">
                                    <tr>
                                        <th>Colección</th>
                                        <th>Nombre</th>
                                        <th>Súbida</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if ($song->sencillo == 1)
                                                Sencillos
                                            @else
                                                Álbum
                                            @endif
                                        <td>
                                            @if ($song->sencillo == 0)
                                                {{ $song->infoAlbum($song) }}
                                            @else
                                                {{ $song->name_song }}
                                            @endif
                                        </td>
                                        <td>{{ $song->created_at->diffForHumans() }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>

                            <td style="text-align: center">
                                <p style="font-size: 14px;font-weight:bold; margin: 0 0 10px 0;">
                                    Debes retirar tu @if ($song->sencillo == 0)
                                        albúm
                                    @else
                                        canción
                                    @endif
                                </p>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <!-- FOOTER SECTION -->
            <tr>
                <td style="background-color: #26292b;">
                    <table width="100%">
                        <tr>
                            <td style="text-align: center; padding: 45px 20; color: #ffffff;">
                                {{-- <img src="https://i.ibb.co/tm4JcjR/Titulo-Black.png" alt="Titulo black" width="180"> --}}
                                <!-- <p style="font-size:18px; padding: 10px; margin: 0; color: #ffffff;">By DreamStudios</p> -->
                                <p style="font-size: 14px;padding: 45px; margin: 0;">© 2022</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>


</body>

</html>
