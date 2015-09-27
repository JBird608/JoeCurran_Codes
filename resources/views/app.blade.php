<!-- Add Document Head, Meta Data & Top Body Tag -->
@include('core._meta.doc_open')
    @include('core._elements._quickclient')

    <div class="row" id="core_content">
        @yield('template')
    </div>

    @include('core._elements._footer')
        <!-- Add Document Closing Body & JavaScript -->
@include('core._meta.doc_close')