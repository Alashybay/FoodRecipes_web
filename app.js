
function deleteUser(id) {

    // check existence of id
    if (!id) {
        return;
    }

    // check if user is sure
    const answer = confirm('Are you sure you want to delete this user?');
    if (!answer) {
        return;
    }

    // send delete request
    fetch('controllers/deleteUser.php?id=' + id, {
        method: 'DELETE',
    })

    // reload page after request is complete
    .then(response => {
        window.location.reload();
    });
}

function updateUserRole(id) {
    
    // check existence of id
    if (!id) {
        return;
    }

    // check if user is sure
    const answer = confirm('Are you sure you want to update this user?');
    if (!answer) {
        return;
    }

    // send update request
    fetch('controllers/updateRole.php?id=' + id, {
        method: 'PUT',
    })

    // reload page after request is complete
    .then(response => {
        window.location.reload();
    });

}

function reloadPage() {
    window.location.reload();
}

function drawCards() {
    const element = document.getElementById('recipes');


    fetch('controllers/getRecipes.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(recipe => {
                const recipeContainer = document.createElement('div');
                recipeContainer.classList.add('recipe-card');
                recipeContainer.id = 'card';

                const template = `
                    <div class="recipe-header">
                        <h2>${recipe.title}</h2>
                    </div>
                    <div class="recipe-content">
                        <img class="recipe-image" src="public/images/icon.jpeg" alt="Image was damaged">
                        <p class="recipe-description">${recipe.description}</p>
                        <button class="btn show-more-btn" onclick="toggleMoreContent(this)">Show More</button>
                        <div class="additional-content" style="display: none;">
                            <p><strong>Category:</strong> ${recipe.category_name}</p>
                            <p><strong>Additional Info:</strong> ${recipe.additional_info}</p>
                            <p><strong>Author:</strong> ${recipe.author}</p>
                        </div>
                    </div>
                `;

                recipeContainer.innerHTML = template;

                element.appendChild(recipeContainer);
            });
            
        })
        .catch(error => {
            console.error('Error:', error);
        });
}


window.addEventListener('load', drawCards);

function toggleMoreContent(btn) {
    var additionalContent = btn.parentNode.querySelector('.additional-content');

    if (additionalContent.style.display === 'none' || additionalContent.style.display === '') {
        additionalContent.style.display = 'block';
        btn.innerText = 'Hide';
    } else {
        additionalContent.style.display = 'none';
        btn.innerText = 'Show More';
    }
}
