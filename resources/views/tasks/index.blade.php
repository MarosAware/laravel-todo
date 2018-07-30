@extends('layouts.master')

@section('nav')
    <li class="nav-item active">
        <a class="nav-link" href="#">Add task</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Add category</a>
    </li>

    @endsection

@section('content')
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <ul class="list-unstyled components">
                <p>To Do List</p>
                <li>
                    <a href="#">Add category</a>
                </li>
                <li>
                    <a href="#">Add task</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tasks</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Completed</a>
                        </li>
                        <li>
                            <a href="#">Uncompleted</a>
                        </li>
                        <li>
                            <a href="#">something</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <div class="row">
                <div class="md-col-12 mb-4">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="md-col-12">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, fugit?</p>

                    <div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, fugit?</p>


                    <div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, fugit?</p>


                    <div class="line"></div>

                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, fugit?</p>

                </div>


            </div>

        </div>
    </div>
@endsection
