document.addEventListener('DOMContentLoaded', function() {
            var portfolioItems = document.querySelectorAll('.portfolio-item');
            var categoryLinks = document.querySelectorAll('.portfolio-section a');
            portfolioItems.forEach(function(item) {
                item.style.display = 'block';
            });

            categoryLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var filter = link.getAttribute('data-filter');

                    portfolioItems.forEach(function(item) {
                        item.style.display = 'none';
                    });

                    if (filter === 'all') {
                        portfolioItems.forEach(function(item) {
                            item.style.display = 'block';
                        });
                    } else {
                        var filteredItems = document.querySelectorAll('.portfolio-item.' + filter);
                        filteredItems.forEach(function(item) {
                            item.style.display = 'block';
                        });
                    }

                    categoryLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });
                    link.classList.add('active');
                });
            });
        });