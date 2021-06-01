<?php foreach($data['updates'] as $update)  ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<link rel="shortcut icon" href="data:image/png;base64,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" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<style>
.form{
    min-height: 90vh;
    display: flex;
    justify-content: center;
}
.form-container {
  max-width: 700px;
  padding: 5px;
  background-color: white;
 
}
#name{
width: 40px;
height: 40px;
}
/* Full-width input fields */
.form-container input{
  width: 100%;
  padding: 5px;
  margin: 1px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-top: 10px;
  margin-left: 165px;
  margin-bottom:10px;
  opacity: 0.8;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                <img id="name" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAADJCAMAAADSHrQyAAABRFBMVEX////pJiojHyCioaENAwaenJwnS5foGR4AAAAoSZYoT5voAADwgIEpRpTpIibs8PYicbMjaK0mVJ/Q1ub+9/f85ubrPkHoCRHsREcmk84lZawmVqDoFRvwfX70+v0khsUjgb8hebkAZ672r7DyjY7tWVsZFBUkjMloqNUAdbkomdUAZ6/d5vEAV6XQ3u0IUaD1rK3zlpfucnO/2Ozw8PDU09NraWkUDg8tKSqszOaQuds/ntN3tdyfyeZQlMh2t948h8Fmrtq1zON1pc9hk8Skz+ssn9jS6vZ+o8uhv9xDgrxGreCbstOLyOpnu+aLpctFdLNug7UCPpK0vtf60dH3vL7tZGb509P96uv0n6HqNDd3jLsAOZCfrc3sUVODgoJCX6HJyclMSkpbbqiKlbxeXFzk5OR2dHVBPj+0s7RBU5gAGID0IGI0AAAGdElEQVR4nO3ZaVfaShwGcEWBRISIsliWKCgoGgOKimChiguK1xaCgFvdam177/d/f2cSoICC4ZK49D6/c9rjCWOGJ//JZCYODAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAW8bnxHg2mUwnk/F4TuBf++u8DF5IpubnIpFAYHrqt7nNj+k499rfTU9c/GNmmqaux56r+/CB/rf56c/Mz4upKVLtacXj7DVz+8e51/6qGhMOlHo3NI/3lvDE/qc/KH52a4wkD9SyBwKR6amtTGZesbm5SQb8VD3/woeFBfIvLbz2l9bEYT4YqCGDPpNKxgWOb5nZeZ4T4nup7U3lAizItuOv9YU1kw0Exxqxn53KuHh6e3OhHv/4Xc98Yn5xTBbZyaoOwuXS2wtK/M/v9s4XdhdrwXsfv7m97X2a/uhdpucOgnYSPBg4/I9Dl88dH73L2gsHi7TowXy2r9Nwe0f7C5/f05qXy+Y9HrvdHhzrL7lysr2jhb3+T/MSePGv/NISTW4PftHonNzx57c25QscVx+N9BEtTpS+XBSWSHC56PZFUbuu+NzbGvdFycqaTCMjI+NUlJJze2rZ7XkNw78x4+xIPbhX4fF6mrPbPbt/avqSVM/ubdIS3k7meTJYHdVTRz89OYhT50m5PEPEYrGzs+XZ2VFidnb57Cw2M1M+IT301UWvvCYl/Eg0ykpeT6FYLOYL9qVo4463kwd8cOxAHHCUZ0MV//LMSbXqdHa+DiThqdPprFZPTsozMRJw1L9SCV25zm1ui8XirvHJzDL5R3rQYvG5KqOx6ktdgHsric6y3uLXUvNrJ14sHRRq6emyLhgc24nzA85YyEYT+My2wcHB83OXyzWpcLnOz8/JsUGbzWauZVEy0ng2alAF8stut61SfpH4E2TQsxdP7za57K78oFOW8yQ/2cmQ/OXZyjmtoK+WqZ2ajN0vgNltnj3VP7twaRph7zt+zGd3xxYXg7X0EWJ6J0mfVdXymT9EBrKvqbq9aLpWTYd+x/f5znTPztHsF12bCNmD/GJQzq/sZCORzE46Lj+tT51VclvTu3rU71+h/IrRNrXDcpMKEQpdXV3RW2XyqrLip59XQi4bHU21K2Bzu5w6Z6d1t359thkvHu5sBcikF4nU32EEprfmU0lt30w6quXlq0GSX0k/o+W5HytJJpM0obIxJ2ZTO5lpWvmI/P5Kfp8xl9lJpeOCoNVVcJwsuyxmGt6yrNEpn1a0mtjxHn+HJ9cgSS5CZkt5exdRLgZ9RT+/nUon47m+39RVV3w0vXu03xN1IUisSSq1HiM7mYuChzzgCwfZ51bgPMcJgiiK8RpRzOUErqd1++qt8frH+g/jQ+thZ8VNRr5ltpdT9aZoZdmb5gN8tuglCxuvd0nmOdSvb9ntdwPDMOu/Vh9/VKa3vX73/MQly0olrkG8iEbp6nYpWviSFQV6RK7h6q0+/a/dMeFEwvhEcOp0kox7i16z/TdSdnZE3sjJq/poVF7PRy/a9y9Ddx2+X1+MTNgw/P2h4+cOEt4c0qHjAfqAo9lZE1tb1CsbmmjhiZ3bOqN96dcZg4G57tbC4bINuk8075gq1bI36j4uF/2ppqth5pfGvdPow12jkxnPrVfh76Va9kb4TtHJqGeYNU07vybRw9+fazXj1umOL0pWa1v2aKFT40TYoOU9f0uiG4afP2PFrM/K/pvV2j7oox1XZ9eJxLNV6gFJbmCGnm/ntNiuNOy24aaRvT7ZsZ2X9muMQcP5zjhMsm+oaen32fTYz36TWgpPst90bry6YQjfadXzaoKOeKOapk63papVt00upLbCm7rt6O7C2hVeLjvT+cnerGKJadRrs6+XVmvzbDcudduL/QirmJdVond7+Ke6tmVdFvWlevb6bHfTrfU1GaeMNlP9Gp3kE8882xssfk06bSU0Zafh2a5/gKLZh1XMzCrQUxlUL5Yquqxu/ra2FL59N9tqPUzG6bom/f6Un3Bq10ozk5p02uZeas3e9Z3DzzB9LBm1QMtuSKib6shM79Ig6iMT/1w2SJJ02W2qe5C/sCEx3D/lTKqXiQ59VvQTrbo1HRo2aGtD9byp48sbdTYYDSrehAmrzl7WM5cKD8Yhranu+0X/QgkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwv/Qv2pAM/04RYHQAAAAASUVORK5CYII=">
                </a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pages/index" class="nav-link py-3 px-2" title="Home" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?> /dashboards/dashboardAdmin" class="nav-link py-3 px-2" title="dashboard" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/vehicles/ReservationAdmin" class="nav-link py-3 px-2" title="Reservation" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/vehicles/Reservation" class="nav-link py-3 px-2" title="my reservation" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                        <i class="fas fa-shopping-bag"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/vehicles/vehicle" class="nav-link py-3 px-2" title="vehicles" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                        <i class="fas fa-car"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/vehicles/users" class="nav-link py-3 px-2" title="users" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                        <i class="fas fa-users"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/vehicles/Our_Statistics" class="nav-link py-3 px-2" title="users" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                        <i class="fas fa-chart-line"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                       
                        <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100">
<div class="form">
<form action="<?php echo URLROOT; ?>/vehicles/update_vehicle1" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Update vehicle</h1>
    <label for="id"><b>id :</b></label>
    <input type="text" name="id" value="<?php echo $update->id ?>"  required>
    <label for="name"><b>Name :</b></label>
    <input type="text" name="name" value="<?php echo $update->name ?>"   required>
    <label for="model"><b>Model :</b></label>
    <input type="text" name="model"  value="<?php echo $update->model ?>" required>
    <label for="Price"><b>Price :</b></label>
    <input type="text" name="Price" value="<?php echo $update->Price ?>"  required>
    <label for="img">Select image:</label>
    <input type="file" id="image1" value="<?php echo $update->image ?>" name="image" />
    <label for="description"><b>Description :</b></label>
    <input type="text" name="description" value="<?php echo $update->description ?>"  required>
    <label for="Disponible"><b>Quantity :</b></label>
    <input type="text" name="Disponible" value="<?php echo $update->Disponible ?>"  required>
    <label for="catégory"><b>Catégory :</b></label>
    <input type="text" name="catégory" value="<?php echo $update->catégory ?>"  list="vehicle" required>
<datalist id="vehicle">
  <option>Car</option>
  <option>Trucks</option>
  <option>Motorcycle</option>
</datalist>

    <button type="submit" value="add_vehicle" class="btn"><i class="fas fa-edit"></i> Update </button>

    </form>
    </div>
    </div>
    </div>