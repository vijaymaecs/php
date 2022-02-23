<?php
    $product = "Variable Product Name";
    $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, debitis harum";
?>

<div class="card-container">
    <?php
        for ($x = 0; $x <= 10; $x++) {
            echo '<div class="card">';
            echo '<div class="card-img"><img src="image/placeholder.png"></div>';
            echo '<div class="card-content">';
            echo '<div class="card-header"> <h1>' . $product . '</h1> </div>';
            echo '<div class="card-description">';
            echo '<p>' . $description . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>
</div>


<!-- <div class="card-container">
    <div class="card">
        <div class="card-img"><img src="image/placeholder.png"></div>
        <div class="card-content">
            <div class="card-header"> <h1>Lorem, ipsum dolor.</h1> </div>
            <div class="card-description"> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, debitis harum? Ut vero minus quibusdam?</p> </div>
        </div>
    </div>
</div> -->