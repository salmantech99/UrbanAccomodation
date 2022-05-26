<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                          <a data-toggle="collapse" href="#collapse6"><i class="fas fa-tachometer-alt"></i>Dashboard</a>  
                        </li>
                        <div id="collapse6" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/add_hotels/'); ?>">Dashboard 1</a>
                                </li>
                                 <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/rooms/'); ?>">Dashboard 2</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/room_extra/'); ?>">Dashboard 3</a>
                                </li>
                            </ul>
                        </div>
						<li>
                          <a data-toggle="collapse" href="#collapse10"><i class="fas fa-users"></i>Admins</a>  
                        </li>
                        <div id="collapse10" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Admin/manage'); ?>">Manage Admins</a>
                                </li>
                            </ul>
                        </div>
                        <li>
                          <a data-toggle="collapse" href="#collapse1"><i class="fas fa-hotel"></i> Hotels </a>  
                        </li>
                        <div id="collapse1" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/add_hotels/'); ?>">
                                        Hotels</a>
                                </li>
                                 <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/rooms/'); ?>">
                                        Rooms</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/room_extra/'); ?>">
                                        Hotel Extras</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/hotel_reviews/'); ?>">
                                            Hotel Reviews</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/hotel_settings/'); ?>">
                                            Hotel Settings</a>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <a data-toggle="collapse" href="#collapse11"><i class="fas fa-suitcase"></i>Vacation</a>  
                        </li>
                        <div id="collapse11" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/vacations/'); ?>">
                                        Vacations</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/vacations_add/'); ?>">
                                        Add New</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/vacations_extra/'); ?>">
                                        Extras</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/vacation_settings/'); ?>">
                                        Settings</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li> -->                         
                        <li>
                            <a data-toggle="collapse" href="#collapse3">
                                <i class="fas fa-plane"></i>Flights</a>
                        </li>
                        <div id="collapse3" class="panel-collapse collapse">
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/flights_add/'); ?>">
                                ROUTES</a>
                            </li>
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/airport_add/'); ?>">
                                AIRPORTS</a>
                            </li>
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/flight_settings/'); ?>">
                                SETTINGS</a>
                            </li>
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/airlines_add/'); ?>">
                                AIRLINES</a>
                            </li>
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/countries_add/'); ?>">
                                COUNTRIES</a>
                            </li>
                            <li>
                                <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/flight_slider/'); ?>">
                                FLIGHTS SLIDER</a>
                            </li>
                        </div>
                        <li>
                            <a data-toggle="collapse" href="#collapse2"><i class="fas fa-car"></i> Cars </a>  
                        </li>
                        <div id="collapse2" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Car/car_page/'); ?>">
                                    Cars</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Car/extra_car/'); ?>">
                                    Extras</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Car/car_settings/'); ?>">
                                    Cars Settings</a>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <a data-toggle="collapse" href="#collapse4"><i class="fas fa-copy"></i>Reports And Orders</a>  
                        </li>
                        <div id="collapse4" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/hotel_orders/'); ?>">Hotel Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/flight_orders/'); ?>">Flight Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Car/car_orders/'); ?>">Car Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/vacation_orders/'); ?>">Vacation Orders</a>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <a data-toggle="collapse" href="#collapse8"><i class="fas fa-copy"></i>Login User Orders</a>  
                        </li>
                        <div id="collapse8" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Hotels/user_hotel_orders/'); ?>">Hotel Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Flights/user_flight_orders/'); ?>">Flight Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Car/user_car_orders/'); ?>">Car Orders</a>
                                </li>
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Vacation/user_vacation_orders/'); ?>">Vacation Orders</a>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <a data-toggle="collapse" href="#collapse5"><i class="zmdi zmdi-account"></i>Account Settings</a>  
                        </li>
                        <div id="collapse5" class="panel-collapse collapse">
                            <ul class="list-group" style="list-style: none; text-align: left;">
                                <li>
                                    <a class="navbar-icons-alignment" href="<?php echo site_url('Login/profile/'); ?>">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                            </ul>
                        </div>
                        <li> <a class="js-arrow" href="<?php echo site_url('Hotels/logout/'); ?>"><i class="zmdi zmdi-power"></i>Logout</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
