
<!-- search section -->
<section class="search-section ss-other-page">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><span>Search your course</span></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <!-- search form -->
                    <form  class="course-search-form center-block" action="{{ route('course-search') }}">

                        <input  type="text" class="col-md-3 " name="q" id="q" value="{{ request()->get("q") }}" placeholder="Course">
{{--                        <input type="text" class="col-md-4" name="cat" id="cat" value="{{ request()->get("cat") }}" placeholder="category">--}}

                        <select name="cat" class="col-md-3 form-control" style="height: 57px;margin-right: 15px"   >
                            <option type="text"  value=''>Any Category</option>
                            @foreach($category as $row)
                                <option {{ $row->id==request()->get('cat')?"selected":""}} value='{{ $row->id}}'>{{ $row->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="site-btn btn-dark">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
