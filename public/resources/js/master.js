const links = document.querySelectorAll('.animate__animated.btn');

for (let link of links) {
  link.addEventListener('click', function() {
    this.classList.add('animate__bounceIn', 'text-light');
  });

  link.addEventListener('mouseout', function() {
    this.classList.remove('animate__bounceIn', 'text-light');
  });
}