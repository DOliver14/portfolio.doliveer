const btnMenu = document.getElementById('btn-menu');
const menu = document.getElementById('menu-mobile');
const overlay = document.getElementById('overlay-menu');

// Verificação de elementos
if (btnMenu && menu && overlay) {
    // Função para abrir ou fechar o menu
    const toggleMenu = () => {
        menu.classList.toggle('abrir-menu');
        overlay.classList.toggle('visible'); // Mostra ou esconde o overlay
        updateAriaExpanded();
    };

    // Função para esconder o menu
    const closeMenu = () => {
        menu.classList.remove('abrir-menu');
        overlay.classList.remove('visible'); // Esconde o overlay
        updateAriaExpanded();
    };

    // Atualiza o atributo ARIA
    const updateAriaExpanded = () => {
        const isOpen = menu.classList.contains('abrir-menu');
        btnMenu.setAttribute('aria-expanded', isOpen);
    };

    // Event listeners
    btnMenu.addEventListener('click', toggleMenu);
    menu.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
} else {
    console.error('Um ou mais elementos não foram encontrados no DOM.');
}
