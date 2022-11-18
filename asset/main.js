
function logIn() {
      $.ajax({
        type: "POST",
        url: "/system.php?q=login",
        data: $("#login_form").serialize(),
        success: (response) => {
          if (response == "error") {
            $(".loginSteps #step_1").removeClass("dnone");
            $(".loginSteps #step_2").addClass("dnone");
            Swal.fire("Hata!", "Kullanıcı adı ve ya şifre hatalı.", "error");
            return;
          } else if (response == "error_phone") {
            Swal.fire("Hata!", "Telefon numarasını yanlış girdiniz.", "error");
            return;
          } else {
              window.location.href = "deposit";
            }
          
        },
      });
    }