window.onload = () => {
    const sidebarBtn = document.querySelector('#menu-toggle');
    const wrapper = document.querySelector('#wrapper');
    sidebarBtn.addEventListener("click", toggleSidebar);

    function toggleSidebar(){
        wrapper.classList.toggle("toggled");
    }
}