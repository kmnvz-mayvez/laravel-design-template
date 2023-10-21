(function () {
    "use strict";

    $(document).ready(function () {
        const slides = $(".slide-show .slide");
        let currentSlideIndex = 0;
        const fadeInDuration = 1000;
        const intervalDuration = 5000;

        function showSlide(index) {
            slides.each(function (i) {
                const slide = $(this);
                if (i === index) {
                    fadeIn(slide);
                } else {
                    slide.removeClass("active");
                }
            });
        }

        function fadeIn(element) {
            element.addClass("active");
        }

        function nextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex);
        }

        function startSlideshow() {
            showSlide(currentSlideIndex);
            setInterval(nextSlide, intervalDuration);
        }

        startSlideshow();
    });

    $(document).ready(function () {
        var progressElement = $("#progress");
        var progressValue = 0;
        var windowHeight = $(window).height();
        var documentHeight = $(document).height();
        var lastScrollTop = 0;
        function updateProgressBar() {
            var st = $(this).scrollTop();
            var scrollDiff = st - lastScrollTop;

            if (scrollDiff > 0) {
                progressValue +=
                    (scrollDiff / (documentHeight - windowHeight)) * 100;
                lastScrollTop = st;
                progressValue = Math.max(0, Math.min(100, progressValue));
                progressElement.width(progressValue + "%");
            }
            requestAnimationFrame(updateProgressBar);
        }
        $(window).on("scroll", updateProgressBar);

        updateProgressBar();
    });

    $(document).ready(function () {
        $("#rsvpForm").submit(function (event) {
            var name = $("#name").val().trim();
            var email = $("#email").val().trim();
            var attend = $("#attend").val();
            var amount = $("#amount").val();

            if (
                name === "" ||
                email === "" ||
                attend === "" ||
                amount === "" ||
                amount <= 0
            ) {
                event.preventDefault();
                alert(
                    "Please fill in all the required fields and provide a valid number of attendees."
                );
            }
        });
    });
    $(document).ready(function () {
        var randomLatitude = (Math.random() * (180) - 90).toFixed(6);
        var randomLongitude = (Math.random() * (360) - 180).toFixed(6);
    
        var map = L.map("map", {
            zoomControl: false,
            dragging: false,
            scrollWheelZoom: false,
        }).setView([randomLatitude, randomLongitude], 15);
    
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(map);
    
        var marker = L.marker([randomLatitude, randomLongitude], {
            draggable: false,
        }).addTo(map);
    
        var locationLink = "https://www.google.com/maps?q=" + randomLatitude + "," + randomLongitude;
    
        marker
            .bindPopup(
                "<b>Location: " + randomLatitude + ", " + randomLongitude + "</b><br><a href='" + locationLink + "' target='_blank'>Open in Google Maps</a>"
            )
            .openPopup();
    
        map.dragging.disable();
        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.boxZoom.disable();
        map.keyboard.disable();
        if (map.tap) map.tap.disable();
    });

    function updateCountdown() {
        const targetDate = new Date("2023-08-26");
        const now = new Date().getTime();
    
        if (now >= targetDate.getTime()) {
            $("#days").text("00");
            $("#hours").text("00");
            $("#minutes").text("00");
            $("#seconds").text("00");
            return; 
        }
    
        const distance = targetDate - now;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        $("#days").text(String(days).padStart(2, "0"));
        $("#hours").text(String(hours).padStart(2, "0"));
        $("#minutes").text(String(minutes).padStart(2, "0"));
        $("#seconds").text(String(seconds).padStart(2, "0"));
    }
    
    function startCountdown() {
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
    
    $(document).ready(function () {
        startCountdown();
    });

    $(document).ready(function () {
        var music = $("#music")[0];
        var playPauseBtn = $("#playPause");

        function playMusic() {
            music.play();
            playPauseBtn.text("Music On");
            playPauseBtn.off("click", playMusic);
            playPauseBtn.on("click", pauseMusic);
        }

        function pauseMusic() {
            music.pause();
            playPauseBtn.text("Music Off");
            playPauseBtn.off("click", pauseMusic);
            playPauseBtn.on("click", playMusic);
        }

        playPauseBtn.on("click", playMusic);
    });
})();
