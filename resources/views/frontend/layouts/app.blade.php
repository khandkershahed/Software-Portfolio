<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ !empty(optional($setting)->site_name) ? optional($setting)->site_name : 'NGEN Software' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap_bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body>
    @include('frontend.layouts.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                {{ $slot }}
            </main>
            @include('frontend.layouts.footer')
        </div>
    </div>


    <script src="{{ asset('frontend/assets/vendors/bootstrap_bundle.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/vendors/jquery.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('frontend/assets/vendors/slick-carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/slick-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/fontawesome.js') }}"></script>
    <!-- Gsap With Animation -->
    <script src="http://clou.agency/wp-content/themes/clou-digital-agency/js/frontpage/Scrollsmoother.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <!-- End -->
    <script src="{{ asset('frontend/assets/script/script.js') }}"></script>
    <script>
        // Checkbox Platforms
        document.addEventListener("DOMContentLoaded", function() {
            // Function to update the selection
            function updateSelection() {
                let selectedOptions = "";
                let platforms = [];

                // Capture selected checkbox (only one)
                document
                    .querySelectorAll(".platform_input:checked")
                    .forEach(function(checkbox) {
                        platforms.push(checkbox.value);
                    });

                // Capture selected dropdown values
                let frontend = document.getElementById("frontend").value;
                let backend = document.getElementById("backend").value;
                let database = document.getElementById("database").value;

                // Capture values from input fields
                let clientName = document.getElementById("client_name").value;
                let phone = document.getElementById("phone").value;
                let email = document.getElementById("email").value;
                let demoSite = document.getElementById("demo_site").value;
                let demoFile = document.getElementById("demo_file").value;
                let duration = document.getElementById("duration").value;

                // Display selected platforms (checkboxes)
                if (platforms.length > 0) {
                    selectedOptions +=
                        "<p><strong>Selected Platform:</strong> " +
                        platforms.join(", ") +
                        "</p>";
                }

                // Display selected frontend dropdown
                if (frontend !== "Select Frontend Technology") {
                    selectedOptions +=
                        "<p><strong>Frontend Technology:</strong> " + frontend + "</p>";
                }

                // Display selected backend dropdown
                if (backend !== "Select Backend Technology") {
                    selectedOptions +=
                        "<p><strong>Backend Technology:</strong> " + backend + "</p>";
                }

                // Display selected database dropdown
                if (database !== "Select Database") {
                    selectedOptions +=
                        "<p><strong>Database:</strong> " + database + "</p>";
                }

                // Display values from input fields (not selected options)
                if (clientName) {
                    selectedOptions +=
                        "<p><strong>Name:</strong> " + clientName + "</p>";
                }
                if (phone) {
                    selectedOptions += "<p><strong>Phone:</strong> " + phone + "</p>";
                }
                if (email) {
                    selectedOptions += "<p><strong>Email:</strong> " + email + "</p>";
                }
                if (demoSite) {
                    selectedOptions +=
                        "<p><strong>Demo Site Link:</strong> " + demoSite + "</p>";
                }
                if (demoFile) {
                    selectedOptions +=
                        "<p><strong>Demo File/Image:</strong> " + demoFile + "</p>";
                }
                if (duration) {
                    selectedOptions +=
                        "<p><strong>Duration:</strong> " + duration + "</p>";
                }

                // Show the selected options in the #selected-options div
                if (selectedOptions) {
                    document.getElementById("selected-options").innerHTML =
                        selectedOptions;
                } else {
                    document.getElementById("selected-options").innerHTML =
                        "<p><strong>No selections made yet.</strong></p>";
                }

                // Show the #show-selection div only when a selection is made
                if (
                    platforms.length > 0 ||
                    frontend !== "Select Frontend Technology" ||
                    backend !== "Select Backend Technology" ||
                    database !== "Select Database"
                ) {
                    document.getElementById("show-selection").style.display = "block";
                } else {
                    document.getElementById("show-selection").style.display = "none";
                }

                // Hide or show default image based on checkbox selection
                if (platforms.length > 0) {
                    document.getElementById("selected-platforms").style.display =
                        "none"; // Hide default image
                } else {
                    document.getElementById("selected-platforms").style.display =
                        "block"; // Show default image
                }
                if (platforms.length > 0) {
                    document.getElementById("query-platforms").style.display = "none"; // Hide default image
                } else {
                    document.getElementById("query-platforms").style.display = "block"; // Show default image
                }
            }

            // Show select box when any checkbox is selected
            document
                .querySelectorAll(".platform_input")
                .forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        // Uncheck other checkboxes if one is selected
                        document
                            .querySelectorAll(".platform_input")
                            .forEach(function(otherCheckbox) {
                                if (otherCheckbox !== checkbox) {
                                    otherCheckbox.checked = false;
                                }
                            });

                        // Show select box if any checkbox is selected
                        if (
                            document.querySelectorAll(".platform_input:checked").length > 0
                        ) {
                            document.getElementById("toggle-div").style.display = "block";
                        } else {
                            document.getElementById("toggle-div").style.display = "none";
                        }
                        updateSelection();
                    });
                });

            // Show the selected items in the last column when a selection is made
            document
                .getElementById("frontend")
                .addEventListener("change", updateSelection);
            document
                .getElementById("backend")
                .addEventListener("change", updateSelection);
            document
                .getElementById("database")
                .addEventListener("change", updateSelection);
            document
                .getElementById("demo_site")
                .addEventListener("change", updateSelection);
            document
                .getElementById("client_name")
                .addEventListener("input", updateSelection);
            document
                .getElementById("phone")
                .addEventListener("input", updateSelection);
            document
                .getElementById("email")
                .addEventListener("input", updateSelection);
            document
                .getElementById("demo_file")
                .addEventListener("change", updateSelection);

            // Use 'change' for the duration dropdown to update when the user selects a value
            document
                .getElementById("duration")
                .addEventListener("change", updateSelection);

            // Initial update on page load
            updateSelection();
        });
    </script>
    <script>
        $(".partners-carousel").slick({
            speed: 5000, // Control the speed of continuous scrolling
            autoplay: true, // Enable autoplay
            autoplaySpeed: 0, // Make it seamless
            cssEase: "linear", // Smooth linear animation
            slidesToShow: 8, // Number of slides visible
            slidesToScroll: 1, // Number of slides to scroll at once
            infinite: true, // Enable infinite scrolling
            swipeToSlide: true, // Allow swiping directly to a slide
            centerMode: true, // Center the current slide
            focusOnSelect: true, // Select slide on focus
            pauseOnHover: false, // Prevent pausing on hover
            pauseOnFocus: false, // Prevent pausing on focus
            arrows: false, // Disable navigation arrows
            draggable: true, // Enable dragging with mouse
            responsive: [{
                    breakpoint: 750,
                    settings: {
                        slidesToShow: 3, // Adjust slides for small screens
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2, // Adjust slides for very small screens
                    },
                },
            ],
        });
    </script>


</body>

</html>
