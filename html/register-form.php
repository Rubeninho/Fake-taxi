<!DOCTYPE html>
<html lang="en">

<head>

  <script>
    var myCookies = {};

    function saveCookies() {
      myCookies["username"] = document.getElementById("username").value;
      myCookies["email"] = document.getElementById("email").value.toString();
      //Start Reuseable Section
      document.cookie = "";
      var expiresAttrib = new Date(Date.now() + 60 * 1000).toString();
      var cookieString = "";
      for (var key in myCookies) {
        cookieString = key + "=" + myCookies[key] + ";" + expiresAttrib + ";";
        document.cookie = cookieString;
      }
      //End Reuseable Section
      document.getElementById("out").innerHTML = document.cookie;
    }

    function loadCookies() {
      //Start Reuseable Section
      myCookies = {};
      var kv = document.cookie.split(";");
      for (var id in kv) {
        var cookie = kv[id].split("=");
        myCookies[cookie[0].trim()] = cookie[1];
      }
      //End Reuseable Section
      document.getElementById("username").value = myCookies["username"];
      document.getElementById("email").value = myCookies["email"];
    }

  </script>
  <title>Register</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="styles.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script defer src="check.js"></script>
</head>

<body>
  <div style="
        background-attachment: fixed; background-repeat: no-repeat; width: 100%; height: 100%; background-image: url('https://besu.info/wp-content/uploads/2018/04/road-3341140_1920.jpg');
      ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100 p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-8">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center" style="color: black;">Register</h2>
                <div id="error"></div>
                <div class="d-flex justify-content-center mt-5">
                  <form action="register.php" method="post" id="form">

                    <div class="form-outline">
                      <input type="text" id="username" class="form-control form-control-lg" name="username" />
                      <label class="form-label" style="color: black;" for="registerForm1">Username</label>
                    </div>

                    <div class="form-outline">
                      <input type="email" id="email" class="form-control form-control-lg" name="email" />
                      <label class="form-label" style="color: black;" for="registerForm2">Email</label>
                    </div>

                    <div class="form-outline">
                      <input type="tel" id="phone" class="form-control form-control-lg" name="phone" />
                      <label class="form-label" style="color: black;" for="registerForm3">Phone Number</label>
                    </div>

                    <div class="form-outline">
                      <input type="password" id="password" class="form-control form-control-lg" name="password" />
                      <label class="form-label" style="color: black;" for="registerForm4">Password</label>
                    </div>

                    <div class="form-outline mb-2">
                      <input type="password" id="password_repeated" class="form-control form-control-lg"
                        name="password_repeated" />
                      <label class="form-label" style="color: black;" for="registerForm5">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3"></div>
                    <div class="d-flex justify-content-center">
                      <a href="userMain.html" type="submit"
                        class="btn btn-success btn-block btn-lg graduateButton text-body registerColor"
                        style="color: white !important" onclick="saveCookies()">
                        Register
                      </a>
                    </div>
                    <p class="text-center text-muted mt-3 mb-0">
                      Have already an account?
                      <a href="login.html" class="fw-bold text-body"><u>Login here</u></a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</body>

</html>