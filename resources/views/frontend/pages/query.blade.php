<style>
    /* Hide the default checkbox */
    .platform_input {
        display: none;
    }

    /* Style the label to look like a button */
    .platform_label {
        width: 100%;
        display: inline-block;
        padding: 10px 20px;
        background-color: transparent;
        border: 1px solid #001624;
        color: #001624;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    /* Change color on hover */
    .platform_label:hover {
        background-color: #001624;
        transform: scale(1.05);
        border: 1px solid #001624;
        color: #ffff;

    }

    /* Checked state */
    .platform_input:checked+.platform_label {
        background-color: #001624;
        border: 1px solid #001624;
        color: #ffff;
    }

    .platform_input:checked+.platform_label:hover {
        background-color: #001624;
        border: 1px solid #001624;
        color: #ffff;
    }

    /* Optional: Add some custom style to the SVG */
    .platform_label svg {
        margin-right: 8px;
        fill: white;
    }
</style>
<section class="py-5 bg-light">
    <div class="container">
        <form action="{{ route('query.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gx-4">
                <div class="col-lg-12">
                    <div class="mb-4 d-flex align-items-center">
                        <h1>Let's Query/Brief Project</h1>
                    </div>
                </div>

                <div class=" col-lg-3">
                    <div class="row">
                        <p class="pt-3">Platforms <span class="line-2 ms-2"></span></p>
                        @foreach ($catgorys as $index => $category)
                            <div class="col-lg-12">
                                <div class="mb-2 palatform_checkbox">
                                    <input class="platform_input" name="category_id"
                                        id="platform_label-{{ $category->id }}" type="checkbox"
                                        value="{{ $category->id }}" @if ($index == 0) checked @endif />
                                    <label class="platform_label" for="platform_label-{{ $category->id }}">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>{{ $category->name }}</span>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- <div style="position: relative; top: 340px;">
                        <a href="{{ route('contact') }}" class="mt-3 w-100 btn-common-one animated"
                            data-animation-in="fadeInUp">
                            Contact us for more information
                        </a>
                    </div> --}}
                </div>

                <div class="col-lg-6 ">
                    <p class="pt-3 mb-0 bg-white ps-3">Choose Project Technology <span class="line-2 ms-2"></span></p>
                    <div class="query-inputs-box rounded-2">
                        <div id="selected-platforms">
                            <div>
                                <img class="img-fluid w-100 rounded-2" style="height: 440px"
                                    src="{{ asset('frontend/assets/images/Platform &/first.png') }}" alt="" />
                            </div>
                        </div>
                        <div id="toggle-div">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="frontend">Frontend</label>
                                            <select class="form-select w-100" name="frontend" id="frontend"
                                                aria-label="frontend">
                                                <option selected>Select Frontend Technology</option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="typescript">TypeScript</option>
                                                <option value="React" selected>React</option>
                                                <option value="angular">Angular</option>
                                                <option value="vue">Vue</option>
                                                <option value="svelte">Svelte</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="backend">Backend</label>
                                            <select class="form-select w-100" name="backend" id="backend"
                                                aria-label="backend">
                                                <option selected>Select Backend Technology</option>
                                                <option value="nodejs">Node.js</option>
                                                <option value="php" selected>PHP</option>
                                                <option value="python">Python</option>
                                                <option value="java">Java</option>
                                                <option value="c-sharp">C#</option>
                                                <option value="c-plus-plus">C++</option>
                                                <option value="ruby">Ruby</option>
                                                <option value="go">Go</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="database">Database</label>
                                            <select class="form-select w-100" name="database" id="database"
                                                aria-label="database">
                                                <option selected>Select Database</option>
                                                <option value="sql">SQL</option>
                                                <option value="nosql">NoSQL</option>
                                                <option value="mongodb">MongoDB</option>
                                                <option value="mysql" selected>MySQL</option>
                                                <option value="postgresql">PostgreSQL</option>
                                                <option value="sqlite">SQLite</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Demo Site Link</label>
                                            <input type="url" class="form-control" name="demo_site" id="demo_site"
                                                placeholder="Demo Link" value="https://www.ngenitltd.com/" />
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_file">Demo File</label>
                                            <input type="file" class="form-control" name="demo_file" id="demo_file"
                                                placeholder="your file" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="client_name">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" required
                                                id="client_name" placeholder="Jonson Heilson"
                                                value="Jonson Heilson" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="phone">Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="phone" required class="form-control"
                                                id="phone" placeholder="015******" value="015 **** ****" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="email">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="email" required class="form-control"
                                                id="email" placeholder="client@mail.com"
                                                value="ngenit@gmail.com" />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="mb-2" for="email">Message <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="message" required class="form-control" id="" cols="10" rows="10"
                                                value="Please Contact us">Please provide a brief overview of my project if you know what i need, including objectives, scope, and any specific requirements you have in mind.</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 d-none">
                                        <div class="mb-3">
                                            <label class="mb-2" for="duration">Duration:</label>
                                            <select id="duration" class="form-select w-100">
                                                <option value="">Select Duration</option>
                                                <option value="2 months">2 months</option>
                                                <option value="3 months">3 months</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white col-lg-3 ">
                    <p class="pt-3">Your Choosen Result <span class="line-2 ms-2"></span></p>
                    <div class="row">
                        <div id="query-platforms">
                            <div>
                                <img class="img-fluid w-100 rounded-2"
                                    src="{{ asset('frontend/assets/images/Platform &/last.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-12" id="show-selection">
                            <div id="selected-options">
                                <!-- Selected platforms will appear here -->
                            </div>
                        </div>
                    </div>

                    <div class="pt-5 mb-3" style="position: relative; top: 120px;">
                        <button type="submit" class="mt-5 btn-common-three animated w-100 rounded-3"
                            data-animation-in="fadeInUp">
                            Submit Query <i class="fas fa-arrow-right-long ps-3"></i>
                        </button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>

<!-- JavaScript to handle checkbox selection -->
{{-- <script>
    document.querySelectorAll('.platform_input').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const selectedPlatformLabel = this.nextElementSibling.querySelector('span').textContent;
            const selectedPlatformValue = this.value;

            if (this.checked) {
                const selectedOptionsDiv = document.getElementById('selected-options');
                const newSelection = document.createElement('div');
                newSelection.classList.add('selected-platform');
                newSelection.innerHTML = `
                    <span>${selectedPlatformLabel}</span>
                    <button type="button" class="remove-btn" onclick="removeSelectedOption(this, '${selectedPlatformValue}')">Remove</button>
                `;
                selectedOptionsDiv.appendChild(newSelection);
                document.getElementById('toggle-div').style.display = 'block'; // Show the form
            } else {
                if (document.querySelectorAll('.platform_input:checked').length === 0) {
                    document.getElementById('toggle-div').style.display = 'none';
                }
                removeSelectedOption(null, selectedPlatformValue);
            }
        });
    });

    function removeSelectedOption(button, platformValue) {
        const selectedOptionsDiv = document.getElementById('selected-options');
        selectedOptionsDiv.querySelectorAll('.selected-platform').forEach(function(option) {
            if (option.textContent.includes(platformValue)) {
                option.remove();
            }
        });
        if (document.querySelectorAll('.platform_input:checked').length === 0) {
            document.getElementById('toggle-div').style.display = 'none'; // Hide form if no checkboxes selected
        }
    }
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ensure #toggle-div is visible by default when the page loads
        document.getElementById('toggle-div').style.display = 'block';

        document.querySelectorAll('.platform_input').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const selectedPlatformLabel = this.nextElementSibling.querySelector('span')
                    .textContent;
                const selectedPlatformValue = this.value;

                if (this.checked) {
                    const selectedOptionsDiv = document.getElementById('selected-options');
                    const newSelection = document.createElement('div');
                    newSelection.classList.add('selected-platform');
                    newSelection.innerHTML = `
                    <span class="mb-0">${selectedPlatformLabel}</span>
                    <button type="button" class="remove-btn" onclick="removeSelectedOption(this, '${selectedPlatformValue}')">Remove</button>
                `;
                    selectedOptionsDiv.appendChild(newSelection);
                } else {
                    removeSelectedOption(null, selectedPlatformValue);
                }
            });
        });

        function removeSelectedOption(button, platformValue) {
            const selectedOptionsDiv = document.getElementById('selected-options');
            selectedOptionsDiv.querySelectorAll('.selected-platform').forEach(function(option) {
                if (option.textContent.includes(platformValue)) {
                    option.remove();
                }
            });
        }
    });
</script>
