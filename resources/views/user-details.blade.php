@extends('layouts.master') 

                    @section('headerscripts')
                       @parent
                    @endsection

                    @section('content')
{{messages}}

                    @endsection
   
   @section('footer')           
<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
</footer>
   @endsection
   @section('footerscripts')           
       @parent
   @endsection
    