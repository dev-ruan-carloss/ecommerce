import './bootstrap';

// Seleciona todas as imagens no banner
const images = document.querySelectorAll('.banner-image');

// Define o índice da imagem atual
let currentIndex = 0;

// Função para mostrar a próxima imagem
function showNextImage() {
// Remove a classe 'active' da imagem atual
images[currentIndex].classList.remove('active');

// Atualiza o índice para a próxima imagem
currentIndex = (currentIndex + 1) % images.length;

// Adiciona a classe 'active' à próxima imagem
images[currentIndex].classList.add('active');
}

// Inicializa o banner com a primeira imagem visível
images[currentIndex].classList.add('active');

// Define o intervalo de troca de imagens (5 segundos neste caso)
setInterval(showNextImage, 5000);


// JS para o PAINEL ADM
document.querySelector('.toggle-menu').addEventListener('click', () => {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('show');
});
