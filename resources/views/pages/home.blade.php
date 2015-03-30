@extends('app')

    @include('partials.carousel')

@section('content')
    
    @include('partials.marketing')

</div></div>{{-- ------adding divs to close container(s) to able to have a full width section---- --}}

    @include('partials.featurettes')


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

@stop