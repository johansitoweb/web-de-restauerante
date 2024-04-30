<?php
$none="hola soy johan";
//echo"hola soy php";
$fde="lairel";
$conten="a la Web de lairel";
$Horarios="Horarios";
$cosineros="cosineros";
//Esta es una web de restaurante que estare creando desde cero en php
//nombre del restaurnate lairel
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web de Restaurnate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fuid bg-warning rounded">
       <marquee behavior="" direction=""> <h6 class="text-center text-white h4"> Bienvenidos/as <?php echo"$conten";?></h6></marquee>
    </div>
    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-sm-3"><h4><stroung><?php ECHO"$fde";?></stroung></h4></div>
            <div class="col-sm-2"><h5><a href="" class="  justify-content-center text-white" id="#Horarios"><?php echo"$Horarios";?></a></h5></div>
            <div class="col-sm-2"><h5><a href="" id="cosineros"  class="text-center text-white"><?php $cosineros?></a></h5></div>
            <div class="col-sm-2"><h5><a href=""  class="text-center text-white" id="sobre nosotros">sobre nosotros</a></h5></div>
            <div class="col-sm-2"><h5 clas><a href=""   class="text-center text-white" id="contacto">contacto</a></h5></div>
        </div>
    </div>
    <div class="img_iudsuia">
        <br><br><br><br><br><br><br><br>
        <h2 class="text-center mt-6 text-white"><strong>Restaurante <?php echo "$fde"?></strong> </h2>
    </div>
    <!--sobre nosotros-->
    <h3 class="text-center">Sobre nosotros</h3>
    <div class="container">
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
      data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <stroung>Quienes somos</stroung>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Somos un Restaurante que siempre da lo mejor para sus visitantes.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" 
      aria-expanded="false" aria-controls="flush-collapseTwo">
        chef
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Nuestros chef siempre se esfuerzan al maximo por dar lo mejor a los clientes.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" 
      aria-expanded="false" aria-controls="flush-collapseThree">
        Horarios
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Estamos aviertos todos los dias de lunes a domingo. </div>
    </div>
  </div>
</div>
    </div>
    <!--nuestros chef-->
                        <br/>
                 <h3 class="text-center text-black">Nuestros chef</h3>
                        <br/> 
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="chef/chef1.png" alt="primera-chef" width="350px" height="300px">
                                    <h3 class="card-title">Adri Hernandez</h3>
                                    <p class="card-text"> <stroung>Adri Hernandez</stroung> Es una de nuestras chef mas nuevas </p>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                        <div class="card">
                                <div class="card-body">
                                    <img src="https://img.freepik.com/foto-gratis/confianza-cocinera-mediana-edad-uniforme-chef-sosteniendo-rodillo-cruzando-manos-pared-rosa-aislada_141793-36366.jpg?t=st=1714504124~exp=1714507724~hmac=46986ff0a57238cc331e02388ddf4759f9109021d2d4b7a5d2586cd7e69f733a&w=740" alt=""  width="350px" height="300px">
                                    <h3 class="text-center">Ana Hernandez</h3>
                                    <p> <stroung>Ana Hernandez</stroung> Es una de nuestras chef esperimentadas  que a trabajado para muestro restaurante ase mas de 7 años dando lo mejor de si y entregando una sonrisa a cada persona. </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4">
                        <div class="card">
                                <div class="card-body">
                                    <img src="https://img.freepik.com/foto-gratis/chef-cocinando-cocina-mientras-lleva-ropa-profesional_23-2151208316.jpg?t=st=1714503981~exp=1714507581~hmac=f77d946577b05c0bf90e845ab2e6378204fb160d31480d5bdfc7ac8c58177267&w=740" alt="" width="350px" height="300px">
                                    <h3>Antonio perez</h3>
                                    <p> <stroung>Antonio perez</stroung> Es un chef que le gusta mucho el Diseño en la comida </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <br>
                 <div class="container-fluid bg-warning text-center" id="#Horarios">
                 <h3>Horarios</h3>
                 <p>Luneas : viernes</p>
                 <p>7:00  A 10:00 </p>
                 <p>sabados: Domingos</p>
                 <p>5:00 A 9:00</p>
                 </div>
                 <!--Nuestros platos de comidas-->
                 <h2 class="text-black text-center">El plato favorito de todo el mundo</h2>
                 <br>
                 <img class="img-fluid mx-auto d-block" src="https://www.mausi.com/wp-content/uploads/2020/08/Costeo21-768x518.jpg" alt="">
                 <!--textimonios-->
                 <h4 class="text-center">Textimonios</h4>
                 <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body bg-primary text-white">
                          <p>Definitivamente tanto el trato como la comida si me tocara dal estrella le diriera 5 de 5 porque todo fue de muy buena calidad</p>
                          <br/>
                          <h6><stroung>Antonio henriquez <img  width="40px"  height="40px" style="border-radius: 50px;" src="https://img.freepik.com/psd-gratis/ilustracion-3d-persona-camiseta-mangas_23-2149436202.jpg?w=360&t=st=1714503413~exp=1714504013~hmac=863b7b93dc49a6cb236ba8f840370077bfe9e4454ee97562582536985baa2ca1" alt="avatar"></stroung></h6>
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bg-primary text-white">
                          <p>Definitivamente tanto el trato como la comida si me tocara dal estrella le diriera 5 de 5 porque todo fue de muy buena calidad</p>
                          <br/>
                          <h6><stroung>Antonio henriquez <img src="https://img.freepik.com/psd-gratis/representacion-3d-avatar_23-2150833552.jpg?w=360&t=st=1714503277~exp=1714503877~hmac=29ab36f0b14e7de9babfaa9c461a58fdda98a2219c67dcddc64c416b7d0a6618" alt="avatar" width="40px"  height="40px" style="border-radius: 50px;"></stroung></h6>
                        </div>
                    </div>
                  </div>
                 </div>
                 <br>
                 <!--contacto-->
     <section class="container" style="padding-left: 30%;">
     <form class="form">
  <div class="flex-column">
    <label>Email </label>
  </div>
  <div class="inputForm">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="20"
      viewBox="0 0 32 32"
      height="20"
    >
      <g data-name="Layer 3" id="Layer_3">
        <path
          d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"
        ></path>
      </g>
    </svg>
    <input placeholder="Enter your Email" class="input" type="text" />
  </div>

  <div class="flex-column">
    <label>Password </label>
  </div>
  <div class="inputForm">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="20"
      viewBox="-64 0 512 512"
      height="20"
    >
      <path
        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"
      ></path>
      <path
        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"
      ></path>
    </svg>
    <input placeholder="Enter your Password" class="input" type="password" />
  </div>

  <div class="flex-row">
    <div>
      <input type="radio" />
      <label>Remember me </label>
    </div>
    <span class="span">Forgot password?</span>
  </div>
  <button class="button-submit">Sign In</button>
  <p class="p">Don't have an account? <span class="span">Sign Up</span></p>
  <p class="p line">Or With</p>

  <div class="flex-row">
    <button class="btn google">
      <svg
        xml:space="preserve"
        style="enable-background:new 0 0 512 512;"
        viewBox="0 0 512 512"
        y="0px"
        x="0px"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns="http://www.w3.org/2000/svg"
        id="Layer_1"
        width="20"
        version="1.1"
      >
        <path
          d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
	c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
	C103.821,274.792,107.225,292.797,113.47,309.408z"
          style="fill:#FBBB00;"
        ></path>
        <path
          d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
	c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
	c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"
          style="fill:#518EF8;"
        ></path>
        <path
          d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
	c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
	c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"
          style="fill:#28B446;"
        ></path>
        <path
          d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
	c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
	C318.115,0,375.068,22.126,419.404,58.936z"
          style="fill:#F14336;"
        ></path>
      </svg>

      Google</button
    ><button class="btn apple">
      <svg
        xml:space="preserve"
        style="enable-background:new 0 0 22.773 22.773;"
        viewBox="0 0 22.773 22.773"
        y="0px"
        x="0px"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns="http://www.w3.org/2000/svg"
        id="Capa_1"
        width="20"
        height="20"
        version="1.1"
      >
        <g>
          <g>
            <path
              d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z"
            ></path>
            <path
              d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0 c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019 c0.105-2.482,1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464 c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648 c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,14.688,19.086,15.964,20.67,16.716z"
            ></path>
          </g>
        </g>
      </svg>

      Apple
    </button>
  </div>
</form>
<style>
  .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  background: linear-gradient(45deg, red, yellow);
  padding: 30px;
  width: 450px;
  border-radius: 20px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  transition: background 0.3s ease;
}

.form:hover {
  background: linear-gradient(45deg, yellow, red);
}

::placeholder {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.form button {
  align-self: flex-end;
}

.flex-column > label {
  color: #151717;
  font-weight: 600;
}

.inputForm {
  border: 1.5px solid #ecedec;
  border-radius: 10em;
  height: 50px;
  display: flex;
  align-items: center;
  padding-left: 10px;
  transition: 0.2s ease-in-out;
  background-color: white;
}

.input {
  margin-left: 10px;
  border-radius: 10rem;
  border: none;
  width: 100%;
  height: 100%;
}

.input:focus {
  outline: none;
}

.inputForm:focus-within {
  border: 1.5px solid #2d79f3;
}

.flex-row {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 10px;
  justify-content: space-between;
}

.flex-row > div > label {
  font-size: 14px;
  color: black;
  font-weight: 400;
}

.span {
  font-size: 14px;
  margin-left: 5px;
  color: white;
  font-weight: 500;
  cursor: pointer;
}

.button-submit {
  position: relative;
  display: inline-block;
  padding: 15px 30px;
  text-align: center;
  letter-spacing: 1px;
  text-decoration: none;
  background: transparent;
  transition: ease-out 0.5s;
  border: 2px solid;
  border-radius: 10em;
  box-shadow: inset 0 0 0 0 red;
  margin: 20px 0 10px 0;
  color: white;
  font-size: 15px;
  font-weight: 500;
  height: 50px;
  width: 100%;
  cursor: pointer;
}

.button-submit:hover {
  color: white;
  box-shadow: inset 0 -100px 0 0 darkorange;
}

.button-submit:active {
  transform: scale(0.9);
}

.p {
  text-align: center;
  color: black;
  font-size: 14px;
  margin: 5px 0;
}

.btn {
  margin-top: 10px;
  width: 100%;
  height: 50px;
  border-radius: 10em;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: 500;
  gap: 10px;
  border: 1px solid #ededef;
  background-color: white;
  cursor: pointer;
  transition: 0.2s ease-in-out;
}

.btn:hover {
  border: 1px solid #2d79f3;
}

</style>
           </section>

    <!--stylos-->
    <style>
        a{
            text-decoration: none;
            justify-content: center;
            width: auto;
            height: 140px;
            border: none;
            
        }
        a:hover{
            background-color: orange;
        }
        .img_iudsuia{
            background-image: url('img/fpr.png');
            background-repeat:  no-repeat;
            background-size: cover;
            width: auto;
            max-width: auto;
            height: 500px;

        }
        h2{
            color:white;
            font-size :70px;
           
        }
      
    </style>
    
    <!--footer p pie de pagina-->
    <footer class="bg-black text-center">
        <p class="text-warning">@web del restaurant lairel</p>
    </footer>
</body>
</html>