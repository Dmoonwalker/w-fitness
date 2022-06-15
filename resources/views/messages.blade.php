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
                         
                          <li class="breadcrumb-item active" aria-current="page">Messages</li>
                      </ol>
                  </nav>
                    <!-- Navbar links -->
                    <nav>
                    <ul class="navbar-nav align-items-center">
                 
                      <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder" src="img/team/profile-picture-3.jpg">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                              <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}</span>
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
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                
                <div class="col-lg-4">
                    <!-- Button Modal -->
                    <button type="button" class="btn btn-block btn-gray-800 " data-bs-toggle="modal" data-bs-target="#modal-default">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        New 

                    </button>
                    <!-- Modal Content -->
                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="h6 modal-title">Enter your message</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/messages" method="POST">
                                      @csrf
                                    <div class="mb-4">
                                        <label for="email">Topic</label>
                                        <input type="text" class="form-control" id="topic" name="topic" aria-describedby="emailHelp" required>
                                        </div>
                                    <div class="my-4">
                                        <label for="textarea">Enter Message Here</label>
                                        <textarea class="form-control" name="post" placeholder="Enter your message..." id="textarea" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary">Send</button>
                                    <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal Content -->
                </div>
                        
                  
                </div>
              
            </div>
              <div class="list-group list-group-flush">
                @foreach($messages as $message)
                 <a href="#" class="list-group-item list-group-item-action border-bottom">
                  <div class="row align-items-center">
                     
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              
                          <h3>  <small class="text-uppercase text-muted">Secondary text</small></h3>
                            </div>
                            <div class="text-end">
                              <small>{{$message->created_at}}</small>
                            </div>
                        </div>
                        <p class="font-medium mt-1 mb-0">{{$message->post}}</p>
                      </div>
                  </div>
                </a>
                @endforeach
                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                  <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                  View all
                </a>
              </div>
          
      @endsection
   
   @section('footer')           

   @endsection
   @section('footerscripts')           
       @parent
   @endsection
    