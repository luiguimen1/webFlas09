<?php if ($_POST) { ?>
    <div class="row">
        <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h4 class="card-title">Info card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
<?php
} else {
    header("location: ./");
}