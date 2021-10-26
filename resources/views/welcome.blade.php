@extends('layouts.app')
@section('content')
        <main>
            <div class="container-xxl page-body">
                <div class="row card-wrapper">
                    @foreach($items as $item)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card" style="width: 18rem">
                            <img
                                src="../images/marry.jpg"
                                class="card-img-top"
                                alt="..."
                            />
                            <div class="card-body">
                                <div class="header-card">
                                    <h4 class="card-title">{{$item->title}}</h4>
                                    <span class="badge badge-primary"
                                        >{{$item->category}}</span
                                    >
                                </div>
                                <p class="card-text">
                                    {{$item->excerpt}}
                                </p>
                                <div class="footer-card">
                                    <a href="{{route('single',$item->id)}}" class="btn btn-primary"
                                        >Go somewhere</a
                                    >
                                    <small>{{$item->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
        <footer class="container-xxl footer">
            created by Unique system logic
        </footer>
        @endsection
