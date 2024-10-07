function signup_validation() {
  const upassword = document.querySelector("#password").value;
  const ucpassword = document.querySelector("#confirm-password").value;
  const uemail = document.querySelector("#email").value;
  const uphone = document.querySelector("#phone").value;
  const uname = document.querySelector("#name").value;
  const ugender = document.querySelector("#gender").value;
  const uage = document.querySelector("#age").value;
  const uprofession = document.querySelector("#profession").value;

  const usernam_msg = document.querySelector("#usernam_msg");

  // Validate if any field is empty
  if (
    !uname ||
    !ugender ||
    !uprofession ||
    !uage ||
    !uphone ||
    !upassword ||
    !uemail
  ) {
    usernam_msg.innerHTML = "<span>Fill all fields</span>";
    return false;
  }

  // Validate password confirmation
  if (upassword !== ucpassword) {
    usernam_msg.innerHTML = "<span>Confirm password incorrect</span>";
    return false;
  }

  const params = new URLSearchParams();
  params.append("uname", uname);
  params.append("ugender", ugender);
  params.append("uage", uage);
  params.append("uprofession", uprofession);
  params.append("uemail", uemail);
  params.append("uphone", uphone);
  params.append("upassword", upassword);

  fetch("email-verify.php", {
    method: "POST",
    body: params,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data) {
        console.log(data);
        if (data.message) {
          usernam_msg.innerHTML = `<span>${data.message}</span>`;
        }
      } else {
        console.log("Data not found");
      }
    })
    .catch((error) => console.error("Error:", error));
}
