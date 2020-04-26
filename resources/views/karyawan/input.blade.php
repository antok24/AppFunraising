<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table, th, td {
            border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    SELAMAT DATANG DI APP FUNRAISING
                </div>
                    <table style="width:100%">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>alamat</th>
                            <th>nomo telfon</th>
                            <th>Actions</th>
                        <tr>
                    </thead>
                        <tbody>
                        @foreach($data as $datakaryawan)
							<tr>
								<td>{{$datakaryawan->nama_karyawan}}</td>
								<td>{{$datakaryawan->alamat}}</td>
								<td>{{$datakaryawan->no_hp}}</td>
								<td class="actions">
									<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
									<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
									<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
									<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
								</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </body>
</html>
