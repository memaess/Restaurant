@extends('administrator.layouts.app')

@section('title')
    NazResto | Dashboard Adminsitrator
@endsection

@section('content')
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
    
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index.html">
                        <img class="img-fluid" src="{{ asset('') }}csjs/png/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close">
                                        <i class="feather icon-x input-group-text"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
                                        <i class="feather icon-search input-group-text"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    {{-- <span class="badge bg-c-green">3</span> --}}
                                </div>
                            </div>
                        </li>

                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('') }}csjs/jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock
                                        </a>
                                    </li>

                                    <li>
                                        <a href="auth-sign-in-social.html">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @include('administrator.layouts.chatUser')

        @include('administrator.layouts.showChatinner')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="index.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="">
                                    <a href="navbar-light.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-menu"></i>
                                        </span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-content">
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="feather icon-home bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Dashboard</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"><i class="feather icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.index') }}">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-8">
                                            <div class="card table-card">
                                                <div class="card-header">
                                                    <h5>New Products</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        <li><i class="feather icon-maximize full-card"></i></li>
                                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                        <li><i class="feather icon-trash close-card"></i></li>
                                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="card-block p-b-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover m-b-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Product Code</th>
                                                                    <th>Customer</th>
                                                                    <th>Status</th>
                                                                    <th>Rating</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Sofa</td>
                                                                    <td>#PHD001</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="29484b4a694e44484045074a4644">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Computer</td>
                                                                    <td>#PHD002</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e6858285a6818b878f8ac885898b">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-success">In Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Mobile</td>
                                                                    <td>#PHD003</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afdfdeddefc8c2cec6c381ccc0c2">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Coat</td>
                                                                    <td>#PHD004</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c5c4d4e7c0cac6cecb89c4c8ca">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-success">In Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Watch</td>
                                                                    <td>#PHD005</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3d3a3d1e39333f3732703d3133">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-success">In Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shoes</td>
                                                                    <td>#PHD006</td>
                                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5b5b4b785a2a8a4aca9eba6aaa8">[email&#160;protected]</a></td>
                                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                                    <td>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection