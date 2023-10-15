<?php
    session_start();
    error_reporting(0);
    $nameUser = $_SESSION['email'];
    if($nameUser === null || $nameUser === '') {
      header("location:login.php");
    }
?>
<!DOCTYPE HTML>
<html>

<head>

  <title>01_Main</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>


<body>

  <div class="col-12 w-100 d-flex align-items-center justify-content-between">
    <div class="titulo-main">
      <h1>Pagina Principal</h1>
    </div>
    <div class="img-main">
      <img src="logos\logo_01.bmp" class="mx-auto d-block img-login">
    </div>
  </div>
  <div class="w-100 d-flex justify-content-end mx-2 mr-3">
    <div class="dropdown">
      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false">
        Usuario: <?php echo $nameUser ?>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="login.php?cerrar_sesion=true">Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>
  <div class="d-flex align-items-start border">
    <div class="nav flex-column nav-pills me-3 vh-100 border" id="v-pills-tab" role="tablist"
      aria-orientation="vertical">
      <button class="nav-link text-uppercase mb-2 active" id="v-pills-Info-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Info" type="button" role="tab" aria-controls="v-pills-Info"
        aria-selected="true">Info</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Automatico-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Automatico" type="button" role="tab" aria-controls="v-pills-Automatico"
        aria-selected="false">Automatico</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Manuales-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Manuales" type="button" role="tab" aria-controls="v-pills-Manuales"
        aria-selected="false">Manuales</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-EntradaSalida-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-EntradaSalida" type="button" role="tab" aria-controls="v-pills-EntradaSalida"
        aria-selected="false">Entradas / Salidas</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Analogas-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Analogas" type="button" role="tab" aria-controls="v-pills-Analogas"
        aria-selected="false">ANALOGAS</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Parametros-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Parametros" type="button" role="tab" aria-controls="v-pills-Parametros"
        aria-selected="false">PARAMETROS</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Graficas-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Graficas" type="button" role="tab" aria-controls="v-pills-Graficas"
        aria-selected="false">GRAFICAS</button>
      <button class="nav-link text-uppercase mb-2" id="v-pills-Alarmas-tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-Alarmas" type="button" role="tab" aria-controls="v-pills-Alarmas"
        aria-selected="false">Alarmas</button>
    </div>
    <div class="tab-content p-2 w-100" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-Info" role="tabpanel" aria-labelledby="v-pills-Info-tab">
        <h3>Información:</h3>
      </div>
      <div class="tab-pane fade" id="v-pills-Automatico" role="tabpanel" aria-labelledby="v-pills-Automatico-tab">
        <p>Automatico</p>
        <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-5">
          <div>
            <label>MAN/AUTO</label>
            <img id="myImage" src="indicators/03_automatico/lpa_on_01.png" style="width:100px">
          </div>
          <div class="row mt-5">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column gap-4">
              <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_off_01.png'">PB_MAN</button>
              <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_off_01.png'">PB_PE</button>
              <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_off_01.png'">ALARM</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column gap-4">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_on_01.png'">PB_AUTO</button>
              <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_off_01.png'">PB_RESET</button>
              <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myImage').src='indicators/03_automatico/lpa_off_01.png'">COM_OK</button>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-Manuales" role="tabpanel" aria-labelledby="v-pills-Manuales-tab">
        <h3>Manuales:</h3>
        <div class="row mt-5">
          <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="flex-input mt-2">
              <label>M_01</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_01.png'">PB_01_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_01.png'">PB_01_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_02</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_02.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_02.png'">PB_02_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_02.png'">PB_02_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_03</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_03.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_03.png'">PB_03_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_03.png'">PB_03_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_04</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_04.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_04.png'">PB_04_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_04.png'">PB_04_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_05</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_05.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_05.png'">PB_05_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_05.png'">PB_05_OFF</button>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="flex-input mt-2">
              <label>M_06</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_01.png'">PB_06_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_01.png'">PB_06_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_07</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_01.png'">PB_07_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_01.png'">PB_07_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_08</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_01.png'">PB_08_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_01.png'">PB_08_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_09</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/09_manuales/lpm_on_01.png'">PB_09_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/09_manuales/lpm_off_01.png'">PB_09_OFF</button>
            </div>
            <div class="flex-input mt-2">
              <label>M_10</label>
              <img id="myImage" src="indicators/04_manuales/lpm_off_01.png" style="width:100px">
              <button type="button" class="btn btn-success"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_on_01.png'">PB_10_ON</button>
              <button type="button" class="btn btn-danger"
                onclick="document.getElementById('myImage').src='indicators/04_manuales/lpm_off_01.png'">PB_10_OFF</button>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-EntradaSalida" role="tabpanel" aria-labelledby="v-pills-EntradaSalida-tab">
        <h3>Entrada / Salida</h3>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-column gap-2 mt-4">
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_00.png" style="width:60px">
                <label>DI_00_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_01.png" style="width:60px">
                <label>DI_01_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_02.png" style="width:60px">
                <label>DI_02_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_03.png" style="width:60px">
                <label>DI_03_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_00.png" style="width:60px">
                <label>DI_04_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_01.png" style="width:60px">
                <label>DI_05_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_02.png" style="width:60px">
                <label>DI_06_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_03.png" style="width:60px">
                <label>DI_07_</label>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-column gap-2 mt-4">
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_00.png" style="width:60px">
                <label>D0_00</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_01.png" style="width:60px">
                <label>D0_01</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_02.png" style="width:60px">
                <label>D0_02</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdi_off_03.png" style="width:60px">
                <label>D0_03</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_00.png" style="width:60px">
                <label>D0_04</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_01.png" style="width:60px">
                <label>D0_05</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_02.png" style="width:60px">
                <label>D0_06</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/05_entradas_salidas/lpdo_off_03.png" style="width:60px">
                <label>D0_07</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-Analogas" role="tabpanel" aria-labelledby="v-pills-Analogas-tab">
        <h3>Analogas</h3>
        <div class="contenedor info mt-4">
          <p>Usuario: <span class="fw-bold">Alonso</span></p>
          <p>Es Autorizado: <span class="bg-success py-1 px-2 text-white rounded">true</span></p>
          <p>UserId: <span class="fw-bold">1</span></p>
          <h3 class="text-uppercase">All motos data:</h3>
          <table class="table w-75 table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">MOTOR</th>
                <th scope="col">HABILITADO</th>
                <th scope="col">POTENCIA(HP)</th>
                <th scope="col">VOLTAJE(V)</th>
                <th scope="col">CORRIENTE(A)</th>
                <th scope="col">TEMPERATURA(V)</th>
                <th scope="col" class="px-5">USO DIARIO(V)</th>
                <th scope="col">TOTAL HRS(V)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">M01_Enguaje</th>
                <td>True</td>
                <td>1</td>
                <td>220</td>
                <td>3.3</td>
                <td>45</td>
                <td>10, 1, 1, 2.0, 5.55</td>
                <td>24</td>
              </tr>
              <tr>
                <th scope="row">M02_Tina_Frontal</th>
                <td>True</td>
                <td>2</td>
                <td>220</td>
                <td>6.6</td>
                <td>46</td>
                <td>10, 20, 0, 9, 1, 6.6</td>
                <td>52</td>
              </tr>
              <tr>
                <th scope="row">M03_Tina_Trasera</th>
                <td>True</td>
                <td>3</td>
                <td>220</td>
                <td>9.9</td>
                <td>47</td>
                <td>1,2,0,0,3,1,7,7</td>
                <td>21</td>
              </tr>
              <tr>
                <th scope="row">M01_Intercambiadores</th>
                <td>True</td>
                <td>5</td>
                <td>220</td>
                <td>13.8</td>
                <td>48</td>
                <td>5,5,0,5,1,8,8</td>
                <td>32</td>
              </tr>
              <tr>
                <th scope="row">M01_Recuperación</th>
                <td>false</td>
                <td>10</td>
                <td>440</td>
                <td>17</td>
                <td>49</td>
                <td>0,0,0,0,0,0</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary btn-lg">Load</button>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-Parametros" role="tabpanel" aria-labelledby="v-pills-Parametros-tab">
        <h3>Parametros</h3>
        <div class="row mt-5">
          <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="d-flex align-items-center gap-2">
              <label for="T_01">T_01 (1-100):</label>
              <input type="number" class="p-1" id="T_01" name="T_01" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_02">T_02 (1-100):</label>
              <input type="number" class="p-1" id="T_02" name="T_02" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_03">T_03 (1-100):</label>
              <input type="number" class="p-1" id="T_03" name="T_03" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_04">T_04 (1-100):</label>
              <input type="number" class="p-1" id="T_04" name="T_04" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_05">T_05 (1-100):</label>
              <input type="number" class="p-1" id="T_05" name="T_05" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="d-flex align-items-center gap-2">
              <label for="T_06">T_06 (1-100):</label>
              <input type="number" class="p-1" id="T_06" name="T_06" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_07">T_07 (1-100):</label>
              <input type="number" class="p-1" id="T_07" name="T_07" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_08">T_08 (1-100):</label>
              <input type="number" class="p-1" id="T_08" name="T_08" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_09">T_09 (1-100):</label>
              <input type="number" class="p-1" id="T_09" name="T_09" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
            <div class="d-flex align-items-center gap-2 mt-3">
              <label for="T_10">T_10 (1-100):</label>
              <input type="number" class="p-1" id="T_10" name="T_10" min="1" max="100">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-Graficas" role="tabpanel" aria-labelledby="v-pills-Graficas-tab">
        <h3>Graficas</h3>
        <div class="d-flex justify-content-center mt-5">
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-Alarmas" role="tabpanel" aria-labelledby="v-pills-Alarmas-tab">
        <h3>Alarmas</h3>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-6 d-flex flex-column">
            <div class="d-flex flex-column gap-2 mt-4">
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_01.png" style="width:60px">
                <label>F_01_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_02.png" style="width:60px">
                <label>F_02_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_03.png" style="width:60px">
                <label>F_03_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_04.png" style="width:60px">
                <label>F_04_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_05.png" style="width:60px">
                <label>F_05_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_06.png" style="width:60px">
                <label>F_06_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_07.png" style="width:60px">
                <label>F_07_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_08.png" style="width:60px">
                <label>F_08_</label>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-6 d-flex flex-column">
            <div class="d-flex flex-column gap-2 mt-4">
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_01.png" style="width:60px">
                <label>F_09_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_02.png" style="width:60px">
                <label>F_10_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_03.png" style="width:60px">
                <label>F_11_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_04.png" style="width:60px">
                <label>F_12_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_05.png" style="width:60px">
                <label>F_13_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_06.png" style="width:60px">
                <label>F_14_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_07.png" style="width:60px">
                <label>F_15_</label>
              </div>
              <div class="d-flex align-items-lg-center gap-2 mt-3">
                <img id="myImage" src="indicators/09_alarmas/lpf_off_08.png" style="width:60px">
                <label>F__16</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="./js/js_lib_03.js"></script>
</body>

</html>