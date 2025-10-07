const btnSide = document.getElementById('btn-sidebar');
const Sidebar = document.getElementById('sidebar');
const Content = document.getElementById('content');
const logoText = document.getElementById('logo-text');
const menu = document.querySelectorAll('.nama-menu');
const menuSide = document.querySelectorAll('#menu-side')
// layanan
const toggleLayanan = document.getElementById("toggle-layanan");
const menuLayanan = document.getElementById("menu-layanan");
const arrow = document.getElementById("btn-layanan");

// Sidebar toggle 
btnSide.addEventListener('click', () => {
  const isClosed = Sidebar.classList.toggle('sidebar-closed');
  Content.classList.toggle('content-closed');

 
  // sidebar ditutup
  if (isClosed) {
    logoText.classList.add("opacity-0", "-translate-x-5");
    logoText.classList.remove("opacity-100", "translate-x-0");
    btnSide.classList.add("rotate-180");
    menu.forEach(t => {
      t.classList.remove("opacity-100", "translate-x-0");
      t.classList.add("opacity-0", "-translate-x-2");
    });
    arrow.classList.add("hidden");
    menuLayanan.classList.add("max-h-0");
    menuLayanan.classList.remove("max-h-96");
    arrow.classList.remove("rotate-90");
    localStorage.setItem("dropdownLayanan", "closed"); 
  } else {
    logoText.classList.remove("opacity-0", "-translate-x-5");
    logoText.classList.add("opacity-100", "translate-x-0");
    btnSide.classList.remove("rotate-180");
    menu.forEach((t, i) => {
      setTimeout(() => {
        t.classList.remove("opacity-0", "-translate-x-2");
        t.classList.add("opacity-100", "translate-x-0");
      }, i * 80); 
    });
    arrow.classList.remove("hidden");
  }
});


// buka dropdown 
const dropdownState = localStorage.getItem("dropdownLayanan");
if (dropdownState === "open") {
  menuLayanan.classList.remove("max-h-0");
  menuLayanan.classList.add("max-h-96");
  arrow.classList.add("rotate-90");
}

// Dropdown layanan toggle 
toggleLayanan.addEventListener("click", (e) => {
  if (Sidebar.classList.contains("sidebar-closed")) {
    e.preventDefault();
    return;
  }

  const isClosed = menuLayanan.classList.contains("max-h-0");

  if (isClosed) {
    menuLayanan.classList.remove("max-h-0");
    menuLayanan.classList.add("max-h-96");
    arrow.classList.add("rotate-90");
    localStorage.setItem("dropdownLayanan", "open"); 
  } else {
    menuLayanan.classList.add("max-h-0");
    menuLayanan.classList.remove("max-h-96");
    arrow.classList.remove("rotate-90");
    localStorage.setItem("dropdownLayanan", "closed"); 
  }
});

