document.getElementById("search").addEventListener("click", function () {
  const username = document.getElementById("username").value;
  const url = `https://api.github.com/users/${username}`;

  fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error("User not found");
      }
      return response.json();
    })
    .then((data) => {
      document.getElementById("result").innerHTML = `
        <h2>${data.name}</h2>
        <img src="${data.avatar_url}" alt="${data.name}" width="100" />
        <p>Followers: ${data.followers}</p>
        <p>Following: ${data.following}</p>
        <p>Public Repos: ${data.public_repos}</p>
      `;
    })
    .catch((error) => {
      document.getElementById("result").innerHTML = `<p>${error.message}</p>`;
    });
});
