<?php
require_once('config.php');

$sql = "SELECT COUNT(*) as Contador FROM infra WHERE data = 0;";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="menuContainer"></div>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Integradora <br />5-TID1</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Sección I</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Sección II</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Sección III</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Sección IV</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard Project</span>
      </div>
    </nav>
  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona I</div>
            <?php if(!empty($arr_users)){?>
                <?php foreach($arr_users as $user){ ?>
                    <tr>
                        <td><?php echo $user['Contador']; ?> Personas han entrado </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            <div class="indicator">           
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona I');"></i>
        </div>
        
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
</script>
<script type="text/javascript">
function actualizar(){
  location.reload(true);
}
  setInterval("actualizar()",3000);
</script>
<script>
    $(document).ready(function () {
      $('.menuContainer').load('menu.html');
    });
  </script>
</body>
</html>