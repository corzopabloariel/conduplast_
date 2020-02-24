<div class="card border-0 mt-2" id="wrapper-tabla">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table mb-0" id="tabla"></table>
        </div>
    </div>
    @isset( $paginate )
    <div class="card-footer d-flex justify-content-center">
        @if( isset( $appends ) )
            {{ $paginate->appends( [ $appends[ "n" ] => $appends[ "v" ] ] )->links() }}
        @else
            {{ $paginate->links() }}
        @endif
    </div>
    @endisset
</div>