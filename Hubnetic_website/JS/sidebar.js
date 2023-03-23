const menuItems = document.querySelectorAll(".sidebar-menu li");

menuItems.forEach((item) => {
  item.addEventListener("click", (event) => {
    // Remove the "active" class from all menu items
    menuItems.forEach((item) => {
      item.classList.remove("active");
    });

    // Add the "active" class to the clicked menu item
    event.currentTarget.classList.add("active");
  });
});
