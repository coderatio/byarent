<!-- Search
================================================== -->
<section class="search margin-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Title -->
                <form action="">
                    <h3 class="search-title">Search</h3>

                    <!-- Form -->
                    <div class="main-search-box no-shadow">


                        <!-- Row With Forms -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-3">
                                <select data-placeholder="Any Status" class="chosen-select-no-single" >
                                    <option value="all">Any Status</option>
                                    <option value="sale" @if($type == 'sale') selected @endif>For Sale</option>
                                    <option value="rent" @if($type == 'rent') selected @endif>For Rent</option>
                                </select>
                            </div>

                            <!-- Main Search Input -->
                            <div class="col-md-9">
                                <div class="main-search-input">
                                    <input type="text" placeholder="Enter address e.g. street, city or state" value=""/>
                                    <button class="button">Search</button>
                                </div>
                            </div>

                        </div>
                        <!-- Row With Forms / End -->
                    </div>
                </form>
                <!-- Box / End -->
            </div>
        </div>
    </div>
</section>

