@extends('layouts.app')
@section('content')
    <body>
        <div class="main">
            <div class="container-xxl">
                <div class="add-button">
                    <a href="{{route('post.create')}}"><i class="far fa-plus-square"></i></a>
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
                    @foreach($items as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="{{route('post.edit',$item->id)}}"><i class="far fa-edit"></i></a>
{{--                                <a href="{{route('post.destroy',$item->id)}}"><i class="far fa-trash-alt"></i></a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
