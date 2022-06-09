<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
     ul {
      list-style-type: none;
     }
    ul { list-style: none outside none; margin:0; padding: 0; }
    li { float: left; margin: 0 10px; }
    #addTodoBtn{
      margin-top: 33PX;
      margin-left: -20px;
    }
    #addCategoryBtn{
      margin-top: 33PX;
      margin-left: -20px;
    }
    a:link {
      color: blue;
    }

    /* visited link */
    a:visited {
      color: green;
    }

    /* mouse over link */
    a:hover {
      color: black;
    }

    /* selected link */
    a:active {
      color: black;
    }
  </style>
</head>
<body> 
 
<div class="container">
  <h2>TO DO LIST</h2>
  @yield('content')
</div>

</body>
@yield('scripts')
</html>
