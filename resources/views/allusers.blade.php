@extends('layouts.master') 

                    @section('headerscripts')
                       @parent
                    @endsection

                    @section('content')
                    
            
            <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
                <div class="container-fluid px-0">
                  <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
              
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                 
                      <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder" src="/img/team/profile-picture-3.jpg">
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
                        
                            <div role="separator" class="dropdown-divider my-1"></div>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
                            Logout
                          </a>
                        </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
                          </div>
                          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                            <div class="d-block mb-4 mb-md-0">
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                        <li class="breadcrumb-item">
                                                <a href="/">
                                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                            </a>
                                        </li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">All users</li>
                                    </ol>
                                </nav>
                                <h2 class="h4">Registered Members</h2>
                              
                            </div>
                            <div class="btn-toolbar mb-2 mb-md-0" >
                                <button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal" data-bs-target="#modal-form-signup">
                                    <!-- Modal Content -->
                                          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Add
                                </button>
                                <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card p-3 p-lg-4">
                                                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    <div class="text-center text-md-center mb-4 mt-md-0">
                                                        <h1 class="mb-0 h4">Add Member </h1>
                                                    </div>
                                                    <form action="/allusers" method ="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <div>
                                                                    <label for="first_name">First Name</label>
                                                                    <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter your first name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div>
                                                                    <label for="last_name">Last Name</label>
                                                                    <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Also your last name" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="dob">Birthday</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text">
                                                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                                    </span>
                                                                    <input data-datepicker="" class="form-control datepicker-input" id="birthday" name="dob" type="text" placeholder="dd/mm/yyyy" required=""><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 341px; top: 375px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="btn prev-btn">«</button><button type="button" class="btn view-switch">June 2022</button><button type="button" class="btn next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1653807600000">29</span><span class="datepicker-cell day prev" data-date="1653894000000">30</span><span class="datepicker-cell day prev" data-date="1653980400000">31</span><span class="datepicker-cell day" data-date="1654066800000">1</span><span class="datepicker-cell day" data-date="1654153200000">2</span><span class="datepicker-cell day" data-date="1654239600000">3</span><span class="datepicker-cell day" data-date="1654326000000">4</span><span class="datepicker-cell day focused" data-date="1654412400000">5</span><span class="datepicker-cell day" data-date="1654498800000">6</span><span class="datepicker-cell day" data-date="1654585200000">7</span><span class="datepicker-cell day" data-date="1654671600000">8</span><span class="datepicker-cell day" data-date="1654758000000">9</span><span class="datepicker-cell day" data-date="1654844400000">10</span><span class="datepicker-cell day" data-date="1654930800000">11</span><span class="datepicker-cell day" data-date="1655017200000">12</span><span class="datepicker-cell day" data-date="1655103600000">13</span><span class="datepicker-cell day" data-date="1655190000000">14</span><span class="datepicker-cell day" data-date="1655276400000">15</span><span class="datepicker-cell day" data-date="1655362800000">16</span><span class="datepicker-cell day" data-date="1655449200000">17</span><span class="datepicker-cell day" data-date="1655535600000">18</span><span class="datepicker-cell day" data-date="1655622000000">19</span><span class="datepicker-cell day" data-date="1655708400000">20</span><span class="datepicker-cell day" data-date="1655794800000">21</span><span class="datepicker-cell day" data-date="1655881200000">22</span><span class="datepicker-cell day" data-date="1655967600000">23</span><span class="datepicker-cell day" data-date="1656054000000">24</span><span class="datepicker-cell day" data-date="1656140400000">25</span><span class="datepicker-cell day" data-date="1656226800000">26</span><span class="datepicker-cell day" data-date="1656313200000">27</span><span class="datepicker-cell day" data-date="1656399600000">28</span><span class="datepicker-cell day" data-date="1656486000000">29</span><span class="datepicker-cell day" data-date="1656572400000">30</span><span class="datepicker-cell day next" data-date="1656658800000">1</span><span class="datepicker-cell day next" data-date="1656745200000">2</span><span class="datepicker-cell day next" data-date="1656831600000">3</span><span class="datepicker-cell day next" data-date="1656918000000">4</span><span class="datepicker-cell day next" data-date="1657004400000">5</span><span class="datepicker-cell day next" data-date="1657090800000">6</span><span class="datepicker-cell day next" data-date="1657177200000">7</span><span class="datepicker-cell day next" data-date="1657263600000">8</span><span class="datepicker-cell day next" data-date="1657350000000">9</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="btn today-btn" style="display: none;">Today</button><button type="button" class="btn clear-btn" style="display: none;">Clear</button></div></div></div></div>                                               
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="gender">Gender</label>
                                                                <select class="form-select mb-0" id="gender" name="gender" aria-label="Gender select example" required="">
                                                                   
                                                                    <option value="female">Female</option>
                                                                    <option value="male">Male</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input class="form-control" id="email" type="email" name="email" placeholder="name@company.com" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input class="form-control" id="phone" name="phone" type="number" placeholder="+12-345 678 910" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="h5 my-4">Location</h2>
                                                        <div class="row">
                                                            <div class="col-sm-9 mb-3">
                                                                <div class="form-group">
                                                                    <label for="address">Address</label>
                                                                    <input class="form-control" id="address" name="adress" type="text" placeholder="Enter your home address" required="">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mt-3">
                                                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
                                                        </div>
                                                    </form>
                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Modal Content -->
                               
                            </div>
                         
                        </div>
                         <div class="table-settings mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col col-md-6 col-lg-3 col-xl-4">
                                <form action="/searchusers" method="GET">
                                           @csrf 
                                <div class="input-group me-2 me-lg-3 fmxw-400">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name="field" class="form-control" placeholder="Search">
                                        
</form>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="card card-body border-0 shadow table-wrapper table-responsive">
                            
                        @if(isset($errors))
                                      @if(count($errors) > 0)
                                      <div class="alert alert-success" role="alert">    {{$errors['name']}}!</div>
                                     @endif
                        @endif

                        @if (session('messages'))
                        <div class="alert alert-success" role="alert">
                            {{ session('messages') }}
                        </div>
                    @endif

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-gray-200">#</th>
                                        <th class="border-gray-200">name</th>						
                                  
                                        <th class="border-gray-200">Registration Date</th>
                                       <th class="border-gray-200">Status</th>
                                        <th class="border-gray-200">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    <!-- Item -->
                                    @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>
                                            <a href="#" class="fw-bold">
                                               {{ $subscriber->id}}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="fw-normal">{{$subscriber->name}}</span>
                                        </td>
                                                       
                                        <td><span class="fw-normal">
                                        {{$subscriber->created_at->format('Y-M-d')}}
                                       </span></td>
                              
                                        <td>@if (isset($subscriber->status['status']))
                                        @if (($subscriber->status['status'])  === 'active')
                                        <span class="fw-bold text-success"> 
                                         @elseif (($subscriber->status['status']) === 'cancelled')
                                         <span class="fw-bold text-danger"> 
                                         @else 
                                         <span class="fw-bold text-secondary"> 
                                         @endif
                                       
                                         {{$subscriber->status['status']}}</span></td>
                                            
                                            @else 
                                            <span class="fw-bold text-primary">
                                            unsubscribed</span></td>
                                            
                                            @endif
                                        <td>
                                        <!-- <a class="fw-bold text-info me-3  " href="{{ url('allusers/'.$subscriber->id) }}">
                                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                          View Details</a>
                                                 -->
                                                 <div class="dropdown me-1">
                                        <a   onclick="change({{$subscriber->id}})" class=" mb-3 dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                    
                                        <span class="fw-bold text-info">    
                                            Edit
                                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            
                                    </span>
                                        
</a>
                                        <ul class="dropdown-menu py-0" aria-labelledby="dropdownMenuOffset" style="">
                                            <li><a class="dropdown-item rounded-top" tabindex="-1" href="{{ url('allusers/'.$subscriber->id) }}"><span class="fas fa-eye me-2"></span>View Profile</a>
                                               </li>
                                  @if (isset($subscriber->status['status']))
                                        @if (($subscriber->status['status'])  === 'active')
                                        @else    
                                        <li>     <a class ="dropdown-item rounded-top" data-bs-toggle="modal"  data-bs-target="#modal-form" class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>activate Subscription</a>
                                            </li>
                                    @endif
                                 @else
                                 <li>     <a class ="dropdown-item rounded-top" data-bs-toggle="modal"  data-bs-target="#modal-form" class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>activate Subscription</a>
                                            </li>


                                            @endif
                                            </ul>
                                    </div>
                                            
                                        </td>
                                    </tr> 
                                    @endforeach                               
                                </tbody>
                            </table>
                            
                            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                <nav aria-label="Page navigation example">
                                {{$subscribers->links()}}
                                </nav>
                                <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> entries</div>
                            </div>
                        </div>
                          <!---Modal Content -->
                          <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form"  aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card p-3 p-lg-4">
                                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        
                                                        <form  method="post" action="/addsubscription" class="mt-4">
                                                      <!-- Form -->
                                                      @csrf
                                                      <input type="hidden" id="user_id" name="user_id" value="3"></input>
                                                      
                                                      <div class="mb-4">
                                                                <label for="email">Plan</label>
                                                               
                                     
                                        <select class="form-select" name="plan" aria-label="Default select example">
                                            <option value="Diamond Subscription Plan" selected>Diamond Subscription Plan</option>
                                            <option value="Gold Subscription Plan">Gold Subscription Plan</option>
                                            <option value="Platinum Subscription Plan">Platinum Subscription Plan</option>
                                            <option value="Flexible Subscription Plan">flexible Subscription Plan</option>
                                        </select>
                                    
                                                            </div>
                                                            <!-- End of Form -->
                                                            <div class="input-group">
                                                                <!-- Form -->
                                                                <div class="input-group mb-4">
                                                                  
                                                             
                                        <label for="issue_date">Issue Date</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </span>
                                            <input data-datepicker="" class="form-control datepicker-input" name="issue_date" type="text" placeholder="dd/mm/yyyy" required=""><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-top" style="left: 341px; top: 938.422px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="btn prev-btn">«</button><button type="button" class="btn view-switch">June 2022</button><button type="button" class="btn next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1653807600000">29</span><span class="datepicker-cell day prev" data-date="1653894000000">30</span><span class="datepicker-cell day prev" data-date="1653980400000">31</span><span class="datepicker-cell day" data-date="1654066800000">1</span><span class="datepicker-cell day" data-date="1654153200000">2</span><span class="datepicker-cell day" data-date="1654239600000">3</span><span class="datepicker-cell day" data-date="1654326000000">4</span><span class="datepicker-cell day" data-date="1654412400000">5</span><span class="datepicker-cell day" data-date="1654498800000">6</span><span class="datepicker-cell day focused" data-date="1654585200000">7</span><span class="datepicker-cell day" data-date="1654671600000">8</span><span class="datepicker-cell day" data-date="1654758000000">9</span><span class="datepicker-cell day" data-date="1654844400000">10</span><span class="datepicker-cell day" data-date="1654930800000">11</span><span class="datepicker-cell day" data-date="1655017200000">12</span><span class="datepicker-cell day" data-date="1655103600000">13</span><span class="datepicker-cell day" data-date="1655190000000">14</span><span class="datepicker-cell day" data-date="1655276400000">15</span><span class="datepicker-cell day" data-date="1655362800000">16</span><span class="datepicker-cell day" data-date="1655449200000">17</span><span class="datepicker-cell day" data-date="1655535600000">18</span><span class="datepicker-cell day" data-date="1655622000000">19</span><span class="datepicker-cell day" data-date="1655708400000">20</span><span class="datepicker-cell day" data-date="1655794800000">21</span><span class="datepicker-cell day" data-date="1655881200000">22</span><span class="datepicker-cell day" data-date="1655967600000">23</span><span class="datepicker-cell day" data-date="1656054000000">24</span><span class="datepicker-cell day" data-date="1656140400000">25</span><span class="datepicker-cell day" data-date="1656226800000">26</span><span class="datepicker-cell day" data-date="1656313200000">27</span><span class="datepicker-cell day" data-date="1656399600000">28</span><span class="datepicker-cell day" data-date="1656486000000">29</span><span class="datepicker-cell day" data-date="1656572400000">30</span><span class="datepicker-cell day next" data-date="1656658800000">1</span><span class="datepicker-cell day next" data-date="1656745200000">2</span><span class="datepicker-cell day next" data-date="1656831600000">3</span><span class="datepicker-cell day next" data-date="1656918000000">4</span><span class="datepicker-cell day next" data-date="1657004400000">5</span><span class="datepicker-cell day next" data-date="1657090800000">6</span><span class="datepicker-cell day next" data-date="1657177200000">7</span><span class="datepicker-cell day next" data-date="1657263600000">8</span><span class="datepicker-cell day next" data-date="1657350000000">9</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="btn today-btn" style="display: none;">Today</button><button type="button" class="btn clear-btn" style="display: none;">Clear</button></div></div></div></div>                                               
                                        
                                    
                                                                </div>
                                                                <!-- End of Form -->
                                                                <div class="d-flex justify-content-between align-items-top mb-4">
                                                               </div>
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-gray-800">Save</button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
        
                          
             
           
      @endsection
   
      @section('footer')  
      <script>
          function change(value){
          document.getElementById("user_id").value= value;
          
          }
          
       </script>
         
 <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
</footer>
      @endsection
      @section('footerscripts')           
          @parent
      @endsection