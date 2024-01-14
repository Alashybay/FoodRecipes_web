
<div class="recipe-card">
    <div class="recipe-header">
        <h2><?php echo $title; ?></h2>
    </div>
    <div class="recipe-content">
        <img class="recipe-image" src="<?php echo $image; ?>" alt="Image was damaged">
        <p class="recipe-description"><?php echo $description; ?></p>
        <button class="btn show-more-btn" onclick="toggleMoreContent(this)">Show More</button>
        <!-- <button class="btn save-btn" onclick="saveRecipe()">Save</button> -->
        <div class="additional-content" style="display: none;">
            <p><strong>Category:</strong> <?php echo $category_name; ?></p>
            <p><strong>Steps:</strong> <?php echo $steps; ?></p>
            <p><strong>Author:</strong> <?php echo $author; ?></p>
        </div>

    </div>
</div>

<script>
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

    function saveRecipe() {
        var saveBtn = document.querySelector('.save-btn');

        if (saveBtn.innerText === 'Save') {
            saveBtn.innerText = 'Saved';
            alert('Recipe saved!');
        } else {
            saveBtn.innerText = 'Save';
            alert('Recipe unsaved!');
        }
    }
</script>