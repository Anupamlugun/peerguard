function login() {
  const uemail = document.querySelector("#email").value;
  const upassword = document.querySelector("#password").value;
  const usernam_msg = document.querySelector("#usernam_msg");

  // Validate if fields are not empty
  if (uemail === "" || upassword === "") {
    usernam_msg.innerHTML = "<span>Please fill all fields</span>";
    return false;
  }

  const params = new URLSearchParams();
  params.append("uemail", uemail);
  params.append("upassword", upassword);

  // Perform fetch request
  fetch("userlogin.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded", // Ensure the correct content-type
    },
    body: params,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      console.log(data);

      // Handle login response
      if (data.login === "success") {
        usernam_msg.innerHTML = "<span>Login successful!</span>";
      } else if (data.error) {
        usernam_msg.innerHTML = `<span>${data.error}</span>`;
      } else {
        usernam_msg.innerHTML = "<span>Invalid email or password</span>";
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      usernam_msg.innerHTML =
        "<span>An error occurred. Please try again later.</span>";
    });

  return false; // Prevent form submission
}
