
<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Our Course Categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <!-- categorie -->
            @foreach($category as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <a href="{{ route("course-search",["cat"=>$row->id]) }}" class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg={{asset('storage/'. $row->image)}}></div>
                            <div class="ci-text">
                                <h5>{{$row->name}}</h5>
                                <p>{{$row->description}}</p>
                                <span>{{$row->courses->count()}} Courses</span>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- categories section end -->
