<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Manahil's Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.css" />
    
    <!-- <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.js" /> -->
    <!--- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">  --->
    <!-- Custom CSS For Sidebar -->
    <link rel="stylesheet" href="\assets\css\style5.css">

    <!-- Font Awesome JS -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-header">
                <div class = "container">
                    <a href = "#" target = "blank">
                        <img src = "\assets\images\logo.png" alt "Manahil's Dashboard" width = "180">
                    </a>
                </div>
            </div>

            <ul class="list-unstyled components">
                    <li>
                        <a href="/all_posts.php"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"/>
                            </svg>
                            All Posts
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#attendanceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"/>
                            </svg>
                            Posts
                        </a>
                        <ul class="collapse list-unstyled" id="attendanceSubmenu">
                            <li>
                                <a href="#">Create Post</a>
                            </li>
                        </ul>
                    </li> -->
            </ul>

            <!--- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> --->
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg nav_head">
                <div class="container-fluid " >
                    <button type="button" id="sidebarCollapse" class="navbar-btn" style = "background-color:transparent; color:white;">
                        <i class="fa-solid fa-angle-left fs-12"></i>
                        <!--- <span></span>
                        <span></span>
                        <span></span> --->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!---<li class="nav-item active">
                                <a  class="nav-link" onclick="history.back();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentcolor" class="bi bi-arrow-left navebar_icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                    </svg>
                                </a>
                            </li>--->
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <!--- Home Icon --->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-house navebar_icon" viewBox="0 0 16 16">
                                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                    </svg>
                                </a>
                            </li>
                                <li class="nav-item">
                                    <!--- logout icon --->
                                    <a class="nav-link"  href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right navebar_icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
<script>
    function buttonStatus(){
        const myButton = document.getElementById('in');
        myButton.style.display = 'none';
        // const myButton1 = document.getElementById('out');
        // myButton1.style.display = 'inline-block';
    }
    function buttonStatus2(){
        const myButton = document.getElementById('out');
        myButton.style.display = 'none';
    }
//     window.onload = () =>{
//     var anchors = $('.sidebar a')
//     var defUrl = window.location.href;
//     let width = window.innerWidth;
//     var selected;
//     $(anchors).each(function(index){
//         var href = anchors[index].href;
//         if(defUrl.includes(href)){
//             selected = $(anchors[index]);
//             $(selected).addClass('nav-active')
//             // $(selected).parents('.collapse').siblings('.collapsed').addClass('nav-active');
//             $(selected).parents('.collapse').addClass('active');
//         }
//         if(width>880){
//                 $(selected).parents('.collapse').addClass('show');
//             }
//     })
// };

</script>