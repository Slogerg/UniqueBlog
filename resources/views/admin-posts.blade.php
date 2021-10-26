@extends('layouts.app')
@section('content')
    <body>
        <div class="main">
            <div class="container-xxl">
                <div class="add-button">
                    <a href=""><i class="far fa-plus-square"></i></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Пост</th>
                            <th scope="col">Автор</th>
                            <th scope="col">Дата публікації</th>
                            <th scope="col">Дії</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>22.09.2019</td>
                            <td>
                                <a href=""><i class="far fa-edit"></i></a>
                                <a href=""><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>22.09.2019</td>
                            <td>
                                <a href=""><i class="far fa-edit"></i></a>
                                <a href=""><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>22.09.2019</td>
                            <td>
                                <a href=""><i class="far fa-edit"></i></a>
                                <a href=""><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
