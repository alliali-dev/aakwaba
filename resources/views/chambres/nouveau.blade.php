@extends(layouts_dash.main)
@section('content')
<div class="lg:flex lg:-mx-4">

    <!-- Content -->
    <div class="lg:w-1/2 xl:w-3/4 lg:px-4">
        <div class="card p-5">
            <form>
                <div class="mb-5 xl:w-1/2">
                    <label class="label block mb-2" for="title">Title</label>
                    <input id="title" type="text" class="form-control">
                </div>
                <div class="mb-5 xl:w-1/2">
                    <label class="label block mb-2" for="slug">Slug</label>
                    <input id="slug" type="text" class="form-control">
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="content">Content</label>
                    <textarea id="content" class="form-control" rows="16"></textarea>
                </div>
                <div class="xl:w-1/2">
                    <label class="label block mb-2" for="excerpt">Excerpt</label>
                    <textarea id="excerpt" class="form-control" rows="8"></textarea>
                </div>
            </form>
        </div>
    </div>

    <!-- Recent -->
    <div class="lg:w-1/2 xl:w-1/4 lg:px-4 pt-5 lg:pt-0">
        <div class="relative card p-5">
            <h3>Publish</h3>
            <form class="mt-5">
                <div class="flex items-center">
                    <div class="w-1/4">
                        <label class="label block">Status</label>
                    </div>
                    <div class="w-3/4 ml-2">
                        <div class="custom-select">
                            <select class="form-control">
                                <option>Draft</option>
                                <option>Option</option>
                            </select>
                            <div class="custom-select-icon la la-caret-down"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="w-1/4">
                        <label class="label block">Visibility</label>
                    </div>
                    <div class="w-3/4 ml-2">
                        <div class="custom-select">
                            <select class="form-control">
                                <option>Public</option>
                                <option>Option</option>
                            </select>
                            <div class="custom-select-icon la la-caret-down"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="w-1/4">
                        <label class="label block">Publish</label>
                    </div>
                    <div class="w-3/4 ml-2">
                        <label class="label switch">
                            <input type="checkbox">
                            <span></span>
                            <span>Immediately</span>
                        </label>
                    </div>
                </div>
            </form>
            <div class="mt-5">
                <button class="btn btn_primary mt-5 ltr:mr-2 rtl:ml-2 uppercase">Publish</button>
                <button class="btn btn_outlined btn_secondary mt-5 uppercase">Save Draft</button>
            </div>
        </div>

        <!-- Categories -->
        <div class="card mt-5 p-5">
            <h3>Categories</h3>
            <div class="tabs">
                <nav class="tab-nav mt-5">
                    <button class="nav-link h5 uppercase active" data-toggle="tab" data-target="#tab-1">Most
                        Used</button>
                    <button class="nav-link h5 uppercase" data-toggle="tab" data-target="#tab-2">All
                        Categories</button>
                </nav>
                <div class="tab-content mt-5">
                    <div id="tab-1" class="collapse open">
                        <label class="custom-checkbox">
                            <input type="checkbox" checked="">
                            <span></span>
                            <span>Uncategorized</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Recent</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Featured</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Trending</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>International</span>
                        </label>
                    </div>
                    <div id="tab-2" class="collapse">
                        <label class="custom-checkbox">
                            <input type="checkbox" checked="">
                            <span></span>
                            <span>Uncategorized</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Recent</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Featured</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>Trending</span>
                        </label>
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox">
                            <span></span>
                            <span>International</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tags -->
        <div class="card mt-5 p-5">
            <h3>Tags</h3>
            <form class="mt-5">
                <label class="form-control-addon-within flex-row-reverse">
                    <input type="text" class="form-control ltr:pl-2 rtl:pr-2 border-none w-full" placeholder="Enter a tag">
                    <span class="flex items-center ltr:pl-4 rtl:pr-4">
                        <span class="badge badge_primary">
                            tag
                            <button type="button" class="focus:outline-none ltr:ml-1 rtl:mr-1 la la-times"></button>
                        </span>
                    </span>
                </label>
                <small class="block mt-2">Seperate tags with commas</small>
            </form>
        </div>

        <!-- Featured Image -->
        <div class="card mt-5 p-5">
            <h3>Featured Image</h3>
            <button class="mt-5 btn btn_outlined btn_secondary uppercase">Browse</button>
        </div>
    </div>
</div>
@stop