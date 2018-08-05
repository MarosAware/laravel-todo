<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <ul class="list-unstyled components">
            <p>To Do List</p>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tasks</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ route('task.create') }}">Add task</a>
                    </li>
                    <li>
                        <a href="#">Completed</a>
                    </li>
                    <li>
                        <a href="#">Uncompleted</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route('category.index') }}">All categories</a>
                    </li>
                    <li>
                        <a href="{{ route('category.create') }}">Add category</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>