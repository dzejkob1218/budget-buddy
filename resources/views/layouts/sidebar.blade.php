<!-- Sidebar  -->

<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Budget Buddy</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Menu</p>
        <!--
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
               class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>
        -->
        <li>
            <a href="/dashboard">Dashboard</a>
        </li>

        <li>
            <a href="/categories">Categories</a>
        </li>

        <li>
            <a href="/add">Add Shopping</a>
        </li>

        <li>
            <a> <!--href="/history"-->History</a>
        </li>

        <li>
            <a> <!--href="/stats"--> Stats</a>
        </li>
    </ul>
</nav>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
