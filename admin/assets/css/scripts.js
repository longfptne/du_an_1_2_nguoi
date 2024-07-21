document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.li-side-bar > .a-side-bar');

    menuItems.forEach(item => {
        item.addEventListener('click', function (event) {
            event.preventDefault();

            // Toggle active class
            const parentLi = this.parentElement;
            const isActive = parentLi.classList.contains('active');

            // Close all other sub-menus
            document.querySelectorAll('.li-side-bar').forEach(li => {
                li.classList.remove('active');
            });

            // If the clicked menu was not already active, open it
            if (!isActive) {
                parentLi.classList.add('active');
            }
        });
    });
});
