        <section id="slider">
            <div class="w3-content" style="max-width:800px;position:relative">
              <img class="mySlides" src="image/test/img_fjords.jpg" style="width:100%">
              <img class="mySlides" src="image/test/img_lights.jpg" style="width:100%">
              <img class="mySlides" src="image/test/img_mountains.jpg" style="width:100%">
              <img class="mySlides" src="image/test/img_forest.jpg" style="width:100%">
                <figure class="mySlides">
                    <img src="image/test/img_fjords.jpg" style="width:100%">
                    <figcaption>Bilde 1</figcaption>
                </figure>
                <figure class="mySlides">
                    <img src="image/test/img_lights.jpg" style="width:100%">
                    <figcaption>Bilde 2</figcaption>
                </figure>
                <figure class="mySlides">
                    <img src="image/test/img_mountains.jpg" style="width:100%">
                    <figcaption>Bilde 3</figcaption>
                </figure>
                <figure class="mySlides">
                    <img src="image/test/img_forest.jpg" style="width:100%">
                    <figcaption>Bilde 4</figcaption>
                </figure>

              <a class="w3-btn-floating pictureLeftArrow" onclick="plusDivs(-1)"><img src="image/test/left-black-arrow-hi.png" /></a>
              <a class="w3-btn-floating pictureRightArrow" onclick="plusDivs(1)"><img src="image/test/right-black-arrow-hi.png" /></a>
            </div>
		</section>


    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>