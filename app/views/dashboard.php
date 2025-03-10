<?php
$user = $_SESSION['user'];
$account = $_SESSION['account'];
$pageTitle = "Dashboard";
$bannerTitle = "Dashboard";
$styles = ["/css/dashboard.css", "/css/modal.css"];
include '../templates/header.php'
  ?>


<main id="dashboard">
  <div class="widgets-operations">
    <div id="services">
      <span class="bold fs-2 text-dblue">¿Qué desea hacer hoy?</span>
      <div class="operations_board">
        <button class="operation_btn" id="btn__transferMoney" data-toggle="modal" data-target="#transfer-money"><i
            class="fa-solid fa-right-left"></i> Transferir
          Dinero</button>
        <button class="operation_btn" id="btn__payServices" data-toggle="modal" data-target="#pay-a-service"> <i
            class="fa-solid fa-droplet"></i> Pagar
          Servicios</button>
      </div>
    </div>


    <div id="transfer-money" class="modal">
      <div class="modal_dialog modal_dialog_centered">
        <div class="modal-content">
          <div class="modal_header">
            <h2 class="bold fs-2 text-dblue">Transferir Dinero</h2>
            <span class="btn-close">&times;</span>
          </div>
          <div class="modal_body">
            <form action="" method="POST" id="form-transfermoney" class="operation_form w_100">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa-solid fa-credit-card"></i>
                </span>
                <input type="text" name="accountnumber" class="form-control" id="accountnumber"
                  placeholder="Numero de cuenta" required />
              </div>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa-solid fa-hand-holding-dollar"></i>
                </span>
                <input type="number" name="amount" id="amount" class="form-control" placeholder="Monto" required />
              </div>
              <div class="input-group">
                <button type="submit" class="operation_form btn_payment" id="loading">Pagar</button>
              </div>
              <div class="input-group">
                <button type="button" class="operation_form btn_back" data-dismiss="modal">Volver</button>
              </div>
              <div id="messageTransfer"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="pay-a-service" class="modal">
      <div class="modal_dialog modal_dialog_centered">
        <div class="modal-content">
          <div class="modal_header">
            <h2 class="bold fs-2 text-dblue">Pagar servicios</h2>
            <span class="btn-close">&times;</span>
          </div>
          <div class="modal_body">
            <form action="" method="POST" id="form-payServices" class="operation_form w_100">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa-solid fa-credit-card"></i>
                </span>
                <input type="text" name="accountnumber" class="form-control" id="accountnumber"
                  placeholder="Numero de cuenta" required />
              </div>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa-solid fa-hand-holding-dollar"></i>
                </span>
                <input type="number" name="amount" id="amount" class="form-control" placeholder="Monto" required />
              </div>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa-solid fa-circle-info"></i>
                </span>
                <input type="text" name="destination" id="destination" class="form-control"
                  placeholder="Detalle del servicio" required />
              </div>
              <div class="input-group">
                <button type="submit" class="operation_form btn_payment" id="loading">Pagar</button>
              </div>
              <div class="input-group">
                <button type="button" class="operation_form btn_back" data-dismiss="modal">Volver</button>
              </div>
              <div id="messageServices"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="loader" class="loader"></div>
  </div>
  <div class="my_products">
    <h2 class="text-dblue">Mis Productos</h2>
    <div class="widget-balance">
      <i class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24px">
          <defs>
            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#3ef9e6" />
              <stop offset="100%" stop-color="#0053a7" />
            </linearGradient>
          </defs>
          <path fill="url(#gradient)"
            d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
        </svg>
      </i>
      <div class="container-product-info">
        <div class="product-type">
          <span>Cuentas de ahorros</span>
          <div class="card-info">
            <span class="hidden-numbers">****</span>
            <span class="visibles-numbers"><?= substr($account['AccountNumber'], -4) ?></span>
          </div>
        </div>
        <div class="available_balance">
          <b class="balance-label" data-balance="<?= $account['Balance'] ?>"></b>
          <span class="bold">Saldo disponible</span>
        </div>
      </div>
    </div>

  </div>



</main>
<script type="module" src="/js/dashboard.js"></script>
<script type="module" src="/js/components/avatar/image_abbr.js"></script>
</body>

</html>