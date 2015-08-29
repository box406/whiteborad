<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DDD</title>

  <!-- Bootstrap Core CSS -->
  <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="../../dist/css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="../../bower_components/morrisjs/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">DDD</a>
      </div>
      <!-- /.navbar-header -->

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
      <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
              </div>
              <!-- /input-group -->
            </li>
            <li>
            <a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
            <a href="<?php echo site_url(); ?>/blog/post"><i class="fa fa-pencil fa-fw"></i> 記事を書く</a>
            </li>

          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div style="padding-top: 20px"></div>  
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">          
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-clock-o fa-fw"></i> Timeline
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <ul class="timeline">
                <li class="timeline-inverted">
                  <div class="timeline-badge"><i class="fa fa-check"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge info"><i class="fa fa-save"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Lorem ipsum dolor</h4>
                      <p><small class="text-muted"><i class="fa fa-clock-o"></i> 2015/12/13 12:12:11</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                      <hr />
                      <ul class="list-inline">
                        <li><i class="fa fa-thumbs-o-up"></i> <a href="">いいね (10)</a></li>
                        <li><i class="fa fa-comment"></i> <a href="">コメント (10)</a></li>
                        <li><i class="glyphicon glyphicon-pushpin"></i> <a href="">ピンする</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bell fa-fw"></i> Notifications
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <i class="fa fa-comment fa-fw"></i> New コメント
                  <span class="pull-right text-muted small"><em>4 minutes ago</em>
                  </span>
                </a>
                <a href="#" class="list-group-item">
                  <i class="fa fa-thumbs-o-up"></i> New いいね 
                  <span class="pull-right text-muted small"><em>12 minutes ago</em>
                  </span>
                </a>
                <a href="#" class="list-group-item">
                  <i class="fa fa-thumb-tack fa-fw"></i> New ピン
                  <span class="pull-right text-muted small"><em>27 minutes ago</em>
                  </span>
                </a>
              </div>
              <!-- /.list-group -->
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
          
          <div class="chat-panel panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-thumb-tack fa-fw"></i>
              Pin
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <ul class="chat">
                <li class="left clearfix">
                  <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font">Jack Sparrow</strong>
                      <small class="pull-right text-muted">
                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                      </small>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                  </div>
                </li>
                <li class="right clearfix">
                  <span class="chat-img pull-right">
                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <small class=" text-muted">
                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                      <strong class="pull-right primary-font">Bhaumik Patel</strong>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                  </div>
                </li>
                <li class="left clearfix">
                  <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font">Jack Sparrow</strong>
                      <small class="pull-right text-muted">
                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                  </div>
                </li>
                <li class="right clearfix">
                  <span class="chat-img pull-right">
                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                  </span>
                  <div class="chat-body clearfix">
                    <div class="header">
                      <small class=" text-muted">
                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                      <strong class="pull-right primary-font">Bhaumik Patel</strong>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="../../bower_components/raphael/raphael-min.js"></script>
  <script src="../../bower_components/morrisjs/morris.min.js"></script>
  <script src="../../js/morris-data.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../../dist/js/sb-admin-2.js"></script>

</body>
</html>
