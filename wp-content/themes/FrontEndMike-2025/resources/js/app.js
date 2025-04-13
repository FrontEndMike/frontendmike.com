// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

//Scroll effect
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  if (window.scrollY > 50) {
    header.classList.add("py-2");
    header.classList.remove("p-4");
  } else {
    header.classList.add("p-4");
    header.classList.remove("py-2");
  }
});

const projects = document.querySelectorAll('.project');

if (projects) {
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.filter-button');
        const projects = document.querySelectorAll('.project');
        const noProjectsMessage = document.querySelector('#no-projects-message');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                this.classList.toggle('active');

                const selectedCategories = [];

                buttons.forEach(button => {
                    if (button.classList.contains('active')) {
                        selectedCategories.push(button.getAttribute('data-category'));
                    }
                });

                let anyVisible = false;

                projects.forEach(project => {
                    const projectCategories = project.classList;

                    if (selectedCategories.length === 0) {
                        project.style.display = 'grid';
                        anyVisible = true;
                    } else {
                        let showProject = selectedCategories.every(category =>
                            projectCategories.contains('category-' + category)
                        );

                        project.style.display = showProject ? 'grid' : 'none';

                        if (showProject) anyVisible = true;
                    }
                });

                // Show or hide the no-projects message
                if (noProjectsMessage) {
                    noProjectsMessage.style.display = anyVisible ? 'none' : 'block';
                }
            });
        });
    });
}


document.addEventListener("DOMContentLoaded", function () {
    const hamButton = document.getElementById("ham-interior");
    
    if (hamButton) { // Ensure element exists before adding event listener
        hamButton.addEventListener("click", toggleMenu);
    }

    function toggleMenu() {
        hamButton.classList.toggle("is-active");
    }
});
