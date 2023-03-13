$("#form-val").validate();


$(document).ready(function () {
  $("#btn").click(function () {
    var name = $("#name").val();
    var Gender = $("#Gender").val();
    var email = $("#email").val();
    var Phonenumber = $("#Phonenumber").val();
    var password = $("#password").val();
    console.log(name)
    $.post(
      "../php/register.php",
      {
        name: name,
        Gender: Gender,
        email: email,
        Phonenumber: Phonenumber,
        password: password,
      },
      function (data, status) {
        if (data == "success") {
          $("#alert").html("<div class='alert alertinfo>" + data + "</div>");
        } else {
          $("#alert").html("<div class='alert alertwarning>" + data + "</div>");
        }
      }
    );
  });
});
