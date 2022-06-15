@extends('layouts.master') 

                    @section('headerscripts')
                       @parent
                    @endsection

                    @section('content')


      
            <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
                <div class="container-fluid px-0">
                  <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                          <li class="breadcrumb-item">
                              <a href="/">
                                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                              </a>
                          </li>
                         
                          <li class="breadcrumb-item active" aria-current="page">Settings</li>
                      </ol>
                  </nav>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                 
                      <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder" src="img/team/profile-picture-3.jpg">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                              <span class="mb-0 font-small fw-bold text-gray-900"> {{ Auth::user()->name }}</span>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                          
                          <a class="dropdown-item d-flex align-items-center" href="profile">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                            My Profile
                          </a>
                          <a class="dropdown-item d-flex align-items-center" href="allusers">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                            Add User
                        </a>
                          <a class="dropdown-item d-flex align-items-center" href="settings">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            Settings
                          </a>
                          <a class="dropdown-item d-flex align-items-center" href="messages">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
                            Messages
                          </a>
                      
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h2 text-secondary mb-0 mb-4">Billing Settings</h2>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">Plan</th>
                                        <th class="border-0">Duration</th>
                                        <th class="border-0">Price(NGN)</th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    <form action="settings" method="POST">
       
                                    @foreach ($billings as $billing)
                                    <tr>
                                        <input type="hidden" name="{{$billing->id}}" value="{{$billing->id}}"/>
                                        <td><a href="#" class="text-primary fw-bold">{{$billing->id}}</a> </td>
                                        <td class="fw-bold align-items-center">
                                            <svg class="icon icon-xxs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                            <input type="hidden" name="{{$billing->plan}}" value="{{$billing->plan}}"/>
                                       
                                            {{$billing->plan}}
                                        </td>
                                        <td>{{$billing->duration}}
                                        <input type="hidden" name="{{$billing->duration}}" value="{{$billing->duration}}"/>
                                       
                                        </td>
                                        <td>
                                            <input  class="is-valid" name="{{'price-'.$billing->plan}}" type="number" value="{{$billing->price}}"required>
                                        </td>
 
                                    </tr>
                                    @endforeach
                                    <!-- End of Item -->
    
                                    <!-- Item -->
                                    
                                    <!-- End of Item -->
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
                        </div>
                    </div>
</form>
                    </div>
                    </div>
                    <div class="col-md-12 col-xl-8 col-sm-12">
                    <div class="card card-body border-0 shadow mb-4 mb-xl-6">
                        <h2 class="h2 text-secondary mb-0 mb-4">Notification Settings</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                <div>
                                    <h3 class="h6 mb-1">Subscripton notification</h3>
                                    <p class="small pe-4">send me an email if a new user subscribes</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="user-notification-1">
                                        <label class="form-check-label" for="user-notification-1"></label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
              
              
            </div>
     
            @endsection
   
   @section('footer')           
<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
</footer>
   @endsection
   @section('footerscripts')           
       @parent
   @endsection