@extends('layouts.app')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">
          <img src="/public/favicon.ico" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          HamiloPedidos
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <RouterLink to="/" class="nav-link active" aria-current="page">Empresas</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink to="/historial" class="nav-link">Historial</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink to="/perfil" class="nav-link">Perfil</RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="text-center m-5">Pasarela de pagos</h1>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">PROCEDER AL PAGO</h4>
          <p class="card-text">PRODUCTOS</p>
        </div>
      </div>
      <form method="post" id="FormPagoFacil" action="https://checkout.pagofacil.com.bo/es/pay"
        enctype="multipart/form-data" class="form">
        <input name=" tcDatosCheckout" id=" tcDatosCheckout" type="hidden" value="NTEyNDdmYWUyODBjMjA0MTA4MjQ5NzdiMDc4MTQ1M2RmNTlmYWQ1YjIzYmYyYTBkMTRlODg0NDgyZjkxZTA5MDc4ZGJlNTk2NmUwYjk3MGJhNjk2ZWM0Y2FmOWFhNTY2MTgwMjkzNWY4NjcxN2M0ODFmMTY3MGU2M2YzNWQ1MDQxYzMxZDdjYzYxMjRiZTgyYWZlZGM0ZmU5MjZiODA2NzU1ZWZlNjc4OTE3NDY4ZTMxNTkzYTVmNDI3Yzc5Y2RmMDE2YjY4NmZjYTBjYjU4ZWIxNDVjZjUyNGY2MjA4OGI1N2M2OTg3YjNiYjNmMzBjMjA4MmI2NDBkN2M1MjkwN3xwcnVlYmFAcHJ1ZWJhLmNvbXw3Nzc3Nzc3N3w2Njd8MC41MHwyfGh0dHBzOi8vbWlkb21pbmlvLmNvbS9jYWxsYmFja3xodHRwczovL21pZG9taW5pby5jb20vcmV0dXJufFt7IlNlcmlhbCI6MSwiUHJvZHVjdG8iOiJQUk9EVUNUTzEiLCJMaW5rUGFnbyI6MCwiQ2FudGlkYWQiOjIsIlByZWNpbyI6MTAsIkRlc2N1ZW50byI6MCwiVG90YWwiOjV9LHsiU2VyaWFsIjoyIlByb2R1Y3RvIjoiUFJPRFVDVE8yIiwiTGlua1BhZ28iOjAsIkNhbnRpZGFkIjo1LCJQcmVjaW8iOjIwLCJEZXNjdWVudG8iOjAsIlRvdGFsIjoxMDB9XXwxMQ==">
        <input name="tcCommerceID" id="tcCommerceID" type="hidden"
          value="d029fa3a95e174a19934857f535eb9427d967218a36ea014b70ad704bc6c8d1c">
          <div class="col-md-12">
            <input type="submit" class="btn btn-primary mt-5 col-12" id="btnpagar" value="pagar">
          </div>

      </form>
    </div>

  <script setup>
//   import axios from 'axios';

//   import { onMounted, ref } from 'vue';
//   let datosCompro = ref([]);
//   let CommerceId = "d029fa3a95e174a19934857f535eb9427d967218a36ea014b70ad704bc6c8d1c";
//   let TokenSecret = "9E7BC239DDC04F83B49FFDA5"
//   let CadenaAFirmar = "51247fae280c20410824977b0781453df59fad5b23bf2a0d14e884482f91e09078dbe5966e0b970ba696ec4caf9aa5661802935f86717c481f1670e63f35d5041c31d7cc6124be82afedc4fe926b806755efe678917468e31593a5f427c79cdf016b686fca0cb58eb145cf524f62088b57c6987b3bb3f30c2082b640d7c52907|prueba@prueba.com|77777777|667|0.50|2|https://midominio.com/callback|https://midominio.com/return|[{\"Serial\":1,\"Producto\":\"PRODUCTO1\",\"LinkPago\":0,\"Cantidad\":2,\"Precio\":10,\"Descuento\":0,\"Total\":5},{\"Serial\":2\"Producto\":\"PRODUCTO2\",\"LinkPago\":0,\"Cantidad\":5,\"Precio\":20,\"Descuento\":0,\"Total\":100}]|11"
//   let tcfirma = (window.btoa(CadenaAFirmar));
//   console.log(tcfirma);
//   const pagoRealizado = async() => {
//     try {
//           const {data} = await axios.get("https://micomercio.com.bo/CallBack")
//           datosCompro.value = data;
//           console.log(historial.value);
//       } catch (error) {
//           console.log(error);
//       }
//   }

  </script>

