<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo URL; ?>/assets/backend/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo URL ?>/index.php/backend/dashboard/show"><i class="fa fa-tachometer"></i> Home </a>
                    
                  </li>
                  <li><a><i class="fa fa-cog"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL ?>/index.php/backend/add_institution_details/create">Add Institutions Details</a></li>
                      <li><a href="<?php echo URL ?>/index.php/backend/academic_details/create">Academic Details</a></li>
                      <li><a href="<?php echo URL ?>/index.php/backend/student_import/create">Student Import </a></li>
                      <li><a href="<?php echo URL ?>/index.php/backend/employee_import/create">Employee Import</a></li>
                      <li><a href="<?php echo URL ?>/index.php/backend/privileges/create">Privileges </a></li>
                      <li><a href="<?php echo URL ?>/index.php/backend/assign_courses/create">Assign Courses </a></li>
					  <li><a href="<?php echo URL ?>/index.php/backend/users/create">Users </a></li>
					  <li><a href="<?php echo URL ?>/index.php/backend/enquiry_list/create">Enquiry List </a></li>
					  <li><a href="<?php echo URL ?>/index.php/backend/login_page/create">Login Page </a></li>
					  <li><a href="<?php echo URL ?>/index.php/backend/fees_allocation_import/create">Fees Allocation Import </a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-users"></i> Academic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a>Course & Batch<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/course/create">Course</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/batch/create">Batch</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/classteacher_allocation/create">Class Teacher Allocation</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Subjects<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/subjects/create">Subjects</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/assign_subjects/create">Assign Subjects</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/subject_allocation/create">Subject Allocation</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/elective_subjects/create">Elective Subjects</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Lesson Planning<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/lesson/create">Lesson</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Time Table<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/set_timetable/create">Set Time Table</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/active_timetable/create">Active Time Table</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/viewbatch_timetable">View Batch Time Table</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/viewteacher_timetable/create">View Teacher Time Table</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/search_proxy/create">Search Proxy</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/teacher_working_hours/create">Teacher Working Hours</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Exams<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/gpa/create">GPA</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/cce/create">CCE</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/exame_hall/create">Exame Hall</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Assignments & Notes<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/add_assignments/create">Add Assignments</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/add_notes/create">Add Notes</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Certifications<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/certificate_type/create">Certificate Type</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/custom_certificate/create">Custom Certificate</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/generate_certificate/create">Generate Certificate</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Placements<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/placements_cell_members/create">Placements Cell Members</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/placements_vendors/create">Placements Vendors</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/atendees/create">Atendees</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/placed_details/create">Placed Details</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Promotion & Alumni<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/promotion_alumni/create">Promotion & Alumni</a>
                            </li>
                            <li><a href="<?php echo URL ?>/index.php/backend/alumni_members/create">Alumni Members</a>
                            </li>
							<li><a href="<?php echo URL ?>/index.php/backend/data_reset/create">Data Reset</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Occurrence<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/occurrence_register/create">Occurrence Register</a>
                            </li>
                          </ul>
                        </li>
						
						<li><a>Circular<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/circular/create">Circular</a>
                            </li>
                          </ul>
                        </li>
                        
                    </ul>
                  </li>
				  
                  <li><a><i class="fa fa-eye"></i> HR/Payroll <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					
                      <li><a>Employee Management<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/add_user_type/create">Add User Type</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/add_department/create">Add Department</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/add_designation/create">Add Designation</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/add_employee/create">Add Employee</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/employee_list/create">Employee List</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/addbank_details/create">Add Bank Details</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/print_list/create">Print List</a>
                            </li>
                          </ul>
                        </li>
						
					  <li><a>Payroll<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/pay_head/create">Pay Head</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/payment_types/create">Payment Types</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/salary_settings/create">Salary Settings</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/employee_salary/create">Employee Salary</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/generatepay_slip/create">Generate Pay Slip</a>
                            </li>
                          </ul>
                        </li>
						
					  <li><a>Leave Management<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/leave_category/create">Leave Category</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/leave_details/create">Leave Details</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/leave_application/create">Leave Application</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL ?>/index.php/backend/leave_approval/create">Leave Approval</a>
                            </li>
                          </ul>
                        </li>	
						
					  <li><a href="<?php echo URL ?>/index.php/backend/attendence/create">Attendence</a></li>
					  
                   
                    </ul>
                  </li>
				  
                  <li><a><i class="fa fa-user"></i> Student <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/student/create">Student Category</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/student/student_admission">Student Addmission</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/student/student_list">Student List</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/student/attendence">Attendence</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/student/print_list">Print List</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/student/guardian_list">Guardian List</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/student/student_roll_no">Roll Number</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/student/student_attendance_import">Student Attendance Import</a></li>
                    </ul>
                  </li>
				  
                  <li><a><i class="fa fa-bar-chart"></i> Finance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					
						<li><a>Fees<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_category/create">Fee Category</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_sub_category/create">Fee Sub Category</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_waiver/create">Fee Waiver</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_template/create">Fee Template</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_allocation/create">Fee Allocation</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_collection/create">Fee Collection</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/quick_payment/create">Quick Payment</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_due_list/create">Fee Due List</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_reports/create">Reports</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_import/create">Fee Import</a>
                            </li>
                          </ul>
                        </li>
						
				<li><a>Accounting<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/account_group/create">Account Group</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/voucher_master/create">Voucher Master</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/voucher_head/create">Voucher Head</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/create_voucher/create">Create Voucher</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/day_book/create">Day Book</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/cash_book/create">Cash Book</a>
                        </li>
						<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/bank_book/create">Bank Book</a>
                        </li>
                    </ul>
                 </li>
                      
                    </ul>
                  </li>
				  
                  <li><a><i class="fa fa-book"></i>Library <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/book_category/create">Add Category</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/add_books/create">Add Books</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/issue_books/create">Issue Book</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/request_details/create">Request Details</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/book_return/create">Book Return</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/reports/create">Reports</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-truck"></i>Transport <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/add_vehicle/create">Add Vehicle</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/add_driver/create">Add Driver</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/add_route/create">Add Route</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/add_destination/create">Add Destination</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/transport_allocation/create">Transport Allocation</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/fee_collection/create">Fee Collection</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-home"></i>Hostel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/hostel_details/create">Hostel Details</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/hostel_room/create">Hostel Room</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_allocation/create">Hostel Allocation</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_request_details/create">Request Details</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_transfer_vacate/create">Hostel Transfer/vacate</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_register/create">Hostel Register</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_visitors/create">Hostel Visitors</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/hostel_fee_collection/create">Hostel Fee Collection</a></li>
					  <li><a>Reports<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/hostel_detail_report/create">Hostel Detail report</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/room_availability_report/create">Room Availability Report</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/room_request_report/create">Room Request Report</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/room_occupancy_report/create">Room occupancy Report</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/fee_report_hostel/create">Fee Report</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-envelope"></i>Messages/SMS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/mailbox/create">Mail Box</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/sms_settings/create">SMS Settings</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/bulk_sms/create">Bulk SMS</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-list-ul"></i>Store Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Inventory<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/vendors/create">Vendors</a>
                            </li>
                            <li><a href="<?php echo URL; ?>/index.php/backend/inventory_category/create">Inventory Category</a>
                            </li>
							<li><a href="<?php echo URL; ?>/index.php/backend/inventory_item/create">Inventry Item</a>
                            </li>
                            <li><a href="<?php echo URL; ?>/index.php/backend/inventory_issue/create">Inventory Issue</a>
                            </li>
							<li><a href="<?php echo URL; ?>/index.php/backend/stock_register/create">Stock Register</a>
                            </li>
							<li><a href="<?php echo URL; ?>/index.php/backend/issue_report/create">Issue Report</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-globe"></i>Performance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					
                      <li><a>GPA<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/student_performance/create">Student Performance</a>
                            </li>
                            <li><a href="<?php echo URL; ?>/index.php/backend/course_performance/create">Course Performance</a>
                            </li>
                          </ul>
                        </li>
                      
					  <li><a>CCE<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/student_performance_cce/create">Student Performane</a>
                            </li>
							<li class="sub_menu"><a href="<?php echo URL; ?>/index.php/backend/student_performance_cce/create">Course Performance</a>
                            </li>
                          </ul>
                        </li>
						
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-star"></i>Events <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/add_event/create">Add Event</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/event_types/create">Event Type</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-link"></i>Integration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/integration/create">Integration</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/vehicle_tracking/create">Vehicle Tracking</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-file-text"></i>Task Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/assign_task/create">Assign Task</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/task_details/create">Task Details</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-files-o"></i>Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/student_reports/create">Student Reports</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/student_details/create">Student Details</a></li>
					  <li><a href="<?php echo URL; ?>/index.php/backend/feedue_reports/create">Fee Due Reports</a></li>
                      <li><a href="<?php echo URL; ?>/index.php/backend/feepaid_reports/create">Fee Paid Reports</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-paper-plane"></i>Withdrawal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/withdrawal/create">Withdrawal</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-cloud-download"></i>Data Export <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/index.php/backend/export/create">Export</a></li>
                    </ul>
                  </li>
				  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>