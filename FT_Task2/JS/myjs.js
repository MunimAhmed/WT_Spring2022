const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const uname = document.getElementById("age");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");

function handleError(e, message) {
  e.target.classList.add("error");
  e.target.nextElementSibling.style.visibility = "visible";
  e.target.nextElementSibling.innerHTML = message;
}

function handleSuccess(e) {
  e.target.classList.remove("error");
  e.target.classList.add("success");
  e.target.nextElementSibling.style.visibility = "hidden";
}

fname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 2) {
    return handleError(
      e,
      "Please Enter a Valid Name with more than 2 character"
    );
  }

  if (!e.target.value.length) {
    return handleError(e, "Name can not be empty");
  }

  return handleSuccess(e);
});

lname.addEventListener("input", (e) => {
  if (e.target.value.length && e.target.value.length <= 2) {
    handleError(e, "Please Enter a Valid Name with more than 2 character");
    return;
  }

  if (!e.target.value.length) {
    handleError(e, "Name can not be empty");
    return;
  }

  return handleSuccess(e);
});

age.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length > 3) {
    handleError(e, "Please enter a valid Age");
    return;
  }
  if (!e.target.value.length) {
    handleError(e, "Age can not be empty");
    return;
  }

  return handleSuccess(e);
});

email.addEventListener("input", (e) => {
  if (
    !e.target.value.length ||
    !e.target.value.match(
      /^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/
    )
  ) {
    handleError(e, "Please enter a valid email");
    return;
  }

  return handleSuccess(e);
});

password.addEventListener("input", (e) => {
  if (!e.target.value.length || e.target.value.length <= 5) {
    handleError(e, "Please enter a valid password");
    return;
  }

  return handleSuccess(e);
});

confirmpassword.addEventListener("input", (e) => {
  if (e.target.value !== password.value) {
    handleError(e, "Password does not match");
    return;
  }

  return handleSuccess(e);
});
