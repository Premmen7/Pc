<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Edit.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/ef216a6242.js"
      crossorigin="anonymous"
    ></script>
    <title>Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="second.html">Second</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="third.html">Third</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fourth.html">Fourth</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Signup.html">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Recover password with email-->
    <table class="extra">
      <tr>
        <td>
          <label for="emailRecovery"
            ><h5>Please enter Email associated with your acccont</h5></label
          >
          <input
            type="email"
            class="form-control"
            name="emailRecovery"
            value=""
          />
        </td>
      </tr>
      <tr>
        <td>
          <input
            type="submit"
            name="send"
            class="btn btn-primary"
            value="Reset Passsword"
          />
        </td>
      </tr>
    </table>
  </body>
</html>
