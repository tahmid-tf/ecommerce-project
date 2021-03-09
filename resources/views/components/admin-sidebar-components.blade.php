<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu (Products) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Products</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Components:</h6>
            <a class="collapse-item" href="{{route('product.index')}}">Product Index</a>
            <a class="collapse-item" href="{{route('product.create')}}">Add Product</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu (Approvals)-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Approvals</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Approval Components:</h6>
            <a class="collapse-item" href="{{route('approval.index')}}">Approval Index</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">



<!-- Nav Item - Pages Collapse Menu (Products) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        <i class="fas fa-fw fa-cog"></i>
        <span>History</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Components:</h6>
            <a class="collapse-item" href="{{route('history.index')}}">View all Histories</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu (Slider Image)-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Slider Components:</h6>
            <a class="collapse-item" href="{{route('slider.index')}}">Slider Index</a>
            <a class="collapse-item" href="{{route('slider.create')}}">Add Slider Image</a>
        </div>
    </div>
</li>

<!-- Divider -->

<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu (Slider Image)-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true" aria-controls="collapseAuthorization">
        <i class="fas fa-fw fa-cog"></i>
        <span>Authorization</span>
    </a>
    <div id="collapseAuthorization" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Slider Components:</h6>
            <a class="collapse-item" href="{{ route('subscriber.index') }}">User</a>
            <a class="collapse-item" href="{{ route('authorization.index') }}">Admin</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu (Category)-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
        <i class="fas fa-fw fa-cog"></i>
        <span>Category</span>
    </a>
    <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="{{ route('category.index') }}">Index</a>
            <a class="collapse-item" href="{{ route('category.create') }}">Create category</a>
        </div>
    </div>
</li>
<!-- Divider -->

<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu (Category)-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
        <i class="fas fa-fw fa-cog"></i>
        <span>Settings</span>
    </a>
    <div id="collapseSettings" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="{{ route('security.index') }}">Update Password</a>
        </div>
    </div>
</li>
<!-- Divider -->


