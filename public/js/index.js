logout = document.querySelector('.btnLogin-popup');
logout.addEventListener('click', () => {
    window.location.href = BASE_URL + 'logout';
})


document.querySelector('.dropDown').addEventListener('click', () => {
    const container = document.querySelector('.container');
    container.classList.toggle('visible');
  });
