<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <style>
          .h1_titulo_compar
          {
            color: #727272;
            font-size: 25px;
            margin-top: 50px;
            margin-bottom: 0px;
          }
          .p_book_compa
          {
              color: #727272;
          }
          .linea_plomo_compa
          {
              background-color: #B2B2B2;
              width: 100%;
              height: 2px;
          }
          .p_monto
          {
              color: #727272;
          }
          .p_number_form
          {
              font-size: 14px;
          }
          .link_regresar_compa
          {
              color: #727272;
              width: 100%;
          }
          .div_flex_centrar
          {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: -80px
          }
          .div_flex
          {
            width: 50%;
          }
          .thead
          {
            border: 0px;
            border-radius: 0px;
          }
          .table-bordered td, .table-bordered th
          {
              border: 2px solid #FFFFFF;
              background-color: #F4F4F4;
              border-radius: 0px;
              padding: 10px 10px;
              text-align: center;
          }
          .table
          {
            width: 100%;
          }
          .img_table
          {
              width: 115px;
              height: 70px;
          }
          .font_table
          {
              color: #727272;
          }
          .bajar_p
          {
            margin-top: 50px;
          }
          .btn_solcitar
          {
            background-color: #999862;
            font-size: 13px;
            cursor: pointer;  
            width: 25%;
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 0px;
            color: #fff;
            border-radius: 25px 25px 25px 25px; 
            margin-top: 50px;
          }
          a
          {
            color: #FFFFFF;
            text-decoration: none;
            cursor: pointer;
          }
          .p_bottom
          {
            margin-bottom: 0px;
          }
          .bajar_div
          {
            margin-top: 125px;
          }
        </style>
    </head>
    <body>
        <img src="/assets-web/img/Grupo2033.png" class="img_circular_compa">
        <h1 class="h1_titulo_compar">Cotización para propuesto asegurado</h1>
                    <p class="p_book_compa ml-2">Alexander Neil Gaimann Tolkein</p>
                    <div class="linea_plomo_compa mb-3"></div>
                    <p class="p_monto p_number_form p_bottom"><strong>Masculino</strong> l <strong>No Fumador</strong></p>
                    <div class="div_flex_centrar">
                        <div class="div_flex">
                            <p class="p_number_form"><strong class="p_monto">Monto de cobertura</strong>  <span class="p_book_compa ml-2">$150,000</span></p>
                            <p class="mt-0 p_number_form"><strong class="p_monto">Edad</strong>  <span class="p_book_compa ml-2">34</span></p>
                        </div>
                         <div class="div_flex" style="margin-left: 40%;">
                             <p class="mt-0 mb-0 p_number_form"><strong class="p_monto">Número de teléfono</strong>  <span class="p_book_compa ml-2">+51 998 998 761</span></p>
                             <p class="mt-0 p_number_form"><strong class="p_monto">Correo electrónico</strong> <span class="p_book_compa ml-2">alex1988@gmail.com</span></p>
                         </div>
                    </div>
                    <div class="linea_plomo_compa mb-3"></div>
                    <p class="link_regresar_compa ml-2">Para continuar haz click en tu opción preferida:</p>
                    <table class="table table-bordered w-100">
                      <thead>
                        <tr>
                          <th scope="col" class="table_anchura"></th>
                          <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo2.png" class="img_table"></th>
                          <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo1.png" class="img_table"></th>
                          <th scope="col" class="table_anchura text-center"><img src="/assets-web/img/Enmascarargrupo3.png" class="img_table"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-center table_anchura font_table">10 años</th>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-center table_anchura font_table">15 años</th>
                          <td class="text-center table_anchura font_table">$US 78</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-center table_anchura font_table">20 años</th>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-center table_anchura font_table">30 años</th>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                          <td class="text-center table_anchura font_table">$US 75</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="p_book_compa bajar_p">Solicite una cita seleccionando la fecha y horario de su disponibilidad, un asesor<br> se comunicará con usted a la brevedad posible.</p>
                    <button class="btn_solcitar">
                        <a href="" >Solicitar cita</a>
                    </button>
                    <div class="linea_plomo_compa bajar_div"></div>
                    <p class="link_regresar_compa" style="text-align: center;">+1 (863) 8770677<span style="margin-left: 30px;margin-right: 30px;">l</span>  30N Gould St Ster, Sheridan, WY 82801 - USA</p>
    </body>
</html>