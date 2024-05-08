<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BTI Certificate</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/createBTI.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <page size="A4">
      <div class="a">
        <div style="float: left">
          <img src="../image/BTI.jpg" alt="" />
        </div>
        <div style="float: right">
          <p class="p1-bti">BTI PAYMENT INT'L (CAM) CO.LTD</p>
        </div>
        <div style="float: right">
          <p class="p2-bti">
            Villa No. 31,St.281, Boeungkork Commune, Toulkork is District,
          </p>
        </div>
        <div style="float: right">
          <p class="p3-bti">Phnom Penh, Kingdom of Cambodia</p>
        </div>
        <div style="float: right">
          <p class="p4-bti">Tel: +855 12 511 233</p>
        </div>
      </div>
        <div class="p5">
          <p class="p5-bti backk">QUARTERLY PREVENTIVE MAINTENANCE CERTIFICATE</p>
        </div>
      <div class="item-all-bti" style="justify-content: center; align-items: center;">
        <div class="item-bti">
            <label for="">Ticket Number</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="item-bti">
            <label for="">Date Received</label>
            <input type="date" class="form-control" required >
        </div>
        <div class="item-bti" >
          <label for="">Time Received</label>
          <input type="time" class="form-control" required>
        </div>
      </div>
      <div class="item-all-bti" style="justify-content: center; align-items: center;">
        <div class="item-bti">
            <label for="">Customer Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="item-bti">
            <label for="">Date Responded</label>
            <input type="date" class="form-control" required>
        </div>
        <div class="item-bti" >
          <label for="">Time Responded</label>
          <input type="time" class="form-control" required>
        </div>
      </div>
      <div class="item-all-bti" style="justify-content: center; align-items: center;">
        <div class="item-bti">
            <label for="">Contact Person</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="item-bti">
            <label for="">Date Completed</label>
            <input type="date" class="form-control" required >
        </div>
        <div class="item-bti" >
          <label for="">Time Completed</label>
          <input type="time" class="form-control" required>
      </div>
      </div>
      <div class="item-all-bti" style="justify-content: center; align-items: center;">
        <div class="item-bti-2">
            <label for="">Contact Number</label>
            <input type="number" class="form-control form-control-2" required>
        </div>
        <div class="item-bti-2">
            <label for="">Contact Email</label>
            <input type="email" class="form-control form-control-2"  required>
        </div>
      </div>
      <hr>
      <div class="item-all-bti-3">
      <div class="item-bti-3">
        <label>Description of services</label>
        <textarea class="form-control form-control-3 " rows="4" required></textarea>
      </div>
      </div>
      <hr>
      <div class="item-all-bti-3">
        <div class="item-bti-3">
          <label>Troubleshooting steps</label>
          <textarea class="form-control form-control-3 " rows="4" required></textarea>
        </div>
      </div>
        <hr>
        <div class="item-all-bti-under" style="justify-content: center; align-items: center;">
          <div class="item-bti-2">
              <label for="">Customer Name</label>
              <input type="number" class="form-control form-control-2" required>
          </div>
          <div class="item-bti-2">
              <label for="">Service Technician Name</label>
              <input type="text" class="form-control form-control-2" required>
          </div>
        </div>

      <div class="item-11bti">
        <div class="item-div-11bti">
          <label for="">Customer Signature</label>
          <a href="{{route('all.drewcustomerBTI')}}">
          <button class="form-control form-control-btn" id="customer_signature">SIGN HERE</button>
          </a>
        </div>
        <div class="item-div-11bti">
          <label for="">Technician Signature</label>
          <a href="{{route('all.btireport')}}">
          <button class="form-control form-control-btn" id="technician-signature">SIGN HERE</button>
          </a>
        </div>
      </div>
      <hr>
    </page>
<script src="scrip.js"></script>
    <!-- <page size="A4"></page>
    <page size="A4" layout="landscape"></page>
    <page size="A5"></page>
    <page size="A5" layout="landscape"></page>
    <page size="A3"></page>
    <page size="A3" layout="landscape"></page> -->
  </body>
</html>
