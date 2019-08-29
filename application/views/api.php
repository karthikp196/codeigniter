<?php
include('header.php');
?>

<div class="container">
<h1 class='text-center'>Api calls</h1>

<?php
$curl = curl_init();
$url = "https://api-football-v1.p.rapidapi.com/v2/fixtures/league/4";
$api = array('X-RapidAPI-Key'=>'83b90bd906msh99b36a85811b776p12b4d0jsnace482e505b7');
curl_setopt ($curl, CURLOPT_URL,$url);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);  
curl_setopt($curl, CURLOPT_HTTPHEADER,[
    'X-RapidAPI-Host: api-football-v1.p.rapidapi.com',
    'X-RapidAPI-Key: 83b90bd906msh99b36a85811b776p12b4d0jsnace482e505b7',
    
  ]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);  
$contentstring = curl_exec ($curl);
curl_close ($curl);
$data = json_decode($contentstring);
var_dump($data);
?>

<div class="row">
<div class="col-lg-4 col-md-6">

    <!--Panel-->
    <div class="card">
      <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Features
        List</h3>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
        </ul>
        <p class="text-small text-muted mb-0 pt-3">* At vero eos et accusamus et iusto ducimus.</p>
      </div>
    </div>
    <!--/.Panel-->

  </div>
  <!-- Grid column -->

  <div class="col-lg-4 col-md-6">

    <!--Panel-->
    <div class="card">
      <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Features
        List</h3>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
        </ul>
        <p class="text-small text-muted mb-0 pt-3">* At vero eos et accusamus et iusto ducimus.</p>
      </div>
    </div>
    <!--/.Panel-->

  </div>
  <!-- Grid column -->

  <div class="col-lg-4 col-md-6">

    <!--Panel-->
    <div class="card">
      <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Features
        List</h3>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
        </ul>
        <p class="text-small text-muted mb-0 pt-3">* At vero eos et accusamus et iusto ducimus.</p>
      </div>
    </div>
    <!--/.Panel-->

  </div>
  <!-- Grid column -->

</div>

</div>


<?php
include('footer.php');
?>