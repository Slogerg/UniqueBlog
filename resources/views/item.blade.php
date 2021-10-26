@extends('layouts.app')
@section('content')
        <main>
            <div class="container-xxl">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Category 1</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Category 2
                        </li>
                    </ol>
                </nav>
                <div class="item-body">
                    <div class="item-header row">
                        <div class="col-3 item-title">
                            <h1>Title</h1>
                            <h3 class="discription">
                                Some quick example text to build on the card
                                title and make up the bulk of the card's
                                content.
                            </h3>
                            <div class="data-section">
                                <small>27.05.2020</small>
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
