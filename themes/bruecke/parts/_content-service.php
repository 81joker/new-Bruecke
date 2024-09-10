
    <!-- Speaker Section Begin -->
    <section class="speaker-section spad">
        <div class="container">
               <!-- Start Search && Filter Date -->
               <div class="row pb-4">
                <!-- Start && End DATA -->

                        <div class="col-10 mt-3">
                            <div class="input-group">
                            <input type="date" id="start-date" placeholder="Start Date" class="form-control" min="2022-01-01" max="2025-12-31">
                            <input type="date" id="end-date" placeholder="End Date" class="form-control" min="2022-01-01" max="2025-12-31">
                                <input href="<?php echo esc_url(site_url('/search')) ?>" type="search" id="form1" class="form-control" placeholder="Search" />
                                <div class="input-group-append">
                                    <a class="btn btn-primary input-search-trigger" type="button" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);">               
                                        <i class="fa fa-search px-3 text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
            <!-- End Search && Filter Date -->
            <div class="row row-cols-md-2 row-cols-1" id="input-overlay__results">
                    
            </div>
            <div class="load-more">
                <a href="#" class="primary-btn">Load More</a>
            </div>
        </div>
    </section>
    <!-- Speaker Section End -->