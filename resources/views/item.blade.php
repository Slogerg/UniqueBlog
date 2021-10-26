@extends('layouts.app')
@section('content')
        <main>
            <div class="container-xxl">
                <div class="item-body">
                    <div class="item-header row">
                        <div class="col-3 item-title">
                            <h1>{{$item->title}}</h1>
                            <h3 class="discription">
                                {{$item->text}}
                            </h3>
                            <div class="data-section">
                                <small>{{$item->created_at}}</small>
                            </div>
                        </div>
                        <div class="col-9 image-wrapper">
                            <img src="../images/marry.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @endsection
