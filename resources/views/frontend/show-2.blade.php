<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <style>



        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.88rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: left;
           /* background-color: #6200EA */
           background: #F8F8FF; 
        }

        i {
            font-style: italic
        }

        .container {
            margin-top: 20px
        }

        .card {
            box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
            border-width: 0;
            transition: all .2s
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
        }



        .widget-subheading {
            color: #858a8e;
            font-size: 10px
        }


        .card-header .header-icon {
            font-size: 1.65rem;
            margin-right: 0.625rem
        }

        .card-header.card-header-tab .card-header-title {
            display: flex;
            align-items: center;
            white-space: nowrap
        }

        .btn-actions-pane-right {
            margin-left: auto;
            white-space: nowrap
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .scroll-area-sm {
            height: 750px;
            overflow-x: hidden;
            overflow-y: ;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125)
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0
        }

        .todo-indicator {
            position: absolute;
            width: 4px;
            height: 60%;
            border-radius: 0.3rem;
            left: 0.625rem;
            top: 20%;
            opacity: .6;
            transition: opacity .2s
        }

        .bg-warning {
            background-color: #f7b924 !important
        }

        .widget-content {
            padding: 1rem;
            flex-direction: row;
            align-items: center
        }

        .widget-content .widget-content-wrapper {
            display: flex;
            flex: 1;
            position: relative;
            align-items: center
        }

        .widget-content .widget-content-right.widget-content-actions {
            visibility: hidden;
            opacity: 0;
            transition: opacity .2s
        }

        .widget-content .widget-content-right {
            margin-left: auto
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        .btn {
            position: relative;
            transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s
        }

        .btn-outline-success {
            color: #3ac47d;
            border-color: #3ac47d
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #3ac47d;
            border-color: #3ac47d
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #3ac47d;
            border-color: #3ac47d
        }

        .btn-primary {
            color: #fff;
            background-color: #3f6ad8;
            border-color: #3f6ad8
        }

        .btn {
            position: relative;
            transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
            outline: none !important
        }

        .card-footer {
            /* background-color: #fff*/
        }

        .mt-100 {
          margin-top: 100px
      }





    </style>



    <nav class="navbar navbar-expand-lg navbar-white bg-white" style="  box-shadow: 0px 1px 10px #999;" >
        <div class="container" style="margin-top:-5px;">
        <a class="navbar-brand" href="#"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 329.59 65.1" id="logo-footer"><defs><style>.logo-1{fill:#14bdad;}#logo-footer{width:220px}</style></defs><g><path class="logo-1" d="M44.92,65.1h-29v-7h29a25.51,25.51,0,1,0,0-51h-29V0h29a32.55,32.55,0,1,1,0,65.1Z"/><polygon class="logo-1" points="19.17 51.72 0 32.55 19.17 13.38 24.15 18.36 9.96 32.55 24.15 46.74 19.17 51.72"/><polygon class="logo-1" points="39.07 51.72 34.09 46.74 48.29 32.55 34.09 18.36 39.07 13.38 58.24 32.55 39.07 51.72"/><path class="logo-1" d="M103.64,22h9.6c6.91,0,11.65,4.16,11.65,10.56s-4.74,10.56-11.65,10.56h-9.6ZM113,39.1c4.19,0,6.94-2.5,6.94-6.55S117.19,26,113,26h-4.47V39.1Z"/><path class="logo-1" d="M147.94,39.19v3.92H131.58V22h16v3.92H136.44V30.5h9.81v3.8h-9.81v4.89Z"/><path class="logo-1" d="M153.19,41l1.66-3.68a12.39,12.39,0,0,0,7,2.2c2.9,0,4.07-1,4.07-2.26,0-3.95-12.28-1.24-12.28-9.08,0-3.6,2.9-6.58,8.9-6.58a14.18,14.18,0,0,1,7.34,1.87l-1.51,3.71a11.91,11.91,0,0,0-5.86-1.66c-2.89,0-4,1.09-4,2.41,0,3.9,12.28,1.21,12.28,9,0,3.53-2.93,6.55-9,6.55A15,15,0,0,1,153.19,41Z"/><path class="logo-1" d="M177.12,22H182V43.11h-4.88Z"/><path class="logo-1" d="M204.3,32.22h4.47v8.57a14.57,14.57,0,0,1-8.54,2.69c-6.64,0-11.53-4.56-11.53-10.93s4.89-10.92,11.62-10.92a11.24,11.24,0,0,1,8.84,3.65L206,28.18a7.12,7.12,0,0,0-5.46-2.39,6.51,6.51,0,0,0-6.91,6.76,6.52,6.52,0,0,0,6.85,6.76,7.76,7.76,0,0,0,3.8-.9Z"/><path class="logo-1" d="M235.69,22V43.11h-4L221.14,30.29V43.11h-4.83V22h4.05l10.5,12.82V22Z"/><path class="logo-1" d="M260.07,39.19v3.92H243.71V22h16v3.92H248.57V30.5h9.81v3.8h-9.81v4.89Z"/><path class="logo-1" d="M280.44,43.11l-4.08-5.88h-4.49v5.88H267V22h9.14c5.64,0,9.17,2.93,9.17,7.66A6.87,6.87,0,0,1,281,36.32l4.74,6.79ZM275.85,26h-4v7.37h4c3,0,4.5-1.39,4.5-3.69S278.84,26,275.85,26Z"/><path class="logo-1" d="M292.17,22h4.89V39.13h10.59v4H292.17Z"/><path class="logo-1" d="M321.38,35.63v7.48h-4.89V35.57L308.31,22h5.2l5.64,9.38L324.79,22h4.8Z"/></g></svg></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disasdvdsvbled</a>



                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>


    <div class="row d-flex  container-fluid mt-5">
        <div class="col-md-3">
            <div class="card-hover-shadow-2x card" style="box-shadow: 0px 1px 10px #999;" >
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal float-left">
                        <i class="fa fa-tasks"></i>&nbsp;Task Lists
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="scroll-area-sm">

                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content ">
                            <ul class=" list-group list-group-flush">

                                @for ($i = 0; $i < 10; $i++)

                                    <li class="list-group-item">
                                        <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                                            <div class="card-header">
                                                <div class="float-left">
                                                    <span class="badge bg-danger">High priority</span> <span
                                                        class="badge bg-success">High priority</span>

                                                </div>

                                                <div class="float-right">
                                                    <button class="border-0 btn-transition btn btn-success btn-sm"> <i
                                                            class="fa fa-check"></i></button>
                                                    <button class="border-0 btn-transition btn btn-danger ml-1 btn-sm">
                                                        <i class="fa fa-trash"></i> </button>

                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <p class="card-text">Some quick example text to build on the card
                                                    title.</p>



                                                <span class="badge bg-info">front-end</span> <span
                                                    class="badge bg-info">back-end</span>

                                            </div>

                                            <div class="card-footer">

                                                <div class="float-left" style="height: auto;">
                                                    <span class="badge">
                                                        <i class="fa fa-clock-o" aria-hidden="true"
                                                            style="font-size:25px;height: auto;"></i>
                                                        2 Days
                                                    </span>
                                                </div>

                                                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava2-bg.png"
                                                    alt="avatar 1" style="width: 30px; height: auto;"
                                                    class="float-right">


                                            </div>

                                        </div>

                                    </li>
                                @endfor


                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-footer form-inline">
                    {{-- <div class="col-md-12 mb-3">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Task">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary btn-sm rounded-right"> <i class="fa fa-plus"></i>
                                </button>
                            </div>

                        </div>
                    </div> --}}



                </div>
            </div>
        </div>
    </div>






    


    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" id="exampleModalLong" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" placeholder="Task Title">
                    </div>

                    <div class="form-group">
                        <label for="priorty">Priorty</label>
                        <br>

                        <input type="radio" class="btn-check" name="priorty" id="low"
                            autocomplete="off" checked>
                        <label class="btn btn-outline-success btn-sm" for="low">Low</label>

                        <input type="radio" class="btn-check" name="priorty" id="medium"
                        autocomplete="off" >
                       <label class="btn btn-outline-primary btn-sm" for="medium">Medium</label>


                        <input type="radio" class="btn-check" name="priorty" id="high"
                            autocomplete="off">
                        <label class="btn btn-outline-danger btn-sm" for="high">High</label>


                    </div>


                    <div class="form-group ">
                        <label for="priorty">Tickets</label>
                        <br>

                        <input type="checkbox" class="btn-check" name="tickets[]" id="frontend" value="frontend" checked autocomplete="off">
                        <label class="btn btn-outline-info btn-sm" for="frontend"> Front-end</label>

                        <input type="checkbox" class="btn-check"   name="tickets[]"  value="backend" id="backend" autocomplete="off">
                        <label class="btn btn-outline-info btn-sm" for="backend">back-end</label>

                        <input type="checkbox" class="btn-check"   name="tickets[]"  value="bug" id="bug" autocomplete="off">
                        <label class="btn btn-outline-info btn-sm" for="bug">Bug</label>

                        <input type="checkbox" class="btn-check"   name="tickets[]"  value="bug" id="mobile" autocomplete="off">
                        <label class="btn btn-outline-info btn-sm" for="mobile">Mobile</label>

                       
                    </div>

                    <div class="form-group">
                        <label for="file" >File</label>
                        <input type="file" name="file" class="form-control" id="">
                    </div>


                    <div class="form-group">
                        <label for="users" >Users</label>
                        <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                            <option value="HTML">HTML</option>
                            <option value="Jquery">Jquery</option>
                            <option value="CSS">CSS</option>
                            <option value="Bootstrap 3">Bootstrap 3</option>
                            <option value="Bootstrap 4">Bootstrap 4</option>
                            <option value="Java">Java</option>
                            <option value="Javascript">Javascript</option>
                            <option value="Angular">Angular</option>
                            <option value="Python">Python</option>
                            <option value="Hybris">Hybris</option>
                            <option value="SQL">SQL</option>
                            <option value="NOSQL">NOSQL</option>
                            <option value="NodeJS">NodeJS</option>
                        </select> 
                          </div>
                    

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
    removeItemButton: true,
    maxItemCount:5,
    searchResultLimit:5,
    renderChoiceLimit:5
    });
    
    
    });
    </script>

</body>

</html>
