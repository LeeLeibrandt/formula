<div class="splitview skewed">
    <div class="panel bottom">
        <div class="content">
            <div class="description">
                <h1>The original image.</h1>
                <p>This is how the image looks like before applying a duotone effect.</p>
            </div>
            <img src="img/cars/2.jpeg" alt="">
        </div>
    </div>

    <div class="panel top">
        <div class="content">
            <div class="description">
                <h1>The duotone image.</h1>
                <p>This is how the image looks like after applying a duotone effect.</p>
            </div>
            <img src="img/cars/2.jpeg" alt="">
        </div>
    </div>

    <div class="handle"></div>
</div>

<script>
    //SPLIT
    var parent = document.querySelector('.splitview'),
            topPanel = parent.querySelector('.top'),
            handle = parent.querySelector('.handle'),
            skewHack = 0,
            delta = 0;

        // If the parent has .skewed class, set the skewHack var.
        if (parent.className.indexOf('skewed') != -1) {
            skewHack = 1000;
        }

        parent.addEventListener('mousemove', function(event) {
            // Get the delta between the mouse position and center point.
            delta = (event.clientX - window.innerWidth / 2) * 0.5;

            // Move the handle.
            handle.style.left = event.clientX + delta + 'px';

            // Adjust the top panel width.
            topPanel.style.width = event.clientX + skewHack + delta + 'px';
        });
</script>