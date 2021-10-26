@extends('layouts.app')
@section('content')
    <body>
        <main>
            <div class="container-xxl">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Назва посту</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Введіть назву посту"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"
                            >Короткий текст статті</label
                        >
                        <textarea
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
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Шлях до фото</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Шлях до фото"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"
                            >Оберіть категорію</label
                        >
                        <select
                            class="form-control"
                            id="exampleFormControlSelect1"
                        >
                            <option>Категорія 1</option>
                            <option>Категорія 2</option>
                            <option>Категорія 3</option>
                            <option>Категорія 4</option>
                            <option>Категорія 5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
        </main>
    </body>
@endsection
