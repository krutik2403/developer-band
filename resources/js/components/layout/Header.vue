<template>
    <!-- header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg bg-dark static-nav" style="background-color: #000000;">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h3>Developer's Band</h3>
                </a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </button>
                <div class="collapse navbar-collapse" id="xenav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <router-link to="/"><a class="nav-link">Home</a></router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link to="/story"><a class="nav-link">Story</a></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/contact"><a class="nav-link">Contact</a></router-link>
                        </li>
                    </ul>
                </div>
            </div>            
        </nav>
        <!-- side menu -->
        <div class="side-menu">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>       
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Story</a>
                        </li>                 
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="side-footer w-100">
                    <ul class="social-icons-simple white top40">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
                    </ul>
                    <p class="whitecolor">&copy; 2019 Developer's Band. Made With Love by themesindustry</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->
    </header>
    <!-- header -->
</template>

<script>
export default {
    
}
</script>
