@extends('layouts.app')
@section('content')
    <body>
        <main>
            <div class="container-xxl">
                <form action="{{route('post.store')}}" method = "POST">
                    @method('POST')
                    @csrf
                    <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Назва посту</label>
                        <input
                            type="text"
                            class="form-control"
                            id="title"
                            name = "title"
                            aria-describedby="emailHelp"
                            placeholder="Введіть назву посту"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"
                            >Короткий текст статті</label
                        >
                        <textarea
                            name = "excerpt"
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"
                            >Великий текст статті</label
                        >
                        <textarea
                            class="form-control"
                            id="text"
                            name="text"
                            rows="3"
                        ></textarea>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Шлях до фото</label>--}}
{{--                        <input--}}
{{--                            type="text"--}}
{{--                            class="form-control"--}}
{{--                            id="exampleInputEmail1"--}}
{{--                            aria-describedby="emailHelp"--}}
{{--                            placeholder="Шлях до фото"--}}
{{--                        />--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="name">Your photo (optionally)</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlSelect1"
                            >Оберіть категорію</label
                        >
                        <input type="text" name="category">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
        </main>
    </body>
@endsection
