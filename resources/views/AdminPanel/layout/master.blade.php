<!--Head of the backend-office-->
@include('AdminPanel.frontend.includes.head')
<!-- PAGE -->
<div class="page">
    <!--Main Content-->
    <div class="page-main">

        <!--Header of the backend-office-->
        @include('AdminPanel.frontend.includes.header')

        <!--Left-Sidebar of the backend-office-->
        @include('AdminPanel.frontend.includes.left-sidebar')

        <!--Content of the WebPage-->
        @yield('content')
    </div>

    <!--Right-Sidebar of the backend-office-->
    @include('AdminPanel.frontend.includes.right-sidebar')

    <!--Country-Selector of the backend-office-->
    @include('AdminPanel.frontend.includes.country-selector')

    <!--Footer of the backend-office-->
    @include('AdminPanel.frontend.includes.footer')
</div>

<!--Foot of the backend-office-->
@include('AdminPanel.frontend.includes.foot')