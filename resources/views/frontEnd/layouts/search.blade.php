
<!-- search section -->
<section class="search-section">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><span>Search your course</span></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- search form -->
                    <form class="course-search-form" action="{{ route('course-search') }}">
                        <input type="text" class="col-md-4" name="q" id="q" value="{{ request()->get("q") }}" placeholder="Course">
                        <select name="cat"  class="col-md-4 form-control"style="height: 57px;margin-right: 15px" >
                            <option  class="last-m" value=''>Any Category</option>
                            @foreach($category as $row)
                                <option {{ $row->id==request()->get('cat')?"selected":""}} value='{{ $row->id}}'>{{ $row->name}}</option>
                            @endforeach
                        </select>
                        {{--                        <input type="text" name="cat" id="cat" value="{{ request()->get("cat") }}" class="last-m" placeholder="Category">--}}
                        <button type="submit" class="site-btn">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->

{{--<!-- search section -->--}}
{{--<section class="search-section">--}}
{{--    <div class="container">--}}
{{--        <div class="search-warp">--}}
{{--            <div class="section-title text-white">--}}
{{--                <h2>Search your course</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-10 offset-md-1">--}}
{{--                    <!-- search form -->--}}
{{--                    <form class="course-search-form">--}}
{{--                        <input type="text" placeholder="Course">--}}
{{--                        <input type="text" class="last-m" placeholder="Category">--}}
{{--                        <button class="site-btn">Search Couse</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- search section end -->--}}

