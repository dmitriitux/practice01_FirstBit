document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('form').addEventListener('submit', function (e) {
    e.preventDefault();
    login();
  })
});

function login() {
  const login = document.getElementById('username').value;
  const pass = document.getElementById('password').value;

  const params = new URLSearchParams();
  params.set('username', login);
  params.set('password', pass);

  fetch('backend.php', {
    method: 'POST',
    body: params
  }).then(
    response => {
      return response.text();
    }
  ).then(
    text => {
      document.getElementById('result').innerHTML = text;
    }
  ).then(
    document.getElementById("form").style.display = "none"
  )
}
