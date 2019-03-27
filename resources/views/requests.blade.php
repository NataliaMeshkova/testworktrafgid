<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div>
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Widgets</a> </div>
    <div><h1 style="color:white"><a href="{{url('/')}}">Заказы</a></h1></div><div id="offers"><h1 style="color:white"><a>Товары</a></h1></div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box"  id="bblock">
          <div class="widget-title">
            <h5>Заказы</h5>
          </div>
          <div class="widget-content nopadding" id="bblock">
            <table class="table table-striped table-bordered" >
              <thead>
                <tr>
                  <th>Номер заказа</th>
                  <th>Имя товара</th>
                  <th>Цена</th>
                  <th>Количество</th>
                  <th>Имя оператора</th>
                </tr>
              </thead>
              <tbody>
              @foreach($requests as $request)
                <tr>
                  <td>{{$request->id}}</td>
                  <td>{{$request->name}}</td>
                  <td>{{$request->price}}</td>
                  <td>{{$request->count}}</td>
                  <td>{{$request->fio}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
