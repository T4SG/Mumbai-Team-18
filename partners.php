<?php
session_start();
require('db_connect.php');
$_SESSION['user_id']=1;
if(!isset($_SESSION['user_id']))
{
	header('Location:login.php');
}
else
{
	$user_id=$_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title></title>
    <link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script src="js/jquery.min.js"></script> 
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>

    <script>
    function fetch_tasks()
    {
        $.post( "fetch_tasks.php", function( data ) {
        $( "#tasks_div" ).html( data );
        });
    }
    fetch_tasks();
    </script>
</head>
<body class="background-dark">
    <div class="logo">
        <h4><a href="index-2.html">HappyHeartsFund</strong></a></h4>
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="index-2.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
                    <ul id="components-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="component_calendar.html">Calendar</a></li>
                        <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                        <li class=""><a href="component_gallery.html">Gallery</a></li>
                        <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                        <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                        <li class=""><a href="component_list_groups.html">List Groups</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
                    <ul id="tables-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                        <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
                    <ul id="grid-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="grid_basic.html">Basic</a></li>
                        <li class=""><a href="grid_live.html">Live</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
                    <ul id="special-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                        <li class=""><a href="special_invoice.html">Invoice</a></li>
                        <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                        <li><a target="_blank" href="login.html">Login</a></li>
                        <li><a target="_blank" href="error.html">Error Page</a></li>
                        <li><a href="http://demo.flatlogic.com/3.1/transparent/landing.html" data-no-pjax>Landing</a></li>
                        <li><a href="http://demo.flatlogic.com/3.1/transparent/index.html" data-no-pjax>Transparent</a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
                    <ul id="menu-levels-collapse" class="panel-collapse collapse">
                        <li><a href="#">Item 1.1</a></li>
                        <li><a href="#">Item 1.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                            <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                                    <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.1</a></li>
                                        <li><a href="#">Item 3.2</a></li>
                                        <li><a href="#">Item 3.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Item 2.2</a></li>
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                                    <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.4</a></li>
                                        <li><a href="#">Item 3.5</a></li>
                                        <li><a href="#">Item 3.6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
        </nav>    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
        </header>        <div class="content container">
        <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
        <div class="row">
            <div class="col-lg-8" id="tasks_div">
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../transparent/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
        <script src="lib/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="lib/jquery.sparkline/index.js"></script>

        <script src="lib/backbone/backbone.js"></script>
        <script src="lib/backbone.localStorage/backbone.localStorage-min.js"></script>

        <script src="lib/d3/d3.min.js"></script>
        <script src="lib/nvd3/nv.d3.min.js"></script>

        <!-- page application js -->
        <script src="js/index.js"></script>
        <script src="js/chat.js"></script>

        <!-- page template -->
        <script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="img/2.jpg" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>

</body>

<!-- Mirrored from demo.flatlogic.com/3.1/white/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2015 10:02:57 GMT -->
</html>
