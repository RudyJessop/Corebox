<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thank you for Using CoreBox | Core Tech Labs, Inc</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
    body{font-family: Lato; color:#555;}
    .central{
      position: relative;
      margin:100px 20px;
      width:auto;
      text-align: center;
    }



    </style>

  </head>
  <body>
  <div class="container-fluid">

    <div class="central">
      <img src="http://rudyjessop.com/wp-content/themes/torch/images/corelabslogo.png" title="Core Tech Labs">
      <h1>Thank you for Using CoreBox | Core Tech Labs, Inc</h1>
      <span>v.1.0.5</span>
    </div>

    <div class="container">

        <div class="row">

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">Whats Installed</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <tr>
                        <td>OS</td>
                        <td><?php echo php_uname(); ?> </td>
                    </tr>
                    <tr>
                        <td>Apache Version</td>
                        <td><?php echo apache_get_version(); ?></td>
                    </tr>
                    <tr>
                        <td>PHP Version</td>
                        <td><?php echo phpversion(); ?></td>
                    </tr>
                    <tr>
                        <td>MySQL Version</td>
                        <td>
                        <?php $link = mysql_connect('localhost', 'root', 'root');
                          if(!$link){die('Could not connect:'. mysql_error());}
                          printf(mysql_get_server_info());
                        ?>
                        </td>
                    </tr>
                    <tr>
                    <?php
                        // $redis = new Redis();
                        // $redis->connect('127.0.0.1', 6379);
                       ?>
                        <td>Redis</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HHVM</td>
                        <td>
                        <?php if( define('HHVM_VERSION')){
                            define('HHVM_VERSION');
                          }
                          else{
                            echo "HHVM is not installed";
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Composer</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Git</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Ansible</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>New Relic</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Node.js and NPM</td>
                        <td> </td>
                    </tr>


                  </table>
                </div>
            </div>
          </div>

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">MySQL Settings</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td>Hostname</td>
                      <td class="success">localhost</td>
                    </tr>
                    <tr>
                      <td>Username</td>
                      <td class="success">root</td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td class="success">root</td>
                    </tr>
                    <tr>
                      <td>Database</td>
                      <td class="success">ctl</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">SSH Info</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td>SSH Host</td>
                      <td class="success"><?php echo $_SERVER['SERVER_ADDR'] ?></td>
                    </tr>
                    <tr>
                      <td>SSH User</td>
                      <td class="success">vagrant</td>
                    </tr>
                    <tr>
                      <td>SSH Password</td>
                      <td class="success">vagrant</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">New Relic Setup</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <tr>
                      <td>SSH Host</td>
                      <td class="success"><?php echo $_SERVER['SERVER_ADDR'] ?></td>
                    </tr>
                    <tr>
                      <td>SSH User</td>
                      <td class="success">vagrant</td>
                    </tr>
                    <tr>
                      <td>SSH Password</td>
                      <td class="success">vagrant</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">New Relic Setup</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <tr>
                      <td>SSH Host</td>
                      <td class="success"><?php echo $_SERVER['SERVER_ADDR'] ?></td>
                    </tr>
                    <tr>
                      <td>SSH User</td>
                      <td class="success">vagrant</td>
                    </tr>
                    <tr>
                      <td>SSH Password</td>
                      <td class="success">vagrant</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>

          <!-- Information -->
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">PHP Extensions Installed</h3></div>
                <div class="panel-body">
                  <table class="table table-bordered table-hover">
                  <?php
                  $php = get_loaded_extensions();
                  asort($php);
                  foreach ($php as $key) :
                  ?>
                  <tr>
                    <td class="info"><?php echo $key; ?></td>
                  </tr>
                  <?php endforeach;?>
                </div>
            </div>
          </div>

        </div>

    </div>

  </div>

  </body>
</html>