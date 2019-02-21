<div class="parallax" data-background="{{ asset('vendor/template/images/single-property-01.jpg') }}" data-color="rgb(37, 34, 70)" data-color-opacity="0.65" data-img-width="2500" data-img-height="1600" background-size="cover" style="background-size: cover">
    <div class="parallax-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Main Search Container -->
                    <div class="main-search-container">
                        {{--<h2>We help people and home find each other</h2>--}}

                        <!-- Main Search -->
                        <form class="main-search-form" action="" method="post">
                            @csrf
                            <!-- Type -->
                            <div class="search-type">
                                <label class="active"><input class="first-tab" name="type" value="all" checked="checked" type="radio">Any Status</label>
                                <label><input name="type" type="radio" value="sale">For Sale</label>
                                <label><input name="type" type="radio" value="rent">For Rent</label>
                                <div class="search-type-arrow"></div>
                            </div>


                            <!-- Box -->
                            <div class="main-search-box">

                                <!-- Main Search Input -->
                                <div class="main-search-input larger-input">
                                    <input id="autocomplete-input" type="text" class="ico-01" placeholder="Enter house name, location or agent" value=""/>
                                    <button class="button">Search</button>
                                </div>

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- House Type -->
                                    <div class="col-md-4">
                                        <select data-placeholder="Any Type" class="chosen-select-no-single" >
                                            <option value="all">Any Type</option>
                                            <option value="sale">For Sale</option>
                                            <option value="rent">For Rent</option>
                                        </select>
                                    </div>


                                    <!-- Min Price -->
                                    <div class="col-md-4">

                                        <!-- Select Input -->
                                        <div class="select-input">
                                            <input type="text" placeholder="Min Price" data-unit="{{ setting('payments.currency_symbol') }}">
                                        </div>
                                        <!-- Select Input / End -->

                                    </div>


                                    <!-- Max Price -->
                                    <div class="col-md-4">

                                        <!-- Select Input -->
                                        <div class="select-input">
                                            <input type="text" placeholder="Max Price" data-unit="{{ setting('payments.currency_symbol') }}">
                                        </div>
                                        <!-- Select Input / End -->

                                    </div>

                                </div>
                                <!-- Row / End -->


                                <!-- More Search Options will be here -->

                            </div>
                            <!-- Box / End -->

                        </form>
                        <!-- Main Search -->

                    </div>
                    <!-- Main Search Container / End -->

                </div>
            </div>
        </div>

    </div>
</div>
