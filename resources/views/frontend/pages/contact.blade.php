<x-frontend-app-layout :title="'Contact'">

    <!-- Contact Section Start -->
    <section>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <img src="{{ !empty($banner->image) && file_exists('storage/' . $banner->image) ? url('storage/' . $banner->image) : asset('images/no-banner.jpg') }}"
                            alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h3 class="py-5">Ask How We Can Help You!</h3>

                    @if (optional($setting)->whatsapp_number || optional($setting)->phone_one || optional($setting)->phone_two)
                        <div class="pb-4">
                            <h5>Points of contact</h5>
                            <p>{{ optional($setting)->whatsapp_number }}</p>
                            <p>{{ optional($setting)->phone_one }}</p>
                            <p>{{ optional($setting)->phone_two }}</p>
                        </div>
                    @endif

                    @if (optional($setting)->contact_email || optional($setting)->support_email || optional($setting)->info_email)
                        <div class="pb-4">
                            <h5>Information and Sales</h5>
                            <p class="mb-0">{{ optional($setting)->contact_email }}</p>
                            <p class="mb-0">{{ optional($setting)->support_email }}</p>
                            <p class="mb-0">{{ optional($setting)->info_email }}</p>
                        </div>
                    @endif

                    @if (optional($setting)->address_line_one || optional($setting)->address_line_two)
                        <div class="pb-5">
                            <h5>Additional Office Locations</h5>
                            <p class="mb-0">{{ optional($setting)->address_line_one }}</p>
                            <p class="mb-0">{{ optional($setting)->address_line_two }}</p>
                        </div>
                    @endif

                </div>
                <div class="col-lg-6" style="background-color: #2c3e50">

                    <div class="p-3">
                        <h3 class="py-5 pb-0 text-white">
                            Contact us for further query!
                        </h3>
                    </div>

                    <form action="{{ route('contact.store') }}" method="post" class="p-3">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label text-white">Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Jonson Hebit" required />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label text-white">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                    placeholder="Jonson@example.com" required />
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label text-white">Phone </label>
                                <input type="text" class="form-control" name="phone" id="exampleFormControlInput1"
                                    placeholder="+880 1585864658" />
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="exampleFormControlInput1" class="form-label text-white">Your Message <span
                                        class="text-danger">*</span></label>
                                <textarea name="message" id="" class="form-control" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn-common-two w-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-frontend-app-layout>
