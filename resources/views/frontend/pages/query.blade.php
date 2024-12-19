<section class="py-5 bg-light">
    <div class="container">

        <form action="{{ route('query.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1>Let's Query/Brief Project</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="row">
                        <p>Platforms <span class="line-2 ms-2"></span></p>

                        @foreach ($catgorys as $category)
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" name="category_id"
                                        id="platform_label-{{ $category->id }}" type="checkbox"
                                        value="{{ $category->id }}" />
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

                    <div>
                        <a href="{{ route('contact') }}" class="btn-common-one animated mt-3"
                            data-animation-in="fadeInUp">
                            Contact Us
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-5 query-inputs-box rounded-2">
                        <p>
                            Add Technology & Others Information
                            <span class="line-2 ms-2"></span>
                        </p>
                        <div id="selected-platforms">
                            <div>
                                <img class="img-fluid w-100 rounded-2" style="height: 440px"
                                    src="{{ asset('frontend/assets/images/Platform &/first.png') }}" alt="" />
                            </div>
                        </div>
                        <div id="toggle-div" style="display: none">
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
                                                <option value="react">React</option>
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
                                                <option value="php">PHP</option>
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
                                                <option value="mysql">MySQL</option>
                                                <option value="postgresql">PostgreSQL</option>
                                                <option value="sqlite">SQLite</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Demo Site Link</label>
                                            <input type="url" class="form-control" name="demo_site" id="demo_site"
                                                placeholder="Demo Link" />
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_file">Demo File</label>
                                            <input type="file" class="form-control" name="demo_file"
                                                id="demo_file" placeholder="your file" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="client_name">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                id="client_name" placeholder="Jonson Heilson" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                placeholder="015******" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="email">Email</label>
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="client@mail.com" />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="mb-2" for="email">Message</label>
                                            <textarea name="message" class="form-control" id="" cols="10" rows="10"></textarea>
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

                <div class="col-lg-3">
                    <div class="row mt-5">
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

                    <div>
                        <button type="submit" class="btn-common-one animated mt-3 w-100"
                            data-animation-in="fadeInUp">
                            Submit Project Query
                        </button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>

<!-- JavaScript to handle checkbox selection -->
<script>
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
</script>
